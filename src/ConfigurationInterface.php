<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib;

use CoreInterfaces\Http\HttpConfigurations;
use VerizonLib\Authentication\ClientCredentialsAuthCredentialsBuilder;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get m2M Session Token ([How to generate an M2M session token?](page:getting-started/5g-edge-
     * developer-
     *
     * * creds-token#obtaining-a-vz-m2m-session-token-programmatically))
     */
    public function getVZM2mToken(): string;

    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Get the credentials to use with ClientCredentialsAuth
     */
    public function getClientCredentialsAuth(): ClientCredentialsAuth;

    /**
     * Get the credentials builder instance to update credentials for ClientCredentialsAuth
     */
    public function getClientCredentialsAuthCredentialsBuilder(): ?ClientCredentialsAuthCredentialsBuilder;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::EDGE_DISCOVERY): string;
}
