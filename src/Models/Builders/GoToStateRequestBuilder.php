<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceFilter;
use VerizonLib\Models\GoToStateRequest;
use VerizonLib\Models\PlaceOfUse;

/**
 * Builder for model GoToStateRequest
 *
 * @see GoToStateRequest
 */
class GoToStateRequestBuilder
{
    /**
     * @var GoToStateRequest
     */
    private $instance;

    private function __construct(GoToStateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new go to state request Builder object.
     */
    public static function init(string $serviceName, string $stateName, string $servicePlan, string $mdnZipCode): self
    {
        return new self(new GoToStateRequest($serviceName, $stateName, $servicePlan, $mdnZipCode));
    }

    /**
     * Sets devices field.
     */
    public function devices(?array $value): self
    {
        $this->instance->setDevices($value);
        return $this;
    }

    /**
     * Sets filter field.
     */
    public function filter(?DeviceFilter $value): self
    {
        $this->instance->setFilter($value);
        return $this;
    }

    /**
     * Sets carrier ip pool name field.
     */
    public function carrierIpPoolName(?string $value): self
    {
        $this->instance->setCarrierIpPoolName($value);
        return $this;
    }

    /**
     * Sets public ip restriction field.
     */
    public function publicIpRestriction(?string $value): self
    {
        $this->instance->setPublicIpRestriction($value);
        return $this;
    }

    /**
     * Sets sku number field.
     */
    public function skuNumber(?string $value): self
    {
        $this->instance->setSkuNumber($value);
        return $this;
    }

    /**
     * Sets custom fields field.
     */
    public function customFields(?array $value): self
    {
        $this->instance->setCustomFields($value);
        return $this;
    }

    /**
     * Sets devices with service address field.
     */
    public function devicesWithServiceAddress(?array $value): self
    {
        $this->instance->setDevicesWithServiceAddress($value);
        return $this;
    }

    /**
     * Sets ip address field.
     */
    public function ipAddress(?string $value): self
    {
        $this->instance->setIpAddress($value);
        return $this;
    }

    /**
     * Sets group name field.
     */
    public function groupName(?string $value): self
    {
        $this->instance->setGroupName($value);
        return $this;
    }

    /**
     * Sets primary place of use field.
     */
    public function primaryPlaceOfUse(?PlaceOfUse $value): self
    {
        $this->instance->setPrimaryPlaceOfUse($value);
        return $this;
    }

    /**
     * Initializes a new go to state request object.
     */
    public function build(): GoToStateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
