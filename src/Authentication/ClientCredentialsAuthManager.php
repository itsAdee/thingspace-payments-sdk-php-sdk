<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Authentication;

use CoreInterfaces\Core\Request\TypeValidatorInterface;
use Core\Authentication\CoreAuth;
use Core\Client;
use Core\Request\Parameters\HeaderParam;
use InvalidArgumentException;
use VerizonLib\Models\OauthToken;
use VerizonLib\Controllers\OauthAuthorizationController;
use VerizonLib\ClientCredentialsAuth;

/**
 * Utility class for OAuth 2 authorization and token management
 */
class ClientCredentialsAuthManager extends CoreAuth implements ClientCredentialsAuth
{
    /**
     * Singleton instance of OAuth 2 API controller
     * @var OauthAuthorizationController
     */
    private $oAuthApi;

    private $oauthClientId;

    private $oauthClientSecret;

    private $oauthToken;

    private $oauthScopes;

    /**
     * Returns an instance of this class.
     *
     * @param string $oauthClientId OAuth 2 Client ID
     * @param string $oauthClientSecret OAuth 2 Client Secret
     * @param mixed $oauthToken Object for storing information about the OAuth token
     * @param mixed $oauthScopes List of scopes that apply to the OAuth token
     */
    public function __construct(string $oauthClientId, string $oauthClientSecret, $oauthToken, $oauthScopes)
    {
        $this->oauthClientId = $oauthClientId;
        $this->oauthClientSecret = $oauthClientSecret;
        if ($oauthToken instanceof OauthToken) {
            $this->oauthToken = $oauthToken;
            parent::__construct(
                HeaderParam::init('Authorization', 'Bearer ' . $oauthToken->getAccessToken())->required()
            );
        }
        if (is_array($oauthScopes)) {
            $this->oauthScopes = $oauthScopes;
        }
    }

    public function setClient(Client $client): void
    {
        $this->oAuthApi = new OAuthAuthorizationController($client);
    }

    /**
     * String value for oauthClientId.
     */
    public function getOauthClientId(): string
    {
        return $this->oauthClientId;
    }

    /**
     * String value for oauthClientSecret.
     */
    public function getOauthClientSecret(): string
    {
        return $this->oauthClientSecret;
    }

    /**
     * OauthToken value for oauthToken.
     */
    public function getOauthToken(): ?OauthToken
    {
        return $this->oauthToken;
    }

    /**
     * OauthScopeEnum value for oauthScopes.
     */
    public function getOauthScopes(): ?array
    {
        return $this->oauthScopes;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $oauthClientId OAuth 2 Client ID
     * @param string $oauthClientSecret OAuth 2 Client Secret
     */
    public function equals(string $oauthClientId, string $oauthClientSecret): bool
    {
        return $oauthClientId == $this->oauthClientId &&
            $oauthClientSecret == $this->oauthClientSecret;
    }

    /**
     * Fetch the OAuth token.
     * @param  array|null        $additionalParams  Additional parameters to send during authorization
     */
    public function fetchToken(?array $additionalParams = null): OauthToken
    {
        //send request for access token
        $oAuthToken = $this->oAuthApi->requestToken(
            $this->buildBasicHeader(),
            implode(' ', $this->oauthScopes ?? []),
            $additionalParams
        )->getResult();

        //add expiry
        if ($oAuthToken->getExpiresIn() != null && $oAuthToken->getExpiresIn() != 0) {
            $oAuthToken->setExpiry(time() + $oAuthToken->getExpiresIn());
        }

        return $oAuthToken;
    }

    /**
     * Has the OAuth token expired?
     */
    public function isTokenExpired(): bool
    {
        return $this->oauthToken->getExpiry() != null &&
            $this->oauthToken->getExpiry() < time();
    }

    /**
     * Check if client is authorized, throws exceptions when token is null or expired.
     *
     * @throws InvalidArgumentException
     */
    public function validate(TypeValidatorInterface $validator): void
    {
        if ($this->oauthToken == null) {
            throw new InvalidArgumentException('Client is not authorized. An OAuth token is needed to make API calls.');
        }

        if ($this->isTokenExpired()) {
            throw new InvalidArgumentException('OAuth token is expired. A valid token is needed to make API calls.');
        }
        parent::validate($validator);
    }

    /**
     * Build authorization header value for basic auth
     */
    private function buildBasicHeader(): string
    {
        return 'Basic ' . base64_encode(
            $this->oauthClientId . ':' . $this->oauthClientSecret
        );
    }
}
