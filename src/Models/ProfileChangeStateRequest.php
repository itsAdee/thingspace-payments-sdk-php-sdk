<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class ProfileChangeStateRequest implements \JsonSerializable
{
    /**
     * @var DeviceList[]
     */
    private $devices;

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string
     */
    private $smsrOid;

    /**
     * @param DeviceList[] $devices
     * @param string $accountName
     * @param string $smsrOid
     */
    public function __construct(array $devices, string $accountName, string $smsrOid)
    {
        $this->devices = $devices;
        $this->accountName = $accountName;
        $this->smsrOid = $smsrOid;
    }

    /**
     * Returns Devices.
     *
     * @return DeviceList[]
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * Sets Devices.
     *
     * @required
     * @maps devices
     *
     * @param DeviceList[] $devices
     */
    public function setDevices(array $devices): void
    {
        $this->devices = $devices;
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
     * Returns Smsr Oid.
     */
    public function getSmsrOid(): string
    {
        return $this->smsrOid;
    }

    /**
     * Sets Smsr Oid.
     *
     * @required
     * @maps smsrOid
     */
    public function setSmsrOid(string $smsrOid): void
    {
        $this->smsrOid = $smsrOid;
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
        $json['devices']     = $this->devices;
        $json['accountName'] = $this->accountName;
        $json['smsrOid']     = $this->smsrOid;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}