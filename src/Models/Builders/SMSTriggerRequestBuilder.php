<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SMSTriggerRequest;

/**
 * Builder for model SMSTriggerRequest
 *
 * @see SMSTriggerRequest
 */
class SMSTriggerRequestBuilder
{
    /**
     * @var SMSTriggerRequest
     */
    private $instance;

    private function __construct(SMSTriggerRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new smstrigger request Builder object.
     */
    public static function init(): self
    {
        return new self(new SMSTriggerRequest());
    }

    /**
     * Sets comparator field.
     */
    public function comparator(?string $value): self
    {
        $this->instance->setComparator($value);
        return $this;
    }

    /**
     * Sets sms type field.
     */
    public function smsType(?string $value): self
    {
        $this->instance->setSmsType($value);
        return $this;
    }

    /**
     * Sets threshold field.
     */
    public function threshold(?int $value): self
    {
        $this->instance->setThreshold($value);
        return $this;
    }

    /**
     * Initializes a new smstrigger request object.
     */
    public function build(): SMSTriggerRequest
    {
        return CoreHelper::clone($this->instance);
    }
}