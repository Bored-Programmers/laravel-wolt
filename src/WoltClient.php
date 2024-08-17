<?php

namespace BoredProgrammers\Wolt;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class WoltClient
{

    private PendingRequest $request;

    private string $baseUrl;

    private string $endpoint;

    private array $queryParameters = [];

    private array $routeParameters = [];

    private array $headers = [];

    public static function create(): static
    {
        $client = new static();
        $client->createPendingRequest();

        $client->setBaseUrl(
            config('wolt.is_sandbox')
                ? config('wolt.sandbox_url')
                : config('wolt.production_url')
        );

        return $client;
    }

    public function createPendingRequest(): void
    {
        $request = Http::withBasicAuth(
            config('wolt.menu_username'),
            config('wolt.menu_password')
        );

        $this->setRequest($request);
    }

    public function prepareRequest(): PendingRequest
    {
        $this->addRouteParameter('baseUrl', $this->baseUrl);
        $this->addHeader('WOLT-API-KEY', config('wolt.order_api_key'));

        return $this->request
            ->withUrlParameters($this->routeParameters)
            ->withHeaders($this->headers)
            ->withQueryParameters($this->queryParameters);
    }

    /******************** Request Methods ********************/

    public function get($query = null): Response
    {
        return $this->prepareRequest()
            ->get($this->getFullUrl(), $query);
    }

    public function post(array $data = []): Response
    {
        return $this->prepareRequest()
            ->post($this->getFullUrl(), $data);
    }

    public function put(null|array $data = null): Response
    {
        return $this->prepareRequest()
            ->send('PUT', $this->getFullUrl(), [
                'json' => $data,
            ]);

    }

    /******************** SETTERS && GETTERS ********************/

    public function setRequest(PendingRequest $request): static
    {
        $this->request = $request;

        return $this;
    }

    public function setBaseUrl(string $baseUrl): static
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    public function setEndpoint(string $endpoint): static
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    public function setQueryParameters(array $queryParameters): static
    {
        $this->queryParameters = $queryParameters;

        return $this;
    }

    public function addQueryParameter(string $queryParameter, mixed $value)
    {
        $this->queryParameters[$queryParameter] = $value;

        return $this;
    }

    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;

        return $this;
    }

    public function addHeader(string $header, string $value): static
    {
        $this->headers[$header] = $value;

        return $this;
    }

    public function setRouteParameters(array $routeParameters): static
    {
        $this->routeParameters = $routeParameters;

        return $this;
    }

    public function addRouteParameter(string $routeParameter, string $value): static
    {
        $this->routeParameters[$routeParameter] = $value;

        return $this;
    }

    public function getFullUrl(): string
    {
        return '{+baseUrl}' . $this->endpoint;
    }

}