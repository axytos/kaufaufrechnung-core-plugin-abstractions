<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions;

interface PluginOrderInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Model\AxytosOrderStateInfo|null
     */
    public function loadState();

    /**
     * @param string $state
     * @param string|null $data
     * @return void
     */
    public function saveState($state, $data = null);

    /// CHECKOUT

    /**
     * @return void
     */
    public function freezeBasket();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\CheckoutInformationInterface
     */
    public function checkoutInformation();

    /// CANCEL

    /**
     * @return bool
     */
    public function hasBeenCanceled();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\CancelInformationInterface
     */
    public function cancelInformation();

    /// INVOICE

    /**
     * @return bool
     */
    public function hasBeenInvoiced();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\InvoiceInformationInterface
     */
    public function invoiceInformation();

    /// REFUND

    /**
     * @return bool
     */
    public function hasBeenRefunded();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\RefundInformationInterface
     */
    public function refundInformation();

    /// SHIPPING

    /**
     * @return bool
     */
    public function hasShippingReported();

    /**
     * @return bool
     */
    public function hasBeenShipped();

    /**
     * @return void
     */
    public function saveHasShippingReported();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\ShippingInformationInterface
     */
    public function shippingInformation();

    /// TRACKING

    /**
     * @return bool
     */
    public function hasNewTrackingInformation();

    /**
     * @return void
     */
    public function saveNewTrackingInformation();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\TrackingInformationInterface
     */
    public function trackingInformation();

    /// BASKET-UPDATE

    /**
     * @return bool
     */
    public function hasBasketUpdates();

    /**
     * @return void
     */
    public function saveBasketUpdatesReported();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\BasketUpdateInformationInterface
     */
    public function basketUpdateInformation();

    /// PAYMENT

    /**
     * @return void
     */
    public function saveHasBeenPaid();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\PaymentInformationInterface
     */
    public function paymentInformation();
}
