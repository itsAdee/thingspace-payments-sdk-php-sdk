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
 * The customer name and the address of the device's primary place of use. Leave these fields empty to
 * use the account profile address as the primary place of use. These values will be applied to all
 * devices in the request.If the account is enabled for non-geographic MDNs and the device supports it,
 * the primaryPlaceOfUse address will also be used to derive the MDN for the device.
 */
class PlaceOfUse implements \JsonSerializable
{
    /**
     * @var Address
     */
    private $address;

    /**
     * @var CustomerName
     */
    private $customerName;

    /**
     * @param Address $address
     * @param CustomerName $customerName
     */
    public function __construct(Address $address, CustomerName $customerName)
    {
        $this->address = $address;
        $this->customerName = $customerName;
    }

    /**
     * Returns Address.
     * The customer address for the line's primary place of use, for line usage taxation.
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * The customer address for the line's primary place of use, for line usage taxation.
     *
     * @required
     * @maps address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Customer Name.
     * The customer name to be used for line usage taxation.
     */
    public function getCustomerName(): CustomerName
    {
        return $this->customerName;
    }

    /**
     * Sets Customer Name.
     * The customer name to be used for line usage taxation.
     *
     * @required
     * @maps customerName
     */
    public function setCustomerName(CustomerName $customerName): void
    {
        $this->customerName = $customerName;
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
        $json['address']      = $this->address;
        $json['customerName'] = $this->customerName;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
