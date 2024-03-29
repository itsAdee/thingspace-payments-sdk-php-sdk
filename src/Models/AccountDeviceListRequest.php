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
 * Request for listing account devices.
 */
class AccountDeviceListRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var DeviceId|null
     */
    private $deviceId;

    /**
     * @var AccountDeviceListFilter|null
     */
    private $filter;

    /**
     * @var string|null
     */
    private $currentState;

    /**
     * @var CustomFields[]|null
     */
    private $customFields;

    /**
     * @var string|null
     */
    private $earliest;

    /**
     * @var string|null
     */
    private $groupName;

    /**
     * @var string|null
     */
    private $latest;

    /**
     * @var string|null
     */
    private $servicePlan;

    /**
     * @var int|null
     */
    private $maxNumberOfDevices;

    /**
     * @var int|null
     */
    private $largestDeviceIdSeen;

    /**
     * Returns Account Name.
     * The billing account for which a list of devices is returned. If you don't specify an accountName,
     * the list includes all devices to which you have access.
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * The billing account for which a list of devices is returned. If you don't specify an accountName,
     * the list includes all devices to which you have access.
     *
     * @maps accountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns Device Id.
     * An identifier for a single device.
     */
    public function getDeviceId(): ?DeviceId
    {
        return $this->deviceId;
    }

    /**
     * Sets Device Id.
     * An identifier for a single device.
     *
     * @maps deviceId
     */
    public function setDeviceId(?DeviceId $deviceId): void
    {
        $this->deviceId = $deviceId;
    }

    /**
     * Returns Filter.
     * Filter for a list of devices.
     */
    public function getFilter(): ?AccountDeviceListFilter
    {
        return $this->filter;
    }

    /**
     * Sets Filter.
     * Filter for a list of devices.
     *
     * @maps filter
     */
    public function setFilter(?AccountDeviceListFilter $filter): void
    {
        $this->filter = $filter;
    }

    /**
     * Returns Current State.
     * The name of a device state, to only include devices in that state.
     */
    public function getCurrentState(): ?string
    {
        return $this->currentState;
    }

    /**
     * Sets Current State.
     * The name of a device state, to only include devices in that state.
     *
     * @maps currentState
     */
    public function setCurrentState(?string $currentState): void
    {
        $this->currentState = $currentState;
    }

    /**
     * Returns Custom Fields.
     * Custom field names and values, if you want to only include devices that have matching values.
     *
     * @return CustomFields[]|null
     */
    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    /**
     * Sets Custom Fields.
     * Custom field names and values, if you want to only include devices that have matching values.
     *
     * @maps customFields
     *
     * @param CustomFields[]|null $customFields
     */
    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * Returns Earliest.
     * Only include devices that were added after this date and time.
     */
    public function getEarliest(): ?string
    {
        return $this->earliest;
    }

    /**
     * Sets Earliest.
     * Only include devices that were added after this date and time.
     *
     * @maps earliest
     */
    public function setEarliest(?string $earliest): void
    {
        $this->earliest = $earliest;
    }

    /**
     * Returns Group Name.
     * Only include devices that are in this device group.
     */
    public function getGroupName(): ?string
    {
        return $this->groupName;
    }

    /**
     * Sets Group Name.
     * Only include devices that are in this device group.
     *
     * @maps groupName
     */
    public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }

    /**
     * Returns Latest.
     * Only include devices that were added before this date and time.
     */
    public function getLatest(): ?string
    {
        return $this->latest;
    }

    /**
     * Sets Latest.
     * Only include devices that were added before this date and time.
     *
     * @maps latest
     */
    public function setLatest(?string $latest): void
    {
        $this->latest = $latest;
    }

    /**
     * Returns Service Plan.
     * Only include devices that have this service plan.
     */
    public function getServicePlan(): ?string
    {
        return $this->servicePlan;
    }

    /**
     * Sets Service Plan.
     * Only include devices that have this service plan.
     *
     * @maps servicePlan
     */
    public function setServicePlan(?string $servicePlan): void
    {
        $this->servicePlan = $servicePlan;
    }

    /**
     * Returns Max Number of Devices.
     */
    public function getMaxNumberOfDevices(): ?int
    {
        return $this->maxNumberOfDevices;
    }

    /**
     * Sets Max Number of Devices.
     *
     * @maps maxNumberOfDevices
     */
    public function setMaxNumberOfDevices(?int $maxNumberOfDevices): void
    {
        $this->maxNumberOfDevices = $maxNumberOfDevices;
    }

    /**
     * Returns Largest Device Id Seen.
     */
    public function getLargestDeviceIdSeen(): ?int
    {
        return $this->largestDeviceIdSeen;
    }

    /**
     * Sets Largest Device Id Seen.
     *
     * @maps largestDeviceIdSeen
     */
    public function setLargestDeviceIdSeen(?int $largestDeviceIdSeen): void
    {
        $this->largestDeviceIdSeen = $largestDeviceIdSeen;
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
        if (isset($this->accountName)) {
            $json['accountName']         = $this->accountName;
        }
        if (isset($this->deviceId)) {
            $json['deviceId']            = $this->deviceId;
        }
        if (isset($this->filter)) {
            $json['filter']              = $this->filter;
        }
        if (isset($this->currentState)) {
            $json['currentState']        = $this->currentState;
        }
        if (isset($this->customFields)) {
            $json['customFields']        = $this->customFields;
        }
        if (isset($this->earliest)) {
            $json['earliest']            = $this->earliest;
        }
        if (isset($this->groupName)) {
            $json['groupName']           = $this->groupName;
        }
        if (isset($this->latest)) {
            $json['latest']              = $this->latest;
        }
        if (isset($this->servicePlan)) {
            $json['servicePlan']         = $this->servicePlan;
        }
        if (isset($this->maxNumberOfDevices)) {
            $json['maxNumberOfDevices']  = $this->maxNumberOfDevices;
        }
        if (isset($this->largestDeviceIdSeen)) {
            $json['largestDeviceIdSeen'] = $this->largestDeviceIdSeen;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
