<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\DeviceGroup;

/**
 * Builder for model DeviceGroup
 *
 * @see DeviceGroup
 */
class DeviceGroupBuilder
{
    /**
     * @var DeviceGroup
     */
    private $instance;

    private function __construct(DeviceGroup $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new device group Builder object.
     */
    public static function init(): self
    {
        return new self(new DeviceGroup());
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets extended attributes field.
     */
    public function extendedAttributes(?array $value): self
    {
        $this->instance->setExtendedAttributes($value);
        return $this;
    }

    /**
     * Sets is default group field.
     */
    public function isDefaultGroup(?bool $value): self
    {
        $this->instance->setIsDefaultGroup($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Initializes a new device group object.
     */
    public function build(): DeviceGroup
    {
        return CoreHelper::clone($this->instance);
    }
}
