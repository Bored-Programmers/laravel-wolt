<?php

namespace BoredProgrammers\Wolt;

use BoredProgrammers\Wolt\DTO\MenuData;
use Illuminate\Http\Client\Response;

class WoltService
{

    public static function syncMenu(MenuData $data): Response
    {
        return WoltClient::create()
            ->setEndpoint('/v1/restaurants/{venueId}/menu')
            ->setRouteParameters(['venueId' => config('wolt.venue_id')])
            ->post($data->toArray());
    }

    public static function getOrder($orderId): Response
    {
        return WoltClient::create()
            ->setEndpoint('/orders/{orderId}')
            ->setRouteParameters(['orderId' => $orderId])
            ->get();
    }

    public static function acceptOrder($orderId): Response
    {
        return WoltClient::create()
            ->setEndpoint('/orders/{orderId}/accept')
            ->setRouteParameters(['orderId' => $orderId])
            ->put();
    }

    public static function rejectOrder($orderId, string $reason): Response
    {
        return WoltClient::create()
            ->setEndpoint('/orders/{orderId}/reject')
            ->setRouteParameters(['orderId' => $orderId])
            ->put(['reason' => $reason]);
    }

    public static function markReadyOrder($orderId): Response
    {
        return WoltClient::create()
            ->setEndpoint('/orders/{orderId}/ready')
            ->setRouteParameters(['orderId' => $orderId])
            ->put();
    }

    public static function markDeliveredOrder($orderId): Response
    {
        return WoltClient::create()
            ->setEndpoint('/orders/{orderId}/delivered')
            ->setRouteParameters(['orderId' => $orderId])
            ->put();
    }

    public static function confirmPreorder($orderId): Response
    {
        return WoltClient::create()
            ->setEndpoint('/orders/{orderId}/confirm-preorder')
            ->setRouteParameters(['orderId' => $orderId])
            ->put();
    }

}