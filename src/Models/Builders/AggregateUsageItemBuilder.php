<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AggregateUsageItem;

/**
 * Builder for model AggregateUsageItem
 *
 * @see AggregateUsageItem
 */
class AggregateUsageItemBuilder
{
    /**
     * @var AggregateUsageItem
     */
    private $instance;

    private function __construct(AggregateUsageItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new aggregate usage item Builder object.
     */
    public static function init(): self
    {
        return new self(new AggregateUsageItem());
    }

    /**
     * Sets imei field.
     */
    public function imei(?string $value): self
    {
        $this->instance->setImei($value);
        return $this;
    }

    /**
     * Sets number of sessions field.
     */
    public function numberOfSessions(?int $value): self
    {
        $this->instance->setNumberOfSessions($value);
        return $this;
    }

    /**
     * Sets bytes transferred field.
     */
    public function bytesTransferred(?int $value): self
    {
        $this->instance->setBytesTransferred($value);
        return $this;
    }

    /**
     * Initializes a new aggregate usage item object.
     */
    public function build(): AggregateUsageItem
    {
        return CoreHelper::clone($this->instance);
    }
}
