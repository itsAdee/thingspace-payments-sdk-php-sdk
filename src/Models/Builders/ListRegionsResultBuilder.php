<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ListRegionsResult;

/**
 * Builder for model ListRegionsResult
 *
 * @see ListRegionsResult
 */
class ListRegionsResultBuilder
{
    /**
     * @var ListRegionsResult
     */
    private $instance;

    private function __construct(ListRegionsResult $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list regions result Builder object.
     */
    public static function init(): self
    {
        return new self(new ListRegionsResult());
    }

    /**
     * Sets regions field.
     */
    public function regions(?array $value): self
    {
        $this->instance->setRegions($value);
        return $this;
    }

    /**
     * Initializes a new list regions result object.
     */
    public function build(): ListRegionsResult
    {
        return CoreHelper::clone($this->instance);
    }
}