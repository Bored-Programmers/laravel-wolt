# Laravel Wolt API Integration

<img src="./resources/assets/img/logo.webp" alt="Wolt Logo" height="400" width="400">

[![Latest Stable Version](https://poser.pugx.org/bored-programmers/wolt/v)](//packagist.org/packages/bored-programmers/wolt)
[![Total Downloads](https://poser.pugx.org/bored-programmers/wolt/downloads)](//packagist.org/packages/bored-programmers/wolt)
[![License](https://poser.pugx.org/bored-programmers/wolt/license)](//packagist.org/packages/bored-programmers/wolt)

Wolt is a Laravel package that allows you to integrate your restaurant with the Wolt platform. It provides a simple and
easy-to-use API for syncing your menu and managing orders.

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
composer require bored-programmers/laravel-wolt
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

To sync your menu with Wolt, use the `WoltService::syncMenu` method. <br>
Here is an example of how you can use the DTOs to create a menu and sync it with Wolt.

```php
use BoredProgrammers\Wolt\DTO\MenuData;
use BoredProgrammers\Wolt\DTO\CategoryData;
use BoredProgrammers\Wolt\DTO\SubcategoryData;
use BoredProgrammers\Wolt\DTO\ItemData;
use BoredProgrammers\Wolt\DTO\TranslationData;
use BoredProgrammers\Wolt\DTO\CaffeineContentData;
use BoredProgrammers\Wolt\DTO\WeeklyAvailabilityData;
use BoredProgrammers\Wolt\DTO\WeeklyVisibilityData;
use BoredProgrammers\Wolt\DTO\OptionData;
use BoredProgrammers\Wolt\DTO\SelectionRangeData;
use BoredProgrammers\Wolt\DTO\OptionValueData;
use BoredProgrammers\Wolt\DTO\SubOptionValueData;
use BoredProgrammers\Wolt\DTO\ProductInformationData;
use BoredProgrammers\Wolt\DTO\NutritionInformationData;
use BoredProgrammers\Wolt\DTO\NutritionValuesData;
use BoredProgrammers\Wolt\DTO\NutrientData;
use Spatie\LaravelData\DataCollection;

// Example Translations for Category
$categoryNameTranslation = new DataCollection([
    TranslationData::from(['lang' => 'en', 'value' => 'Beverages']),
    TranslationData::from(['lang' => 'fr', 'value' => 'Boissons'])
]);

// Example Translations for Subcategory
$subCategoryNameTranslation = new DataCollection([
    TranslationData::from(['lang' => 'en', 'value' => 'Hot Drinks']),
    TranslationData::from(['lang' => 'fr', 'value' => 'Boissons Chaudes'])
]);

// Example Translations for Item
$itemNameTranslation = new DataCollection([
    TranslationData::from(['lang' => 'en', 'value' => 'Espresso']),
    TranslationData::from(['lang' => 'fr', 'value' => 'Espresso'])
]);

$itemDescriptionTranslation = new DataCollection([
    TranslationData::from(['lang' => 'en', 'value' => 'Rich and bold espresso coffee']),
    TranslationData::from(['lang' => 'fr', 'value' => 'Café espresso riche et audacieux'])
]);

// Example Translations for Options
$optionNameTranslation = new DataCollection([
    TranslationData::from(['lang' => 'en', 'value' => 'Milk Type']),
    TranslationData::from(['lang' => 'fr', 'value' => 'Type de Lait'])
]);

$optionValueNameTranslation1 = new DataCollection([
    TranslationData::from(['lang' => 'en', 'value' => 'Whole Milk']),
    TranslationData::from(['lang' => 'fr', 'value' => 'Lait entier'])
]);

$optionValueNameTranslation2 = new DataCollection([
    TranslationData::from(['lang' => 'en', 'value' => 'Soy Milk']),
    TranslationData::from(['lang' => 'fr', 'value' => 'Lait de soja'])
]);

// Example Sub-option Value
$subOptionValueNameTranslation = new DataCollection([
    TranslationData::from(['lang' => 'en', 'value' => 'Vanilla Syrup']),
    TranslationData::from(['lang' => 'fr', 'value' => 'Sirop de vanille'])
]);

// Example Nutrition Information
$nutritionInformation = NutritionInformationData::from([
    'serving_size' => 'per_100_ml',
    'nutrition_values' => NutritionValuesData::from([
        'energy_kcal' => NutrientData::from(['unit' => 'kcal', 'value' => 5]),
        'energy_kj' => NutrientData::from(['unit' => 'kj', 'value' => 20]),
        'fats' => NutrientData::from(['unit' => 'g', 'value' => 0.1]),
        'saturated_fats' => NutrientData::from(['unit' => 'g', 'value' => 0.05]),
        'mono_unsaturated_fats' => NutrientData::from(['unit' => 'g', 'value' => 0.01]),
        'poly_unsaturated_fats' => NutrientData::from(['unit' => 'g', 'value' => 0.01]),
        'carbohydrate' => NutrientData::from(['unit' => 'g', 'value' => 0.5]),
        'sugar' => NutrientData::from(['unit' => 'g', 'value' => 0.1]),
        'starch' => NutrientData::from(['unit' => 'g', 'value' => 0.2]),
        'polyols' => NutrientData::from(['unit' => 'g', 'value' => 0.0]),
        'protein' => NutrientData::from(['unit' => 'g', 'value' => 0.2]),
        'salt' => NutrientData::from(['unit' => 'g', 'value' => 0.01]),
        'sodium' => NutrientData::from(['unit' => 'mg', 'value' => 5]),
        'fibres' => NutrientData::from(['unit' => 'g', 'value' => 0.1]),
        'vitamin_c' => NutrientData::from(['unit' => 'mg', 'value' => 0.0]),
        'potassium' => NutrientData::from(['unit' => 'mg', 'value' => 80]),
        'calcium' => NutrientData::from(['unit' => 'mg', 'value' => 10]),
        'magnesium' => NutrientData::from(['unit' => 'mg', 'value' => 2]),
        'chloride' => NutrientData::from(['unit' => 'mg', 'value' => 5]),
        'fluoride' => NutrientData::from(['unit' => 'mg', 'value' => 0.0])
    ])
]);

// Example Product Information
$productInformation = ProductInformationData::from([
    'ingredients' => new DataCollection([
        TranslationData::from(['lang' => 'en', 'value' => 'Water, Coffee Beans']),
        TranslationData::from(['lang' => 'fr', 'value' => 'Eau, Grains de café'])
    ]),
    'additives' => new DataCollection([
        TranslationData::from(['lang' => 'en', 'value' => 'None']),
        TranslationData::from(['lang' => 'fr', 'value' => 'Aucun'])
    ]),
    'nutrition_facts' => new DataCollection([
        TranslationData::from(['lang' => 'en', 'value' => 'Low calories']),
        TranslationData::from(['lang' => 'fr', 'value' => 'Faible en calories'])
    ]),
    'nutrition_information' => $

nutritionInformation,
    'allergens' => new DataCollection([
        TranslationData::from(['lang' => 'en', 'value' => 'None']),
        TranslationData::from(['lang' => 'fr', 'value' => 'Aucun'])
    ]),
    'producer_information' => new DataCollection([
        TranslationData::from(['lang' => 'en', 'value' => 'Local Roastery']),
        TranslationData::from(['lang' => 'fr', 'value' => 'Torréfacteur local'])
    ])
]);

// Example Option with Sub-option Values
$optionValue1 = OptionValueData::from([
    'name' => $optionValueNameTranslation1,
    'selection_range' => SelectionRangeData::from(['min' => 0, 'max' => 1]),
    'price' => 0.50,
    'enabled' => true,
    'default' => true,
    'external_data' => 'option-value-1',
    'sub_option_values' => new DataCollection([
        SubOptionValueData::from([
            'name' => $subOptionValueNameTranslation,
            'selection_range' => SelectionRangeData::from(['min' => 0, 'max' => 1]),
            'price' => 0.20,
            'enabled' => true,
            'default' => false,
            'external_data' => 'sub-option-value-1'
        ])
    ])
]);

$optionValue2 = OptionValueData::from([
    'name' => $optionValueNameTranslation2,
    'selection_range' => SelectionRangeData::from(['min' => 0, 'max' => 1]),
    'price' => 0.60,
    'enabled' => true,
    'default' => false,
    'external_data' => 'option-value-2',
    'sub_option_values' => null
]);

$option = OptionData::from([
    'name' => $optionNameTranslation,
    'type' => 'SingleChoice',
    'selection_range' => SelectionRangeData::from(['min' => 1, 'max' => 1]),
    'external_data' => 'option-1',
    'values' => new DataCollection([$optionValue1, $optionValue2])
]);

// Example Item
$item = ItemData::from([
    'name' => $itemNameTranslation,
    'description' => $itemDescriptionTranslation,
    'image_url' => 'https://example.com/espresso.jpg',
    'price' => 2.99,
    'sales_tax_percentage' => 0.07,
    'alcohol_percentage' => null,
    'caffeine_content' => CaffeineContentData::from(['serving_size' => 'per_100_ml', 'value' => 212.0]),
    'weekly_availability' => new DataCollection([
        WeeklyAvailabilityData::from([
            'opening_day' => 'MONDAY',
            'opening_time' => '08:00',
            'closing_day' => 'MONDAY',
            'closing_time' => '20:00'
        ])
    ]),
    'weekly_visibility' => new DataCollection([
        WeeklyVisibilityData::from([
            'opening_day' => 'MONDAY',
            'opening_time' => '08:00',
            'closing_day' => 'MONDAY',
            'closing_time' => '20:00'
        ])
    ]),
    'enabled' => true,
    'delivery_methods' => ['takeaway', 'homedelivery'],
    'options' => new DataCollection([$option]),
    'external_data' => 'item-espresso-001',
    'product_information' => $productInformation
]);

// Example Subcategory
$subcategory = SubcategoryData::from([
    'name' => $subCategoryNameTranslation,
    'description' => null,
    'items' => new DataCollection([$item])
]);

// Example Category
$category = CategoryData::from([
    'name' => $categoryNameTranslation,
    'description' => null,
    'subcategories' => new DataCollection([$subcategory])
]);

// Example Menu
$menu = MenuData::from([
    'currency' => 'USD',
    'primary_language' => 'en',
    'categories' => new DataCollection([$category])
]);

$response = WoltService::syncMenu($menuData);
```

### Get Order

To retrieve an order, use the `WoltService::getOrder` method.

> You will get Order ID from your webhook called by Wolt.  
> More about it > here: [Wolt Webhook Documentation](https://developer.development.dev.woltapi.com/docs/marketplace-integrations/restaurant-ipad-free#webhook-server).

> I recommend using `spatie/laravel-webhook-client` package for handling webhooks.

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

We welcome contributions to Wolt. If you'd like to contribute, please fork the repository, make your changes, and submit
a pull request. We have a few requirements for contributions:

- Follow the PSR-2 coding standard.
- Only use pull requests for contributions.

## Changelog

For a detailed history of changes, see [releases](https://github.com/Bored-Programmers/wolt/releases) on GitHub.

## License

This project is licensed under the [MIT license](/LICENSE.md).

## Contact Information

For any questions or concerns, please feel free to create
a [discussion](https://github.com/Bored-Programmers/wolt/discussions) on GitHub.

## Credits

Created by [Matěj Černý](https://github.com/LeMatosDeFuk)
from [Bored Programmers](https://github.com/Bored-Programmers).

## Acknowledgments

We would like to thank all the contributors who have helped to make Wolt a better package.
