# Laravel Wolt API Integration

🚧 **This package is in development, and is not ready for use in production yet.** 🚧

<img src="./resources/assets/img/logo.webp" alt="Wolt Logo" height="400" width="400">

[![Latest Stable Version](https://poser.pugx.org/bored-programmers/wolt/v)](//packagist.org/packages/bored-programmers/wolt)
[![Total Downloads](https://poser.pugx.org/bored-programmers/wolt/downloads)](//packagist.org/packages/bored-programmers/wolt)
[![License](https://poser.pugx.org/bored-programmers/wolt/license)](//packagist.org/packages/bored-programmers/wolt)

Wolt is a Laravel package that allows you to integrate your restaurant with the Wolt platform. It provides a simple and easy-to-use API for syncing your menu and managing orders.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
  - [Sync Menu](#sync-menu)
  - [Get Order](#get-order)
  - [Accept Order](#accept-order)
  - [Reject Order](#reject-order)
  - [Mark Order as Ready](#mark-order-as-ready)
  - [Mark Order as Delivered](#mark-order-as-delivered)
  - [Confirm Preorder](#confirm-preorder)
- [Contribution Guidelines](#contribution-guidelines)
- [Changelog](#changelog)
- [License](#license)
- [Contact Information](#contact-information)
- [Acknowledgments](#acknowledgments)

## Requirements

- PHP 8.1 or higher
- Laravel 10.0 or higher

## Installation

To install Wolt, you need to run the following command:

```bash
composer require bored-programmers/wolt
```

Publish the configuration file and set up your environment variables.

```bash
php artisan vendor:publish --tag=wolt-config
```

Update your `.env` file with the following variables:

```env
WOLT_MENU_API_USERNAME=your_menu_api_username
WOLT_MENU_API_PASSWORD=your_menu_api_password
WOLT_ORDER_API_KEY=your_order_api_key
WOLT_VENUE_ID=your_venue_id
WOLT_IS_SANDBOX=true/false
```

## Usage

### Sync Menu

To sync your menu with Wolt, use the `WoltService::syncMenu` method.

```php
use BoredProgrammers\Wolt\DTO\WoltDTO;
use BoredProgrammers\Wolt\WoltService;

$menuData = new WoltDTO(
    currency: 'EUR',
    primary_language: 'en',
    categories: $categories // This should be an array or collection of CategoryData objects
);

$response = WoltService::syncMenu($menuData);
```

### Get Order

To retrieve an order, use the `WoltService::getOrder` method.  
You will get Order ID from your webhook called by Wolt.  
More about it here: [Wolt Webhook Documentation](https://developer.development.dev.woltapi.com/docs/marketplace-integrations/restaurant-ipad-free#webhook-server).  
I recommend using `spatie/laravel-webhook-client` package for handling webhooks.

```php
use BoredProgrammers\Wolt\WoltService;

$orderId = 'your_wolt_order_id';
$response = WoltService::getOrder($orderId);
```

### Accept Order

To accept an order, use the `WoltService::acceptOrder` method.

```php
use BoredProgrammers\Wolt\WoltService;

$orderId = 'your_wolt_order_id';
$response = WoltService::acceptOrder($orderId);
```

### Reject Order

To reject an order, use the `WoltService::rejectOrder` method.

```php
use BoredProgrammers\Wolt\WoltService;

$orderId = 'your_wolt_order_id';
$response = WoltService::rejectOrder($orderId);
```

### Mark Order as Ready

To mark an order as ready, use the `WoltService::markReadyOrder` method.

```php
use BoredProgrammers\Wolt\WoltService;

$orderId = 'your_wolt_order_id';
$response = WoltService::markReadyOrder($orderId);
```

### Mark Order as Delivered

To mark an order as delivered, use the `WoltService::markDeliveredOrder` method.

```php
use BoredProgrammers\Wolt\WoltService;

$orderId = 'your_wolt_order_id';
$response = WoltService::markDeliveredOrder($orderId);
```

### Confirm Preorder

To confirm a preorder, use the `WoltService::confirmPreorder` method.

```php
use BoredProgrammers\Wolt\WoltService;

$orderId = 'your_wolt_order_id';
$response = WoltService::confirmPreorder($orderId);
```

## Contribution Guidelines

We welcome contributions to Wolt. If you'd like to contribute, please fork the repository, make your changes, and submit a pull request. We have a few requirements for contributions:

- Follow the PSR-2 coding standard.
- Write tests for new features and bug fixes.
- Only use pull requests for contributions.

## Changelog

For a detailed history of changes, see [releases](https://github.com/Bored-Programmers/wolt/releases) on GitHub.

## License

This project is licensed under the [MIT license](https://github.com/Bored-Programmers/wolt/blob/main/LICENSE.md).

## Contact Information

For any questions or concerns, please feel free to create a [discussion](https://github.com/Bored-Programmers/wolt/discussions) on GitHub.

## Credits

Created by [Matěj Černý](https://github.com/LeMatosDeFuk) from [Bored Programmers](https://github.com/Bored-Programmers).

## Acknowledgments

We would like to thank all the contributors who have helped to make Wolt a better package.
