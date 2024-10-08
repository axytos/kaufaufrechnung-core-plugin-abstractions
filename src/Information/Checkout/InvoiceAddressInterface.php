<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Checkout;

interface InvoiceAddressInterface
{
    /**
     * @return string|null
     */
    public function getCompanyName();

    /**
     * @return string|null
     */
    public function getSalutation();

    /**
     * @return string|null
     */
    public function getFirstName();

    /**
     * @return string|null
     */
    public function getLastName();

    /**
     * @return string
     */
    public function getZipCode();

    /**
     * @return string
     */
    public function getCityName();

    /**
     * @return string|null
     */
    public function getRegionName();

    /**
     * @return string
     */
    public function getCountryCode();

    /**
     * @return string|null
     */
    public function getVATId();

    /**
     * @return string|null
     */
    public function getStreet(); // addressLine1

    /**
     * @return string|null
     */
    public function getAdditionalAddressLine2(); // addressLine2

    /**
     * @return string|null
     */
    public function getAdditionalAddressLine3(); // addressLine3

    /**
     * @return string|null
     */
    public function getAdditionalAddressLine4(); // addressLine4
}
