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

/**
 * Firmware upgrade for devices.
 */
class CampaignFirmwareUpgrade implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $campaignName;

    /**
     * @var string
     */
    private $firmwareName;

    /**
     * @var string
     */
    private $firmwareFrom;

    /**
     * @var string
     */
    private $firmwareTo;

    /**
     * @var string
     */
    private $protocol;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var V3TimeWindow[]|null
     */
    private $campaignTimeWindowList;

    /**
     * @var string[]
     */
    private $deviceList;

    /**
     * @param string $firmwareName
     * @param string $firmwareFrom
     * @param string $firmwareTo
     * @param string $protocol
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param string[] $deviceList
     */
    public function __construct(
        string $firmwareName,
        string $firmwareFrom,
        string $firmwareTo,
        string $protocol,
        \DateTime $startDate,
        \DateTime $endDate,
        array $deviceList
    ) {
        $this->firmwareName = $firmwareName;
        $this->firmwareFrom = $firmwareFrom;
        $this->firmwareTo = $firmwareTo;
        $this->protocol = $protocol;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->deviceList = $deviceList;
    }

    /**
     * Returns Campaign Name.
     * Campaign name.
     */
    public function getCampaignName(): ?string
    {
        return $this->campaignName;
    }

    /**
     * Sets Campaign Name.
     * Campaign name.
     *
     * @maps campaignName
     */
    public function setCampaignName(?string $campaignName): void
    {
        $this->campaignName = $campaignName;
    }

    /**
     * Returns Firmware Name.
     * Firmware name to upgrade to.
     */
    public function getFirmwareName(): string
    {
        return $this->firmwareName;
    }

    /**
     * Sets Firmware Name.
     * Firmware name to upgrade to.
     *
     * @required
     * @maps firmwareName
     */
    public function setFirmwareName(string $firmwareName): void
    {
        $this->firmwareName = $firmwareName;
    }

    /**
     * Returns Firmware From.
     * Old firmware version.
     */
    public function getFirmwareFrom(): string
    {
        return $this->firmwareFrom;
    }

    /**
     * Sets Firmware From.
     * Old firmware version.
     *
     * @required
     * @maps firmwareFrom
     */
    public function setFirmwareFrom(string $firmwareFrom): void
    {
        $this->firmwareFrom = $firmwareFrom;
    }

    /**
     * Returns Firmware To.
     * New firmware version.
     */
    public function getFirmwareTo(): string
    {
        return $this->firmwareTo;
    }

    /**
     * Sets Firmware To.
     * New firmware version.
     *
     * @required
     * @maps firmwareTo
     */
    public function setFirmwareTo(string $firmwareTo): void
    {
        $this->firmwareTo = $firmwareTo;
    }

    /**
     * Returns Protocol.
     * Valid values include: LWM2M, OMA and HTTP.
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }

    /**
     * Sets Protocol.
     * Valid values include: LWM2M, OMA and HTTP.
     *
     * @required
     * @maps protocol
     */
    public function setProtocol(string $protocol): void
    {
        $this->protocol = $protocol;
    }

    /**
     * Returns Start Date.
     * Campaign start date.
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * Sets Start Date.
     * Campaign start date.
     *
     * @required
     * @maps startDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setStartDate(\DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * Returns End Date.
     * Campaign end date.
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     * Campaign end date.
     *
     * @required
     * @maps endDate
     * @factory \VerizonLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setEndDate(\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns Campaign Time Window List.
     * List of allowed campaign time windows.
     *
     * @return V3TimeWindow[]|null
     */
    public function getCampaignTimeWindowList(): ?array
    {
        return $this->campaignTimeWindowList;
    }

    /**
     * Sets Campaign Time Window List.
     * List of allowed campaign time windows.
     *
     * @maps campaignTimeWindowList
     *
     * @param V3TimeWindow[]|null $campaignTimeWindowList
     */
    public function setCampaignTimeWindowList(?array $campaignTimeWindowList): void
    {
        $this->campaignTimeWindowList = $campaignTimeWindowList;
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
        if (isset($this->campaignName)) {
            $json['campaignName']           = $this->campaignName;
        }
        $json['firmwareName']               = $this->firmwareName;
        $json['firmwareFrom']               = $this->firmwareFrom;
        $json['firmwareTo']                 = $this->firmwareTo;
        $json['protocol']                   = $this->protocol;
        $json['startDate']                  = DateTimeHelper::toSimpleDate($this->startDate);
        $json['endDate']                    = DateTimeHelper::toSimpleDate($this->endDate);
        if (isset($this->campaignTimeWindowList)) {
            $json['campaignTimeWindowList'] = $this->campaignTimeWindowList;
        }
        $json['deviceList']                 = $this->deviceList;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
