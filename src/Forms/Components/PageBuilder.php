<?php

namespace Jaymeh\FilamentDynamicBuilder\Forms\Components;

use Filament\Forms\Components\Builder;
use Jaymeh\FilamentDynamicBuilder\Events\PageContentEvent;

class PageBuilder extends Builder
{
    /**
     * Handles dynamic registration of Builder Blocks.
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->registerLayoutsFromEvent();
    }

    /**
     * {@inheritdoc}
     */
    protected function registerLayoutsFromEvent()
    {
        $pageContentEvent = new PageContentEvent($this);
        event($pageContentEvent);

        $this->blocks($pageContentEvent->blocks);
    }

    /**
     * Excludes blocks by name.
     *
     * @param  array  $blocks  Layout names to exclude.
     * @return self
     */
    public function exclude(array $blocks)
    {
        $filteredBlocks = collect($this->getChildComponents())
            ->filter(
                function ($block) use ($blocks) {
                    return ! in_array($block->getName(), $blocks);
                }
            )->values();

        $this->childComponents($filteredBlocks->toArray());

        return $this;
    }
}
