<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class DeviceList1 implements \JsonSerializable
{
    /**
     * @var MECDeviceId[]
     */
    private $deviceIds;

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var string
     */
    private $apn;

    /**
     * @param MECDeviceId[] $deviceIds
     * @param string $ipAddress
     * @param string $apn
     */
    public function __construct(array $deviceIds, string $ipAddress, string $apn)
    {
        $this->deviceIds = $deviceIds;
        $this->ipAddress = $ipAddress;
        $this->apn = $apn;
    }

    /**
     * Returns Device Ids.
     *
     * @return MECDeviceId[]
     */
    public function getDeviceIds(): array
    {
        return $this->deviceIds;
    }

    /**
     * Sets Device Ids.
     *
     * @required
     * @maps deviceIds
     *
     * @param MECDeviceId[] $deviceIds
     */
    public function setDeviceIds(array $deviceIds): void
    {
        $this->deviceIds = $deviceIds;
    }

    /**
     * Returns Ip Address.
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * Sets Ip Address.
     *
     * @required
     * @maps ipAddress
     */
    public function setIpAddress(string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * Returns Apn.
     */
    public function getApn(): string
    {
        return $this->apn;
    }

    /**
     * Sets Apn.
     *
     * @required
     * @maps apn
     */
    public function setApn(string $apn): void
    {
        $this->apn = $apn;
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
        $json['deviceIds'] = $this->deviceIds;
        $json['ipAddress'] = $this->ipAddress;
        $json['apn']       = $this->apn;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
