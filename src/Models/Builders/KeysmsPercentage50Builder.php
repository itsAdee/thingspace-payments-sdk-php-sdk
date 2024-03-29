<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\KeysmsPercentage50;

/**
 * Builder for model KeysmsPercentage50
 *
 * @see KeysmsPercentage50
 */
class KeysmsPercentage50Builder
{
    /**
     * @var KeysmsPercentage50
     */
    private $instance;

    private function __construct(KeysmsPercentage50 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new keysms percentage 50 Builder object.
     */
    public static function init(): self
    {
        return new self(new KeysmsPercentage50());
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
     * Initializes a new keysms percentage 50 object.
     */
    public function build(): KeysmsPercentage50
    {
        return CoreHelper::clone($this->instance);
    }
}
