<?php

namespace Jaymeh\FilamentDynamicBuilder\Services;

use Illuminate\Support\Collection;
use Jaymeh\FilamentDynamicBuilder\Events\PageContentBlockAttributesEvent;
use Jaymeh\FilamentDynamicBuilder\Events\PageContentBlockViewsEvent;
use Jaymeh\FilamentDynamicBuilder\PageContentBlock;

class BlockRenderer
{
    /**
     * Renders a block.
     *
     * @param  Collection|array  $content  The content to render.
     * @return \Illuminate\Support\Collection<\Jaymeh\FilamentDynamicBuilder\PageContentBlock>
     */
    public function render($content)
    {
        $pageContentBlockViewsEvent = new PageContentBlockViewsEvent();
        event($pageContentBlockViewsEvent);

        return collect($content)->map(
            function (array $block) use ($pageContentBlockViewsEvent) {
                if (! isset($block['type'])) {
                    return null;
                }

                if (! isset($pageContentBlockViewsEvent->views[$block['type']])) {
                    return null;
                }

                $preprocessedAttributes = $this->preprocessAttributes(
                    $block['type'],
                    json_decode(json_encode($block['data'] ?? []), true)
                );

                return new PageContentBlock(
                    $pageContentBlockViewsEvent->views[$block['type']],
                    $preprocessedAttributes
                );
            }
        );
    }

    /**
     * Fires off a pre-render event.
     *
     *
     * @return array
     */
    private function preprocessAttributes(string $name, array $attributes)
    {
        $pageContentBlockAttributesEvent = new PageContentBlockAttributesEvent($name, $attributes);
        event($pageContentBlockAttributesEvent);

        return $pageContentBlockAttributesEvent->attributes;
    }
}
