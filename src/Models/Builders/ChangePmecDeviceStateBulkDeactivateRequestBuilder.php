<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\ChangePmecDeviceStateBulkDeactivateRequest;

/**
 * Builder for model ChangePmecDeviceStateBulkDeactivateRequest
 *
 * @see ChangePmecDeviceStateBulkDeactivateRequest
 */
class ChangePmecDeviceStateBulkDeactivateRequestBuilder
{
    /**
     * @var ChangePmecDeviceStateBulkDeactivateRequest
     */
    private $instance;

    private function __construct(ChangePmecDeviceStateBulkDeactivateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change pmec device state bulk deactivate request Builder object.
     */
    public static function init(string $accountName, array $deviceList): self
    {
        return new self(new ChangePmecDeviceStateBulkDeactivateRequest($accountName, $deviceList));
    }

    /**
     * Initializes a new change pmec device state bulk deactivate request object.
     */
    public function build(): ChangePmecDeviceStateBulkDeactivateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
