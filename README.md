# php-utilities

[![Latest Version on Packagist](https://img.shields.io/packagist/v/neontsun/php-utilities.svg?style=flat-square)](https://packagist.org/packages/neontsun/php-utilities)
[![CodeFactor](https://www.codefactor.io/repository/github/neontsun/php-utilities/badge)](https://www.codefactor.io/repository/github/neontsun/php-utilities)
[![Total Downloads](https://img.shields.io/packagist/dt/neontsun/php-utilities.svg?style=flat-square)](https://packagist.org/packages/neontsun/php-utilities)

The package collects functions and classes that are used in web applications for faster development in PHP. It can be used with any php platform or php core.

## Installation

You can install the package via composer:

```bash
composer require neontsun/php-utilities
```

## Usage

``` php
use Neontsun\Utilities\Arr;

$resolved = Arr::spread([1 => 2, 3 => [2, 3]], true);
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.