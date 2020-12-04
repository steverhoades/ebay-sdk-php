# eBay SDK for PHP

This is a fork of the original [dts/ebay-sdk-php](https://github.com/davidtsadler/ebay-sdk-php) by @davidtsadler, with support for PHP 7.4 and PHP 8, Guzzle 7.

The original project has been officially abandoned in February 2020.

I'm planning to maintain this fork in the short term. The aim is not to keep it up to date with the latest eBay API versions,
but to provide a solution for a smooth upgrade of existing apps to PHP 8. New users should seek a better SDK for PHP.

---

This project enables PHP developers to use the [eBay API](https://go.developer.ebay.com/api-documentation) in their PHP code, and build software using services such as [Finding](http://developer.ebay.com/Devzone/finding/Concepts/FindingAPIGuide.html), [Trading](http://developer.ebay.com/DevZone/guides/ebayfeatures/index.html), [Shopping](http://developer.ebay.com/Devzone/shopping/docs/Concepts/ShoppingAPIGuide.html), etc. You can get started by [installing the SDK via Composer](http://devbay.net/sdk/guides/getting-started/installation.html) and by following the [Basic Usage Guide](http://devbay.net/sdk/guides/getting-started/basic-usage.html).

This is a personal project that was originally developed by David T. Sadler, who decided to create this project to make up for the lack of an official SDK for PHP. It is in no way endorsed, sponsored or maintained by eBay.

## Features

  - Compatible with PHP 7.4 or PHP 8.
  - Easy to install with [Composer](http://getcomposer.org/).
  - Compliant with [PSR-1](http://www.php-fig.org/psr/psr-1/), [PSR-2](http://www.php-fig.org/psr/psr-2/) and [PSR-4](http://www.php-fig.org/psr/psr-4/).

## Resources

  - [User Guides](http://devbay.net/sdk/guides/) - Getting started guide and in-depth information.
  - [Examples](https://github.com/davidtsadler/ebay-sdk-examples) - Several examples of using the SDK.

## Requirements

  - PHP 7.4 or PHP 8 with the following extensions:
      - curl
      - libxml
  - 64 bit version as there are some [issues when using the SDK with 32 bit](http://devbay.net/sdk/guides/getting-started/requirements.html#using-the-sdk-with-32-bit-systems).
  - SSL enabled on the cURL extension so that https requests can be made.

## Installation

The SDK can be installed with [Composer](http://getcomposer.org/):

```
php composer.phar require benmorel/ebay-sdk-php
```

## Example

### Get the official eBay time

```php
<?php

require 'vendor/autoload.php';

use \DTS\eBaySDK\Shopping\Services;
use \DTS\eBaySDK\Shopping\Types;

// Create the service object.
$service = new Services\ShoppingService();

// Create the request object.
$request = new Types\GeteBayTimeRequestType();

// Send the request to the service operation.
$response = $service->geteBayTime($request);

// Output the result of calling the service operation.
printf("The official eBay time is: %s\n", $response->Timestamp->format('H:i (\G\M\T) \o\n l jS Y'));
```

## Project Goals

  - Be well maintained.
  - Be [well documented](http://devbay.net/sdk/guides/).
  - Be [well tested](https://github.com/BenMorel/ebay-sdk-php/tree/master/test).
  - Be well supported with [working examples](https://github.com/davidtsadler/ebay-sdk-examples).

## License

Licensed under the [Apache Public License 2.0](http://www.apache.org/licenses/LICENSE-2.0.html).

Copyright 2016 David T. Sadler.
