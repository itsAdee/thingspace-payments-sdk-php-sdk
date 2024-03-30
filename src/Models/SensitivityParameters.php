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
 * Details for sensitivity parameters.
 */
class SensitivityParameters implements \JsonSerializable
{
    /**
     * @var float|null
     */
    private $abnormalMaxValue;

    /**
     * @var bool|null
     */
    private $enableAbnormal;

    /**
     * @var bool|null
     */
    private $enableVeryAbnormal;

    /**
     * @var float|null
     */
    private $veryAbnormalMaxValue;

    /**
     * Returns Abnormal Max Value.
     * The maximum value of the threshold in the units being measured.
     */
    public function getAbnormalMaxValue(): ?float
    {
        return $this->abnormalMaxValue;
    }

    /**
     * Sets Abnormal Max Value.
     * The maximum value of the threshold in the units being measured.
     *
     * @maps abnormalMaxValue
     */
    public function setAbnormalMaxValue(?float $abnormalMaxValue): void
    {
        $this->abnormalMaxValue = $abnormalMaxValue;
    }

    /**
     * Returns Enable Abnormal.
     * If abnormal values are being monitored.<br />true - Monitor for abnormal values<br />false - Do not
     * monitor for abnormal values.
     */
    public function getEnableAbnormal(): ?bool
    {
        return $this->enableAbnormal;
    }

    /**
     * Sets Enable Abnormal.
     * If abnormal values are being monitored.<br />true - Monitor for abnormal values<br />false - Do not
     * monitor for abnormal values.
     *
     * @maps enableAbnormal
     */
    public function setEnableAbnormal(?bool $enableAbnormal): void
    {
        $this->enableAbnormal = $enableAbnormal;
    }

    /**
     * Returns Enable Very Abnormal.
     * If very abnormal values are being monitored.<br />true - Monitor for very abnormal values<br />false
     * - Do not monitor for very abnormal values.
     */
    public function getEnableVeryAbnormal(): ?bool
    {
        return $this->enableVeryAbnormal;
    }

    /**
     * Sets Enable Very Abnormal.
     * If very abnormal values are being monitored.<br />true - Monitor for very abnormal values<br />false
     * - Do not monitor for very abnormal values.
     *
     * @maps enableVeryAbnormal
     */
    public function setEnableVeryAbnormal(?bool $enableVeryAbnormal): void
    {
        $this->enableVeryAbnormal = $enableVeryAbnormal;
    }

    /**
     * Returns Very Abnormal Max Value.
     * The maximum value of the threshold in the units being measured.
     */
    public function getVeryAbnormalMaxValue(): ?float
    {
        return $this->veryAbnormalMaxValue;
    }

    /**
     * Sets Very Abnormal Max Value.
     * The maximum value of the threshold in the units being measured.
     *
     * @maps veryAbnormalMaxValue
     */
    public function setVeryAbnormalMaxValue(?float $veryAbnormalMaxValue): void
    {
        $this->veryAbnormalMaxValue = $veryAbnormalMaxValue;
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
        if (isset($this->abnormalMaxValue)) {
            $json['abnormalMaxValue']     = $this->abnormalMaxValue;
        }
        if (isset($this->enableAbnormal)) {
            $json['enableAbnormal']       = $this->enableAbnormal;
        }
        if (isset($this->enableVeryAbnormal)) {
            $json['enableVeryAbnormal']   = $this->enableVeryAbnormal;
        }
        if (isset($this->veryAbnormalMaxValue)) {
            $json['veryAbnormalMaxValue'] = $this->veryAbnormalMaxValue;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
