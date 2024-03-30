<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;
use VerizonLib\Utils\DateTimeHelper;

class SMSEventHistoryRequest implements \JsonSerializable
{
    /**
     * @var GIODeviceId
     */
    private $deviceId;

    /**
     * @var \DateTime|null
     */
    private $earliest;

    /**
     * @var \DateTime|null
     */
    private $latest;

    /**
     * @param GIODeviceId $deviceId
     */
    public function __construct(GIODeviceId $deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Device Id.
     */
    public function getDeviceId(): GIODeviceId
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     *
     * @required
     * @maps deviceId
     */
    public function setDeviceId(GIODeviceId $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Earliest.
     */
    public function getEarliest(): ?\DateTime
    {
        return $this->earliest;
    }

    /**
     * Sets Earliest.
     *
     * @maps earliest
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEarliest(?\DateTime $earliest): void
    {
        $this->earliest = $earliest;
    }

    /**
     * Returns Latest.
     */
    public function getLatest(): ?\DateTime
    {
        return $this->latest;
    }

    /**
     * Sets Latest.
     *
     * @maps latest
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLatest(?\DateTime $latest): void
    {
        $this->latest = $latest;
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
        $json['deviceId']     = $this->deviceId;
        if (isset($this->earliest)) {
            $json['earliest'] = DateTimeHelper::toRfc3339DateTime($this->earliest);
        }
        if (isset($this->latest)) {
            $json['latest']   = DateTimeHelper::toRfc3339DateTime($this->latest);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
