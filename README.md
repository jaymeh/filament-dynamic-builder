# Extends the Builder field for Filament, allowing a new API to sit on top which allows global blocks to be registered.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jaymeh/filament-dynamic-builder.svg?style=flat-square)](https://packagist.org/packages/jaymeh/filament-dynamic-builder)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jaymeh/filament-dynamic-builder/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jaymeh/filament-dynamic-builder/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jaymeh/filament-dynamic-builder/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jaymeh/filament-dynamic-builder/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jaymeh/filament-dynamic-builder.svg?style=flat-square)](https://packagist.org/packages/jaymeh/filament-dynamic-builder)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require jaymeh/filament-dynamic-builder
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-dynamic-builder-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-dynamic-builder-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-dynamic-builder-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentDynamicBuilder = new Jaymeh\FilamentDynamicBuilder();
echo $filamentDynamicBuilder->echoPhrase('Hello, Jaymeh!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jamie Sykes](https://github.com/jaymeh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
