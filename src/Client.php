<?php

declare(strict_types=1);

namespace AirLST\SdkPhp;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\HandlerStack;

class Client
{
    protected ?HandlerStack $handler = null;

    public function __construct(
        protected string $baseURL,
        protected string $apiKey
    ) {
    }

    public function setHandler(HandlerStack $handler): void
    {
        $this->handler = $handler;
    }

    public function getRequestHeaders(): array
    {
        return [
            'content-type' => 'application/json',
            'accept' => 'application/json',
            'x-api-key' => $this->apiKey,
        ];
    }

    public function send(string $uri, RequestMethod $method = RequestMethod::GET, array $options = []): array
    {
        try {
            $client = new GuzzleClient([
                'base_uri' => $this->baseURL,
                'headers' => $this->getRequestHeaders(),
                'handler' => $this->handler,
            ]);

            $response = $client->request($method->value, $uri, $options);

            $body = (string) $response->getBody();

            return json_decode($body, true);
        } catch (ClientException $exception) {
            throw new \RuntimeException(
                $exception->getResponse()->getBody()->getContents(),
                $exception->getCode(),
                $exception
            );
        }
    }
}
