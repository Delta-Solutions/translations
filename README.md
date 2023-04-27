![Translations](https://banners.beyondco.de/translations.png?theme=light&packageManager=composer+require&packageName=delta-solutions%2Ftranslations&pattern=architect&style=style_1&description=Store+your+spatie%2Flaravel-translation-loader+powered+translations+in+columns+instead+of+in+a+json+field&md=1&showWatermark=0&fontSize=100px&images=flag&widths=auto)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/delta-solutions/translations.svg?style=flat-square)](https://packagist.org/packages/delta-solutions/translations)
[![Total Downloads](https://img.shields.io/packagist/dt/delta-solutions/translations.svg?style=flat-square)](https://packagist.org/packages/delta-solutions/translations)

# Translations in columns loader

This package provides a migration and a model to extend the spatie/laravel-translation-loader so you can store your translations in columns instead of one json field.  One column per locale.


## Installation

You can install the package via composer:

```bash
composer require delta-solutions/translations
```

Follow the installation steps as explained in the Spatie docs https://github.com/spatie/laravel-translation-loader

Define the locales in the `translation-loader.php` config file, one locale per database column.  This is used in the migration to create the database fields.

```
 'locales' => ['nl', 'fr', 'en', 'de', 'es']   
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="translations-migrations"
php artisan migrate
```

This will create the fields in your database as specified in the locales array

![example of table](https://github.com/Delta-Solutions/assets/blob/main/translations/table_example.png)

Use the model from this package as the model for the spatie/laravel-translation-loader. This is configured via the `model` in the config. Change it to

```
 'model' => DeltaSolutions\Translations\Models\LanguageLine::class,
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Andreas](https://github.com/Delta-Solutions)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
