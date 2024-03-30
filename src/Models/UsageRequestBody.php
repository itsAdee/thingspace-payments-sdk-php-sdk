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

class UsageRequestBody implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountId;

    /**
     * @var ReadySimDeviceId[]|null
     */
    private $deviceId;

    /**
     * @var \DateTime|null
     */
    private $startTime;

    /**
     * @var \DateTime|null
     */
    private $endTime;

    /**
     * Returns Account Id.
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * Sets Account Id.
     *
     * @maps accountId
     */
    public function setAccountId(?string $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * Returns Device Id.
     *
     * @return ReadySimDeviceId[]|null
     */
    public function getDeviceId(): ?array
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     *
     * @maps deviceId
     *
     * @param ReadySimDeviceId[]|null $deviceId
     */
    public function setDeviceId(?array $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Start Time.
     */
    public function getStartTime(): ?\DateTime
    {
        return $this->startTime;
    }

    /**
     * Sets Start Time.
     *
     * @maps startTime
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setStartTime(?\DateTime $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * Returns End Time.
     */
    public function getEndTime(): ?\DateTime
    {
        return $this->endTime;
    }

    /**
     * Sets End Time.
     *
     * @maps endTime
     * @factory \VerizonLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEndTime(?\DateTime $endTime): void
    {
        $this->endTime = $endTime;
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
        if (isset($this->accountId)) {
            $json['accountId'] = $this->accountId;
        }
        if (isset($this->deviceId)) {
            $json['deviceId']  = $this->deviceId;
        }
        if (isset($this->startTime)) {
            $json['startTime'] = DateTimeHelper::toRfc3339DateTime($this->startTime);
        }
        if (isset($this->endTime)) {
            $json['endTime']   = DateTimeHelper::toRfc3339DateTime($this->endTime);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
