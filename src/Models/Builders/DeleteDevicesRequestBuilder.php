<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeleteDevicesRequest;

/**
 * Builder for model DeleteDevicesRequest
 *
 * @see DeleteDevicesRequest
 */
class DeleteDevicesRequestBuilder
{
    /**
     * @var DeleteDevicesRequest
     */
    private $instance;

    private function __construct(DeleteDevicesRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new delete devices request Builder object.
     */
    public static function init(array $devicesToDelete): self
    {
        return new self(new DeleteDevicesRequest($devicesToDelete));
    }

    /**
     * Sets account name field.
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Initializes a new delete devices request object.
     */
    public function build(): DeleteDevicesRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
