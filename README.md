# This is my package laravel-backpack-help-docs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/seanpoyntersmith/laravel-backpack-help-docs.svg?style=flat-square)](https://packagist.org/packages/seanpoyntersmith/laravel-backpack-help-docs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/seanpoyntersmith/laravel-backpack-help-docs/run-tests?label=tests)](https://github.com/seanpoyntersmith/laravel-backpack-help-docs/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/seanpoyntersmith/laravel-backpack-help-docs/Check%20&%20fix%20styling?label=code%20style)](https://github.com/seanpoyntersmith/laravel-backpack-help-docs/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/seanpoyntersmith/laravel-backpack-help-docs.svg?style=flat-square)](https://packagist.org/packages/seanpoyntersmith/laravel-backpack-help-docs)

---

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require seanpoyntersmith/laravel-backpack-help-docs
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="SeanPoynterSmith\LaravelBackpackHelpDocs\LaravelBackpackHelpDocsServiceProvider" --tag="laravel-backpack-help-docs-migrations"
php artisan migrate
```
```bash
php artisan backpack:add-sidebar-content "<li class='nav-item'><a class='nav-link' href='{{ backpack_url('help-doc') }}'><i class='nav-icon la la-question'></i> Help docs</a></li>"
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="SeanPoynterSmith\LaravelBackpackHelpDocs\LaravelBackpackHelpDocsServiceProvider" --tag="laravel-backpack-help-docs-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-backpack-help-docs = new SeanPoynterSmith\LaravelBackpackHelpDocs();
echo $laravel-backpack-help-docs->echoPhrase('Hello, SeanPoynterSmith!');
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

- [Séan Poynter-Smith](https://github.com/spoyntersmith)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
