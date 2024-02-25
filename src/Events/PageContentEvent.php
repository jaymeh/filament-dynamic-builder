<?php

namespace Jaymeh\FilamentDynamicBuilder\Events;

use Filament\Forms\Components\Builder;
use Illuminate\Foundation\Events\Dispatchable;

class PageContentEvent
{
    use Dispatchable;

    /**
     * List of registered Blocks.
     *
     * @var array
     */
    public $blocks = [];

    /**
     * Constructor for class.
     *
     * @param Builder $builder Main builder instance.
     */
    public function __construct(private Builder $builder)
    {
    }
}
