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
 * List of created license cancellation devices.
 */
class V2ListOfLicensesToRemoveResult implements \JsonSerializable
{
    /**
     * @var int
     */
    private $count;

    /**
     * @var string[]
     */
    private $deviceList;

    /**
     * @param int $count
     * @param string[] $deviceList
     */
    public function __construct(int $count, array $deviceList)
    {
        $this->count = $count;
        $this->deviceList = $deviceList;
    }

    /**
     * Returns Count.
     * The number of devices.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Sets Count.
     * The number of devices.
     *
     * @required
     * @maps count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * Returns Device List.
     * Device IMEI list.
     *
     * @return string[]
     */
    public function getDeviceList(): array
    {
        return $this->deviceList;
    }

    /**
     * Sets Device List.
     * Device IMEI list.
     *
     * @required
     * @maps deviceList
     *
     * @param string[] $deviceList
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
        $json['count']      = $this->count;
        $json['deviceList'] = $this->deviceList;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}