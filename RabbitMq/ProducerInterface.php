<?php

namespace OldSound\RabbitMqBundle\RabbitMq;

interface ProducerInterface
{
    /**
     * Publish a message
     *
     * @param string $msgBody
     * @param string $routingKey
     * @param array $additionalProperties
     * @param array|null $headers
     */
    public function publish(string $msgBody, string $routingKey = '', array $additionalProperties = array(), ?array $headers = null): void;

    /**
     * Add mass message
     *
     * @param string $msgBody
     * @param string $routingKey
     * @param array $additionalProperties
     * @param array|null $headers
     */
    public function publishMessageBatch(string $msgBody, string $routingKey = '', array $additionalProperties = array(), ?array $headers = null): void;

    /**
     * Publish mass message
     */
    public function publishBatch(): void;
}
