<?php

declare(strict_types=1);

namespace AirLST\SdkPhp;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\HandlerStack;

class CoreApi
{
    public string $baseURL = 'https://airlst.app';
    public string $apiKey;
    public string $locale = 'de-DE';
    public string $eventId;
    protected ?HandlerStack $handler = null;

    public function setBaseURL(string $baseURL): self
    {
        $this->baseURL = $baseURL;

        return $this;
    }

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function setEventId(string $eventId): self
    {
        $this->eventId = $eventId;

        return $this;
    }

    /** 
     * @return array<string, string>
     */
    public function getRequestHeaders(): array
    {
        return [
            'content-type' => 'application/json',
            'accept' => 'application/json',
            'x-api-key' => $this->apiKey,
            'accept-language' => $this->locale,
        ];
    }

    public function setHandler(HandlerStack $handler): void
    {
        $this->handler = $handler;
    }

    /**
     * @param string $uri
     * @param RequestMethod $method
     * @param array<mixed> $options
     * @return array<mixed>
     */
    public function send(
        string $uri, 
        RequestMethod $method = RequestMethod::GET, 
        array $options = []
    ): array
    {        
        try {
            $client = new Client([
                'base_uri' => $this->baseURL,
                'headers' => $this->getRequestHeaders(),
                'handler' => $this->handler
            ]);

            $response = $client->request($method->value, "/api$uri", $options);

            return json_decode((string) $response->getBody(), true);
        } catch (ClientException $exception) {
            throw new \RuntimeException(
                $exception->getResponse()->getBody()->getContents(),
                $exception->getCode(),
                $exception
            );
        }
    }
}