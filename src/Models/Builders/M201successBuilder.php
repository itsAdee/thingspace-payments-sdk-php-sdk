<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\M201success;

/**
 * Builder for model M201success
 *
 * @see M201success
 */
class M201successBuilder
{
    /**
     * @var M201success
     */
    private $instance;

    private function __construct(M201success $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new m201 success Builder object.
     */
    public static function init(): self
    {
        return new self(new M201success());
    }

    /**
     * Sets request id field.
     */
    public function requestId(?string $value): self
    {
        $this->instance->setRequestId($value);
        return $this;
    }

    /**
     * Initializes a new m201 success object.
     */
    public function build(): M201success
    {
        return CoreHelper::clone($this->instance);
    }
}