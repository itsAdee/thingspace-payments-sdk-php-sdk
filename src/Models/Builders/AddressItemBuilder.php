<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AddressItem;

/**
 * Builder for model AddressItem
 *
 * @see AddressItem
 */
class AddressItemBuilder
{
    /**
     * @var AddressItem
     */
    private $instance;

    private function __construct(AddressItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new address item Builder object.
     */
    public static function init(): self
    {
        return new self(new AddressItem());
    }

    /**
     * Sets address line 1 field.
     */
    public function addressLine1(?string $value): self
    {
        $this->instance->setAddressLine1($value);
        return $this;
    }

    /**
     * Sets address line 2 field.
     */
    public function addressLine2(?string $value): self
    {
        $this->instance->setAddressLine2($value);
        return $this;
    }

    /**
     * Sets city field.
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets country field.
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Sets zip field.
     */
    public function zip(?string $value): self
    {
        $this->instance->setZip($value);
        return $this;
    }

    /**
     * Sets zip 4 field.
     */
    public function zip4(?string $value): self
    {
        $this->instance->setZip4($value);
        return $this;
    }

    /**
     * Initializes a new address item object.
     */
    public function build(): AddressItem
    {
        return CoreHelper::clone($this->instance);
    }
}