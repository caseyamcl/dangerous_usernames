# Dangerous Usernames

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

This is simply a list dangerous usernames that you can include in your project.   It was inspired by [this article](https://www.b-list.org/weblog/2018/feb/11/usernames/).

It comes with a `composer.json` file and `DangerousUsernames` class for easy inclusion in PHP projects. 
But, since it is simply a _txt_ file, you can use it with any platform.

## Install

Via Composer:

``` bash
$ composer require caseyamcl/dangerous_usernames
```

Or, use whatever programming language you want to open the textfile and read the contents into a list/array (one item per line).

## Usage

``` php
use DangerousUsernames;

// string[]
$dangerousNames = DangerousUsernames::list();

```

## Contributing

Pull requests are welcome!  If you have any dangerous usernames to add, please do so in alphabetical order.

## Credits

- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/caseyamcl/dangerous_usernames.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/caseyamcl/dangerous_usernames.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/caseyamcl/dangerous_usernames
[link-downloads]: https://packagist.org/packages/caseyamcl/dangerous_usernames
[link-author]: https://github.com/caseyamcl
[link-contributors]: ../../contributors
