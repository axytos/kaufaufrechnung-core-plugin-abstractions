<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information;

interface CheckoutInformationInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();

    /**
     * @return Checkout\CustomerInterface
     */
    public function getCustomer();

    /**
     * @return Checkout\InvoiceAddressInterface
     */
    public function getInvoiceAddress();

    /**
     * @return Checkout\DeliveryAddressInterface
     */
    public function getDeliveryAddress();

    /**
     * @return Checkout\BasketInterface
     */
    public function getBasket();

    /**
     * @param mixed[] $data
     *
     * @return void
     */
    public function savePreCheckResponseData($data);

    /**
     * @return mixed[] $preCheckResponseData
     */
    public function getPreCheckResponseData();
}
