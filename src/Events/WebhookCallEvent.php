<?php

namespace Spatie\WebhookServer\Events;

use GuzzleHttp\Psr7\Response;

abstract class WebhookCallEvent
{
    public $httpVerb;

    public $webhookUrl;

    public $payload;

    public $headers;

    public $meta;

    public $tags;

    public $attempt;

    public $response;

    public $errorType;

    public $errorMessage;

    public $uuid;

    public function __construct(
        $httpVerb,
        $webhookUrl,
        $payload,
        $headers,
        $meta,
        $tags,
        $attempt,
        $response,
        $errorType,
        $errorMessage,
        $uuid
    ) {
        $this->httpVerb = $httpVerb;
        $this->webhookUrl = $webhookUrl;
        $this->payload = $payload;
        $this->headers = $headers;
        $this->meta = $meta;
        $this->tags = $tags;
        $this->attempt = $attempt;
        $this->response = $response;
        $this->errorType = $errorType;
        $this->errorMessage = $errorMessage;
        $this->uuid = $uuid;
    }
}
