<?php

namespace OldSound\RabbitMqBundle\RabbitMq;

class Fallback implements ProducerInterface
{
    public function publish(
        string $msgBody,
        string $routingKey = '',
        array $additionalProperties = array(),
        ?array $headers = null
    ): void {
    }

    public function publishMessageBatch(
        string $msgBody,
        string $routingKey = '',
        array $additionalProperties = array(),
        ?array $headers = null
    ): void {
    }

    public function publishBatch(): void
    {
    }
}
