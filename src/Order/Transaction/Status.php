<?php

namespace GingerPayments\Payment\Order\Transaction;

use GingerPayments\Payment\Common\ChoiceBasedValueObject;
use GingerPayments\Payment\Common\StringBasedValueObject;

final class Status
{
    use StringBasedValueObject, ChoiceBasedValueObject;

    /**
     * Possible transaction statuses
     */
    const BRAND_NEW = 'new';
    const PENDING = 'pending';
    const PROCESSING = 'processing';
    const ERROR = 'error';
    const COMPLETED = 'completed';
    const CANCELLED = 'cancelled';
    const EXPIRED = 'expired';

    /**
     * @return array
     */
    public function possibleValues()
    {
        return array(
            self::BRAND_NEW,
            self::PENDING,
            self::PROCESSING,
            self::ERROR,
            self::COMPLETED,
            self::CANCELLED,
            self::EXPIRED
        );
    }

    /**
     * @return bool
     */
    public function isNew()
    {
        return $this->value === self::BRAND_NEW;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return $this->value === self::PENDING;
    }

    /**
     * @return bool
     */
    public function isProcessing()
    {
        return $this->value === self::PROCESSING;
    }

    /**
     * @return bool
     */
    public function isError()
    {
        return $this->value === self::ERROR;
    }

    /**
     * @return bool
     */
    public function isCompleted()
    {
        return $this->value === self::COMPLETED;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->value === self::CANCELLED;
    }

    /**
     * @return bool
     */
    public function isExpired()
    {
        return $this->value === self::EXPIRED;
    }
}
