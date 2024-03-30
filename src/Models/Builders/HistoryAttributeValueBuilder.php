<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\HistoryAttributeValue;

/**
 * Builder for model HistoryAttributeValue
 *
 * @see HistoryAttributeValue
 */
class HistoryAttributeValueBuilder
{
    /**
     * @var HistoryAttributeValue
     */
    private $instance;

    private function __construct(HistoryAttributeValue $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new history attribute value Builder object.
     */
    public static function init(): self
    {
        return new self(new HistoryAttributeValue());
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets value field.
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Sets created on field.
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
        return $this;
    }

    /**
     * Initializes a new history attribute value object.
     */
    public function build(): HistoryAttributeValue
    {
        return CoreHelper::clone($this->instance);
    }
}
