<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\RegisterCallbackRequest;

/**
 * Builder for model RegisterCallbackRequest
 *
 * @see RegisterCallbackRequest
 */
class RegisterCallbackRequestBuilder
{
    /**
     * @var RegisterCallbackRequest
     */
    private $instance;

    private function __construct(RegisterCallbackRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new register callback request Builder object.
     */
    public static function init(string $name, string $url): self
    {
        return new self(new RegisterCallbackRequest($name, $url));
    }

    /**
     * Sets username field.
     */
    public function username(?string $value): self
    {
        $this->instance->setUsername($value);
        return $this;
    }

    /**
     * Sets password field.
     */
    public function password(?string $value): self
    {
        $this->instance->setPassword($value);
        return $this;
    }

    /**
     * Initializes a new register callback request object.
     */
    public function build(): RegisterCallbackRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
