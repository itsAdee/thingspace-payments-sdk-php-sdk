<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class ChangePmecDeviceIPaddressRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $accountName;

    /**
     * @var DeviceList7[]
     */
    private $deviceList;

    /**
     * @param string $accountName
     * @param DeviceList7[] $deviceList
     */
    public function __construct(string $accountName, array $deviceList)
    {
        $this->accountName = $accountName;
        $this->deviceList = $deviceList;
    }

    /**
     * Returns Account Name.
     */
    public function getAccountName(): string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     *
     * @required
     * @maps accountName
     */
    public function setAccountName(string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Device List.
     *
     * @return DeviceList7[]
     */
    public function getDeviceList(): array
    {
        return $this->deviceList;
    }

    /**
     * Sets Device List.
     *
     * @required
     * @maps deviceList
     *
     * @param DeviceList7[] $deviceList
     */
    public function setDeviceList(array $deviceList): void
    {
        $this->deviceList = $deviceList;
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
        $json['accountName'] = $this->accountName;
        $json['deviceList']  = $this->deviceList;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}