# Dribbble PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/Dribbble-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Dribbble-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/dribbble-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Dribbble-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/Dribbble-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Dribbble-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Dribbble-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require faustbrian/dribbble-php-client
```

## Usage

```php
<?php

$client = new BrianFaust\Dribbble\Client([
    'client_id' => 'your_client_id',
    'client_secret' => 'your_client_secret',
    'access_token' => 'your_access_token'
]);

dump($client->api('Users')->authd()->json());
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
