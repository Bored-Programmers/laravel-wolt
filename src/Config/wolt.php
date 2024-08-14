<?php

declare(strict_types=1);

/**
 * Here you can override default config for Wolt
 */
return [
    'menu_username' => env('WOLT_MENU_API_USERNAME'),
    'menu_password' => env('WOLT_MENU_API_PASSWORD'),
    'order_api_key' => env('WOLT_ORDER_API_KEY'),
    'venue_id' => env('WOLT_VENUE_ID'),
    'sandbox_url' => env('WOLT_SANDBOX_URL', 'https://pos-integration-service.development.dev.woltapi.com'),
    'production_url' => env('WOLT_PRODUCTION_URL', 'https://pos-integration-service.wolt.com'),
    'is_sandbox' => env('WOLT_IS_SANDBOX', true),
];
