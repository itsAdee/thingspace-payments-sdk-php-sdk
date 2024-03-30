<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\V3SoftwareInfo;

/**
 * Builder for model V3SoftwareInfo
 *
 * @see V3SoftwareInfo
 */
class V3SoftwareInfoBuilder
{
    /**
     * @var V3SoftwareInfo
     */
    private $instance;

    private function __construct(V3SoftwareInfo $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v3 software info Builder object.
     */
    public static function init(string $name, string $version, string $upgradeTime): self
    {
        return new self(new V3SoftwareInfo($name, $version, $upgradeTime));
    }

    /**
     * Initializes a new v3 software info object.
     */
    public function build(): V3SoftwareInfo
    {
        return CoreHelper::clone($this->instance);
    }
}
