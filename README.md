# Base

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

# L-ARANE Packages Suite 
L-ARANE Packages Suite is a collection of Laravel packages that help developers to easily implement services oriented applications based on this framework. Each package serves as a service, including its own service handler and API.

 # Base package
Base package provides an easy way to setup a new Laravel application, including services to handle users, roles, permissions, authentication, countries, system and user settings an exception handling.

## Structure

```
src/
    Lang/
    Models/
        Entities/
        Traits/
    Migrations/
    Providers/
    Services/
        Handlers/
routes.php        
```


## Install


``` bash
composer require arane/base
```

In Laravel 5.5 the service provider will automatically get registered. In older versions of the framework just add the service provider in config/app.php file:

``` php
'providers' => [
    // ...
    Arane\Base\Providers\BaseServiceProvider::class,
]; 
```

Publish migration files:

``` bash
php artisan vendor:publish --provider="Arane\Base\BaseServiceProvider" --tag="migration"
```

After the migration has been published, create package tables by running the migrations:

``` bash
php artisan migrate
```

Publish config files:

``` bash
php artisan vendor:publish --provider="Arane\Base\BaseServiceProvider" --tag="config"
```

Publish language files:

``` bash
php artisan vendor:publish --provider="Arane\Base\BaseServiceProvider" --tag="lang"
```


## Usage



## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email :author_email instead of using the issue tracker.

## Credits

- [:author_name][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:vendor/:package_name
[link-travis]: https://travis-ci.org/:vendor/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-downloads]: https://packagist.org/packages/:vendor/:package_name
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
