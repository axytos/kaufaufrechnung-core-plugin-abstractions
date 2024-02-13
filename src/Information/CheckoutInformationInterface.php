<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information;

interface CheckoutInformationInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Checkout\CustomerInterface
     */
    public function getCustomer();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Checkout\InvoiceAddressInterface
     */
    public function getInvoiceAddress();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Checkout\DeliveryAddressInterface
     */
    public function getDeliveryAddress();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Checkout\BasketInterface
     */
    public function getBasket();

    /**
     * @param mixed[] $data
     * @return void
     */
    public function savePreCheckResponseData($data);

    /**
     * @return mixed[] $preCheckResponseData
     */
    public function getPreCheckResponseData();
}
