<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * A label for a single device.
 */
class DeviceLabels implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * @param string $name
     * @param string $value
     */
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Returns Name.
     * The label you want to associate with the device.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The label you want to associate with the device.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Value.
     * The value of label
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * The value of label
     *
     * @required
     * @maps value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['name']  = $this->name;
        $json['value'] = $this->value;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
