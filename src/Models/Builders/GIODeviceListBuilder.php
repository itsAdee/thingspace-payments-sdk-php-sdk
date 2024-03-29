<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\GIODeviceList;

/**
 * Builder for model GIODeviceList
 *
 * @see GIODeviceList
 */
class GIODeviceListBuilder
{
    /**
     * @var GIODeviceList
     */
    private $instance;

    private function __construct(GIODeviceList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new giodevice list Builder object.
     */
    public static function init(): self
    {
        return new self(new GIODeviceList());
    }

    /**
     * Sets device ids field.
     */
    public function deviceIds(?array $value): self
    {
        $this->instance->setDeviceIds($value);
        return $this;
    }

    /**
     * Initializes a new giodevice list object.
     */
    public function build(): GIODeviceList
    {
        return CoreHelper::clone($this->instance);
    }
}
