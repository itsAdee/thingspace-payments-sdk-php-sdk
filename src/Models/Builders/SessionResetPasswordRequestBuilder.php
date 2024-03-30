<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\SessionResetPasswordRequest;

/**
 * Builder for model SessionResetPasswordRequest
 *
 * @see SessionResetPasswordRequest
 */
class SessionResetPasswordRequestBuilder
{
    /**
     * @var SessionResetPasswordRequest
     */
    private $instance;

    private function __construct(SessionResetPasswordRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new session reset password request Builder object.
     */
    public static function init(string $oldPassword): self
    {
        return new self(new SessionResetPasswordRequest($oldPassword));
    }

    /**
     * Initializes a new session reset password request object.
     */
    public function build(): SessionResetPasswordRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
