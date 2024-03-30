<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\WNPRequestResponse;

/**
 * Builder for model WNPRequestResponse
 *
 * @see WNPRequestResponse
 */
class WNPRequestResponseBuilder
{
    /**
     * @var WNPRequestResponse
     */
    private $instance;

    private function __construct(WNPRequestResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new wnprequest response Builder object.
     */
    public static function init(): self
    {
        return new self(new WNPRequestResponse());
    }

    /**
     * Sets request id field.
     */
    public function requestId(?string $value): self
    {
        $this->instance->setRequestId($value);
        return $this;
    }

    /**
     * Initializes a new wnprequest response object.
     */
    public function build(): WNPRequestResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
