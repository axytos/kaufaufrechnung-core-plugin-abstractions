<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Checkout;

interface CustomerInterface
{
    /**
     * @return string|null
     */
    public function getCustomerNumber();

    /**
     * @return \DateTimeInterface|null
     */
    public function getDateOfBirth();

    /**
     * @return string|null
     */
    public function getEmailAddress();

    /**
     * @return string|null
     */
    public function getCompanyName();
}
