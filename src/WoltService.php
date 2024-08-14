<?php

use BoredProgrammers\Wolt\DTO\WoltDTO;
use Illuminate\Http\Client\Response;

class WoltService
{

    public static function syncMenu(WoltDTO $data): Response
    {
        return WoltClient::create()
            ->setEndpoint('/v1/restaurants/{venueId}/menu')
            ->setRouteParameters(['venueId' => config('wolt.venue_id')])
            ->post((array)$data);
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

    public static function rejectOrder($orderId): Response
    {
        return WoltClient::create()
            ->setEndpoint('/orders/{orderId}/reject')
            ->setRouteParameters(['orderId' => $orderId])
            ->put();
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