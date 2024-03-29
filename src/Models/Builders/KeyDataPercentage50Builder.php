<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\KeyDataPercentage50;

/**
 * Builder for model KeyDataPercentage50
 *
 * @see KeyDataPercentage50
 */
class KeyDataPercentage50Builder
{
    /**
     * @var KeyDataPercentage50
     */
    private $instance;

    private function __construct(KeyDataPercentage50 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new key data percentage 50 Builder object.
     */
    public static function init(): self
    {
        return new self(new KeyDataPercentage50());
    }

    /**
     * Sets key field.
     */
    public function key(?string $value): self
    {
        $this->instance->setKey($value);
        return $this;
    }

    /**
     * Sets value field.
     */
    public function value(?bool $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Initializes a new key data percentage 50 object.
     */
    public function build(): KeyDataPercentage50
    {
        return CoreHelper::clone($this->instance);
    }
}
