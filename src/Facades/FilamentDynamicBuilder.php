<?php

namespace Jaymeh\FilamentDynamicBuilder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jaymeh\FilamentDynamicBuilder\FilamentDynamicBuilder
 */
class FilamentDynamicBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Jaymeh\FilamentDynamicBuilder\FilamentDynamicBuilder::class;
    }
}
