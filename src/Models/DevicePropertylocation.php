<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class DevicePropertylocation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $latitude;

    /**
     * @var string|null
     */
    private $longitude;

    /**
     * Returns Latitude.
     */
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * Sets Latitude.
     *
     * @maps latitude
     */
    public function setLatitude(?string $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns Longitude.
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * Sets Longitude.
     *
     * @maps longitude
     */
    public function setLongitude(?string $longitude): void
    {
        $this->longitude = $longitude;
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
        if (isset($this->latitude)) {
            $json['latitude']  = $this->latitude;
        }
        if (isset($this->longitude)) {
            $json['longitude'] = $this->longitude;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}