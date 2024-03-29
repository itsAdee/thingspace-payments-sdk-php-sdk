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
 * Contains usage information per device.
 */
class AggregateUsageItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $imei;

    /**
     * @var int|null
     */
    private $numberOfSessions;

    /**
     * @var int|null
     */
    private $bytesTransferred;

    /**
     * Returns Imei.
     * International Mobile Equipment Identifier. This is the ID of the device reporting usage.
     */
    public function getImei(): ?string
    {
        return $this->imei;
    }

    /**
     * Sets Imei.
     * International Mobile Equipment Identifier. This is the ID of the device reporting usage.
     *
     * @maps imei
     */
    public function setImei(?string $imei): void
    {
        $this->imei = $imei;
    }

    /**
     * Returns Number of Sessions.
     * Number of sessions established by the device reporting usage.
     */
    public function getNumberOfSessions(): ?int
    {
        return $this->numberOfSessions;
    }

    /**
     * Sets Number of Sessions.
     * Number of sessions established by the device reporting usage.
     *
     * @maps numberOfSessions
     */
    public function setNumberOfSessions(?int $numberOfSessions): void
    {
        $this->numberOfSessions = $numberOfSessions;
    }

    /**
     * Returns Bytes Transferred.
     * The amount of data transferred by the device reporting usage, measured in Bytes.
     */
    public function getBytesTransferred(): ?int
    {
        return $this->bytesTransferred;
    }

    /**
     * Sets Bytes Transferred.
     * The amount of data transferred by the device reporting usage, measured in Bytes.
     *
     * @maps bytesTransferred
     */
    public function setBytesTransferred(?int $bytesTransferred): void
    {
        $this->bytesTransferred = $bytesTransferred;
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
        if (isset($this->imei)) {
            $json['imei']             = $this->imei;
        }
        if (isset($this->numberOfSessions)) {
            $json['numberOfSessions'] = $this->numberOfSessions;
        }
        if (isset($this->bytesTransferred)) {
            $json['bytesTransferred'] = $this->bytesTransferred;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
