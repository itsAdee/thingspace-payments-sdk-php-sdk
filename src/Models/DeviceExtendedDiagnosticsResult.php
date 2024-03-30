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
 * Result for a request to obtain device extended diagnostics.
 */
class DeviceExtendedDiagnosticsResult implements \JsonSerializable
{
    /**
     * @var DiagnosticsCategory[]|null
     */
    private $categories;

    /**
     * Returns Categories.
     * The response includes various types of information about the device, grouped into categories. Each
     * category object contains the category name and a list of Extended Attribute objects as key-value
     * pairs.
     *
     * @return DiagnosticsCategory[]|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * Sets Categories.
     * The response includes various types of information about the device, grouped into categories. Each
     * category object contains the category name and a list of Extended Attribute objects as key-value
     * pairs.
     *
     * @maps categories
     *
     * @param DiagnosticsCategory[]|null $categories
     */
    public function setCategories(?array $categories): void
    {
        $this->categories = $categories;
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
        if (isset($this->categories)) {
            $json['categories'] = $this->categories;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
