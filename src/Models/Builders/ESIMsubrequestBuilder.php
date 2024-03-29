<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ESIMsubrequest;

/**
 * Builder for model ESIMsubrequest
 *
 * @see ESIMsubrequest
 */
class ESIMsubrequestBuilder
{
    /**
     * @var ESIMsubrequest
     */
    private $instance;

    private function __construct(ESIMsubrequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new esimsubrequest Builder object.
     */
    public static function init(): self
    {
        return new self(new ESIMsubrequest());
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets kind field.
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Initializes a new esimsubrequest object.
     */
    public function build(): ESIMsubrequest
    {
        return CoreHelper::clone($this->instance);
    }
}
