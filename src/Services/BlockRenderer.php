<?php

namespace Jaymeh\FilamentDynamicBuilder\Services;

use Illuminate\Support\Collection;
use Jaymeh\FilamentDynamicBuilder\PageContentBlock;
use Jaymeh\FilamentDynamicBuilder\Events\PageContentBlockViewsEvent;
use Jaymeh\FilamentDynamicBuilder\Events\PageContentBlockAttributesEvent;

class BlockRenderer
{
    /**
     * Renders a block.
     *
     * @param Collection $content The content to render.
     *
     * @return \Illuminate\Support\Collection<\Jaymeh\FilamentDynamicBuilder\PageContentBlock>
     */
    public function render(Collection $content)
    {
        $pageContentBlockViewsEvent = new PageContentBlockViewsEvent();
        event($pageContentBlockViewsEvent);

        return $content->map(
            function (array $block) use ($pageContentBlockViewsEvent) {
                if (!isset($block['layout'])) {
                    return null;
                }

                if (!isset($pageContentBlockViewsEvent->views[$block['type']])) {
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
     * @param string $name
     * @param array $attributes
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
