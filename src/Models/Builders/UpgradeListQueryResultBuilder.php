<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\UpgradeListQueryResult;

/**
 * Builder for model UpgradeListQueryResult
 *
 * @see UpgradeListQueryResult
 */
class UpgradeListQueryResultBuilder
{
    /**
     * @var UpgradeListQueryResult
     */
    private $instance;

    private function __construct(UpgradeListQueryResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new upgrade list query result Builder object.
     */
    public static function init(): self
    {
        return new self(new UpgradeListQueryResult());
    }

    /**
     * Sets has more flag field.
     */
    public function hasMoreFlag(?bool $value): self
    {
        $this->instance->setHasMoreFlag($value);
        return $this;
    }

    /**
     * Sets last seen upgrade id field.
     */
    public function lastSeenUpgradeId(?int $value): self
    {
        $this->instance->setLastSeenUpgradeId($value);
        return $this;
    }

    /**
     * Sets report list field.
     */
    public function reportList(?array $value): self
    {
        $this->instance->setReportList($value);
        return $this;
    }

    /**
     * Unsets report list field.
     */
    public function unsetReportList(): self
    {
        $this->instance->unsetReportList();
        return $this;
    }

    /**
     * Initializes a new upgrade list query result object.
     */
    public function build(): UpgradeListQueryResult
    {
        return CoreHelper::clone($this->instance);
    }
}