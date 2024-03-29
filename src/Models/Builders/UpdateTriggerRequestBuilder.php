<?php

declare(strict_types=1);

/*
 * VerizonLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VerizonLib\Models\Builders;

use Core\Utils\CoreHelper;
use VerizonLib\Models\AnomalyTriggerRequest;
use VerizonLib\Models\DataTriggerRequest;
use VerizonLib\Models\PromoAlertTriggerRequest;
use VerizonLib\Models\SessionTriggerRequest;
use VerizonLib\Models\SMSTriggerRequest;
use VerizonLib\Models\UpdateTriggerRequest;

/**
 * Builder for model UpdateTriggerRequest
 *
 * @see UpdateTriggerRequest
 */
class UpdateTriggerRequestBuilder
{
    /**
     * @var UpdateTriggerRequest
     */
    private $instance;

    private function __construct(UpdateTriggerRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update trigger request Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateTriggerRequest());
    }

    /**
     * Sets account name field.
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Sets active field.
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
        return $this;
    }

    /**
     * Sets anomaly trigger request field.
     */
    public function anomalyTriggerRequest(?AnomalyTriggerRequest $value): self
    {
        $this->instance->setAnomalyTriggerRequest($value);
        return $this;
    }

    /**
     * Sets cycle type field.
     */
    public function cycleType(?string $value): self
    {
        $this->instance->setCycleType($value);
        return $this;
    }

    /**
     * Sets data trigger request field.
     */
    public function dataTriggerRequest(?DataTriggerRequest $value): self
    {
        $this->instance->setDataTriggerRequest($value);
        return $this;
    }

    /**
     * Sets group name field.
     */
    public function groupName(?string $value): self
    {
        $this->instance->setGroupName($value);
        return $this;
    }

    /**
     * Sets promo alert trigger request field.
     */
    public function promoAlertTriggerRequest(?PromoAlertTriggerRequest $value): self
    {
        $this->instance->setPromoAlertTriggerRequest($value);
        return $this;
    }

    /**
     * Sets session trigger request field.
     */
    public function sessionTriggerRequest(?SessionTriggerRequest $value): self
    {
        $this->instance->setSessionTriggerRequest($value);
        return $this;
    }

    /**
     * Sets sms trigger request field.
     */
    public function smsTriggerRequest(?SMSTriggerRequest $value): self
    {
        $this->instance->setSmsTriggerRequest($value);
        return $this;
    }

    /**
     * Sets trigger category field.
     */
    public function triggerCategory(?string $value): self
    {
        $this->instance->setTriggerCategory($value);
        return $this;
    }

    /**
     * Sets trigger id field.
     */
    public function triggerId(?string $value): self
    {
        $this->instance->setTriggerId($value);
        return $this;
    }

    /**
     * Sets trigger name field.
     */
    public function triggerName(?string $value): self
    {
        $this->instance->setTriggerName($value);
        return $this;
    }

    /**
     * Initializes a new update trigger request object.
     */
    public function build(): UpdateTriggerRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
