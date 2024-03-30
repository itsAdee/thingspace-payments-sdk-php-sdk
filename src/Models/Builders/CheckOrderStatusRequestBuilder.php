<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\CheckOrderStatusRequest;

/**
 * Builder for model CheckOrderStatusRequest
 *
 * @see CheckOrderStatusRequest
 */
class CheckOrderStatusRequestBuilder
{
    /**
     * @var CheckOrderStatusRequest
     */
    private $instance;

    private function __construct(CheckOrderStatusRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new check order status request Builder object.
     */
    public static function init(string $accountName, array $devices): self
    {
        return new self(new CheckOrderStatusRequest($accountName, $devices));
    }

    /**
     * Sets order request id field.
     */
    public function orderRequestId(?string $value): self
    {
        $this->instance->setOrderRequestId($value);
        return $this;
    }

    /**
     * Initializes a new check order status request object.
     */
    public function build(): CheckOrderStatusRequest
    {
        return CoreHelper::clone($this->instance);
    }
}