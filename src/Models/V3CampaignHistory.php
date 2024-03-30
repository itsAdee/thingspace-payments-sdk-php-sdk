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
 * Campaign history.
 */
class V3CampaignHistory implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $hasMoreData;

    /**
     * @var string|null
     */
    private $lastSeenCampaignId;

    /**
     * @var V3CampaignMetaInfo[]|null
     */
    private $campaignList;

    /**
     * @param bool $hasMoreData
     */
    public function __construct(bool $hasMoreData)
    {
        $this->hasMoreData = $hasMoreData;
    }

    /**
     * Returns Has More Data.
     * Has more report flag?
     */
    public function getHasMoreData(): bool
    {
        return $this->hasMoreData;
    }

    /**
     * Sets Has More Data.
     * Has more report flag?
     *
     * @required
     * @maps hasMoreData
     */
    public function setHasMoreData(bool $hasMoreData): void
    {
        $this->hasMoreData = $hasMoreData;
    }

    /**
     * Returns Last Seen Campaign Id.
     * Campaign identifier.
     */
    public function getLastSeenCampaignId(): ?string
    {
        return $this->lastSeenCampaignId;
    }

    /**
     * Sets Last Seen Campaign Id.
     * Campaign identifier.
     *
     * @maps lastSeenCampaignId
     */
    public function setLastSeenCampaignId(?string $lastSeenCampaignId): void
    {
        $this->lastSeenCampaignId = $lastSeenCampaignId;
    }

    /**
     * Returns Campaign List.
     * Firmware upgrade list.
     *
     * @return V3CampaignMetaInfo[]|null
     */
    public function getCampaignList(): ?array
    {
        return $this->campaignList;
    }

    /**
     * Sets Campaign List.
     * Firmware upgrade list.
     *
     * @maps campaignList
     *
     * @param V3CampaignMetaInfo[]|null $campaignList
     */
    public function setCampaignList(?array $campaignList): void
    {
        $this->campaignList = $campaignList;
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
        $json['hasMoreData']            = $this->hasMoreData;
        if (isset($this->lastSeenCampaignId)) {
            $json['lastSeenCampaignId'] = $this->lastSeenCampaignId;
        }
        $json['campaignList']           = $this->campaignList;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}