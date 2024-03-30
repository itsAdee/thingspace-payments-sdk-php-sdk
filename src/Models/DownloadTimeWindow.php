<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class DownloadTimeWindow implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $startTime;

    /**
     * @var string|null
     */
    private $endTime;

    /**
     * Returns Start Time.
     * Device IMEI list.
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * Sets Start Time.
     * Device IMEI list.
     *
     * @maps startTime
     */
    public function setStartTime(?string $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * Returns End Time.
     * Device IMEI list.
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * Sets End Time.
     * Device IMEI list.
     *
     * @maps endTime
     */
    public function setEndTime(?string $endTime): void
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
        if (isset($this->startTime)) {
            $json['startTime'] = $this->startTime;
        }
        if (isset($this->endTime)) {
            $json['endTime']   = $this->endTime;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
