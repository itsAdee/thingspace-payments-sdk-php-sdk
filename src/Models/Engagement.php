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
 * The engagements associated with the account.
 */
class Engagement implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $engagementId;

    /**
     * @var string|null
     */
    private $chargingGroup;

    /**
     * @var AccountService[]|null
     */
    private $services;

    /**
     * Returns Engagement Id.
     * The engagement ID.
     */
    public function getEngagementId(): ?string
    {
        return $this->engagementId;
    }

    /**
     * Sets Engagement Id.
     * The engagement ID.
     *
     * @maps engagementId
     */
    public function setEngagementId(?string $engagementId): void
    {
        $this->engagementId = $engagementId;
    }

    /**
     * Returns Charging Group.
     * The charging group name.
     */
    public function getChargingGroup(): ?string
    {
        return $this->chargingGroup;
    }

    /**
     * Sets Charging Group.
     * The charging group name.
     *
     * @maps chargingGroup
     */
    public function setChargingGroup(?string $chargingGroup): void
    {
        $this->chargingGroup = $chargingGroup;
    }

    /**
     * Returns Services.
     * The services associated with the account.
     *
     * @return AccountService[]|null
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    /**
     * Sets Services.
     * The services associated with the account.
     *
     * @maps services
     *
     * @param AccountService[]|null $services
     */
    public function setServices(?array $services): void
    {
        $this->services = $services;
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
        if (isset($this->engagementId)) {
            $json['engagementId']  = $this->engagementId;
        }
        if (isset($this->chargingGroup)) {
            $json['chargingGroup'] = $this->chargingGroup;
        }
        if (isset($this->services)) {
            $json['services']      = $this->services;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}