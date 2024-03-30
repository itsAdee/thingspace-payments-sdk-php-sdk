<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\Fields2;

/**
 * Builder for model Fields2
 *
 * @see Fields2
 */
class Fields2Builder
{
    /**
     * @var Fields2
     */
    private $instance;

    private function __construct(Fields2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new fields 2 Builder object.
     */
    public static function init(): self
    {
        return new self(new Fields2());
    }

    /**
     * Sets temperature field.
     */
    public function temperature(?string $value): self
    {
        $this->instance->setTemperature($value);
        return $this;
    }

    /**
     * Initializes a new fields 2 object.
     */
    public function build(): Fields2
    {
        return CoreHelper::clone($this->instance);
    }
}
