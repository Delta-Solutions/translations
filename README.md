# This is my package translations


This package provides a migration and a model to extend the Spatie LanguageLine .... 


## Installation

You can install the package via composer:

```bash
composer require delta-solutions/translations
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="translations-migrations"
php artisan migrate
```

## Usage

Beter te schrijven ---> change your model to the model of this package , provide an array of locales in the spatie config , add these locales before you run your migrations 

```
    'locales' => ['nl', 'fr', 'en', 'de']
   
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
