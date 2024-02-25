<?php

namespace Jaymeh\FilamentDynamicBuilder\Events;

use Illuminate\Foundation\Events\Dispatchable;

class PageContentBlockAttributesEvent
{
    use Dispatchable;

    /**
     * Constructor for class.
     */
    public function __construct(protected string $name, public array $attributes)
    {
    }

    /**
     * Returns the name of the component.
     */
    public function getName(): string
    {
        return $this->name;
    }
}
