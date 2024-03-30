<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class Condition implements \JsonSerializable
{
    /**
     * @var Keyschunk2[]|null
     */
    private $condition;

    /**
     * Returns Condition.
     *
     * @return Keyschunk2[]|null
     */
    public function getCondition(): ?array
    {
        return $this->condition;
    }

    /**
     * Sets Condition.
     *
     * @maps condition
     *
     * @param Keyschunk2[]|null $condition
     */
    public function setCondition(?array $condition): void
    {
        $this->condition = $condition;
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
        if (isset($this->condition)) {
            $json['condition'] = $this->condition;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}