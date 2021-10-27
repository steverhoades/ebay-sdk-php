# eBay SDK for PHP

This is a fork of the original [dts/ebay-sdk-php](https://github.com/davidtsadler/ebay-sdk-php) by [@davidtsadler](https://github.com/davidtsadler), with support for PHP 7.3, PHP 7.4 and PHP 8, and compatibility with Guzzle 7.

The original project by David T. Sadler was abandoned in February 2020 and was subsequently updated by [Ben Morel](https://github.com/benmorel). After speaking with David I have decided to take over the project until eBay moves to an entirely Restful API.

--

This project enables PHP developers to use the [eBay API](https://go.developer.ebay.com/api-documentation) in their PHP code, and build software using services such as [Finding](http://developer.ebay.com/Devzone/finding/Concepts/FindingAPIGuide.html), [Trading](http://developer.ebay.com/DevZone/guides/ebayfeatures/index.html), [Shopping](http://developer.ebay.com/Devzone/shopping/docs/Concepts/ShoppingAPIGuide.html), etc. You can get started by [installing the SDK via Composer](http://devbay.net/sdk/guides/getting-started/installation.html) and by following the [Basic Usage Guide](http://devbay.net/sdk/guides/getting-started/basic-usage.html).

This was originally developed by David T. Sadler, who decided to create this project to make up for the lack of an official SDK for PHP. It is in no way endorsed, sponsored or maintained by eBay.

## Features
  - Compatible with PHP 7.4 or PHP 8.
  - Easy to install with [Composer](http://getcomposer.org/).
  - Compliant with [PSR-1](http://www.php-fig.org/psr/psr-1/), [PSR-2](http://www.php-fig.org/psr/psr-2/) and [PSR-4](http://www.php-fig.org/psr/psr-4/).

## Resources
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
composer require steverhoades/ebay-sdk-php
```

## Example

### Get the official eBay time

```php
<?php

require 'vendor/autoload.php';

use DTS\eBaySDK\Shopping\Services;
use DTS\eBaySDK\Shopping\Types;

// Create the service object.
$service = new Services\ShoppingService();

// Create the request object.
$request = new Types\GeteBayTimeRequestType();

// Send the request to the service operation.
$response = $service->geteBayTime($request);

// Output the result of calling the service operation.
printf("The official eBay time is: %s\n", $response->Timestamp->format('H:i (\G\M\T) \o\n l jS Y'));
```

## License

Licensed under the [Apache Public License 2.0](http://www.apache.org/licenses/LICENSE-2.0.html).

Copyright 2016 David T. Sadler.
Copyright 2021 Steve Rhoades
