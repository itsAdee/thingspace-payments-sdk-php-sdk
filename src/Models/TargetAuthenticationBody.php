<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models;

use stdClass;

class TargetAuthenticationBody implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $grantType;

    /**
     * @var string|null
     */
    private $refreshToken;

    /**
     * @var string|null
     */
    private $scope;

    /**
     * @var TargetAuthenticationBodyHeaders|null
     */
    private $headers;

    /**
     * @var TargetAuthenticationBodyHost|null
     */
    private $host;

    /**
     * Returns Grant Type.
     * Authentication grant type.
     */
    public function getGrantType(): ?string
    {
        return $this->grantType;
    }

    /**
     * Sets Grant Type.
     * Authentication grant type.
     *
     * @maps grant_type
     */
    public function setGrantType(?string $grantType): void
    {
        $this->grantType = $grantType;
    }

    /**
     * Returns Refresh Token.
     * Refresh token.
     */
    public function getRefreshToken(): ?string
    {
        return $this->refreshToken;
    }

    /**
     * Sets Refresh Token.
     * Refresh token.
     *
     * @maps refresh_token
     */
    public function setRefreshToken(?string $refreshToken): void
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * Returns Scope.
     * Authentication scopes.
     */
    public function getScope(): ?string
    {
        return $this->scope;
    }

    /**
     * Sets Scope.
     * Authentication scopes.
     *
     * @maps scope
     */
    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * Returns Headers.
     * Authentication headers.
     */
    public function getHeaders(): ?TargetAuthenticationBodyHeaders
    {
        return $this->headers;
    }

    /**
     * Sets Headers.
     * Authentication headers.
     *
     * @maps headers
     */
    public function setHeaders(?TargetAuthenticationBodyHeaders $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * Returns Host.
     * Host information.
     */
    public function getHost(): ?TargetAuthenticationBodyHost
    {
        return $this->host;
    }

    /**
     * Sets Host.
     * Host information.
     *
     * @maps host
     */
    public function setHost(?TargetAuthenticationBodyHost $host): void
    {
        $this->host = $host;
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
        if (isset($this->grantType)) {
            $json['grant_type']    = $this->grantType;
        }
        if (isset($this->refreshToken)) {
            $json['refresh_token'] = $this->refreshToken;
        }
        if (isset($this->scope)) {
            $json['scope']         = $this->scope;
        }
        if (isset($this->headers)) {
            $json['headers']       = $this->headers;
        }
        if (isset($this->host)) {
            $json['host']          = $this->host;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
