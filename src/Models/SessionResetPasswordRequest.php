<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

/**
 * Request to a new, randomly generated password for the current username.
 */
class SessionResetPasswordRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $oldPassword;

    /**
     * @param string $oldPassword
     */
    public function __construct(string $oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }

    /**
     * Returns Old Password.
     * The current password for the username.
     */
    public function getOldPassword(): string
    {
        return $this->oldPassword;
    }

    /**
     * Sets Old Password.
     * The current password for the username.
     *
     * @required
     * @maps oldPassword
     */
    public function setOldPassword(string $oldPassword): void
    {
        $this->oldPassword = $oldPassword;
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
        $json['oldPassword'] = $this->oldPassword;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
