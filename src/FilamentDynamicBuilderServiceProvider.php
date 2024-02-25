<?php

namespace Jaymeh\FilamentDynamicBuilder;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentDynamicBuilderServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-dynamic-builder';

    public static string $viewNamespace = 'filament-dynamic-builder';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasViews(self::$viewNamespace);
    }
}
