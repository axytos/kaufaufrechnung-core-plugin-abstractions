<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions;

interface PluginOrderInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();

    /**
     * @return Model\AxytosOrderStateInfo|null
     */
    public function loadState();

    /**
     * @param string      $state
     * @param string|null $data
     *
     * @return void
     */
    public function saveState($state, $data = null);

    // / CHECKOUT

    /**
     * @return void
     */
    public function freezeBasket();

    /**
     * @return Information\CheckoutInformationInterface
     */
    public function checkoutInformation();

    // / CANCEL

    /**
     * @return bool
     */
    public function hasBeenCanceled();

    /**
     * @return Information\CancelInformationInterface
     */
    public function cancelInformation();

    // / INVOICE

    /**
     * @return bool
     */
    public function hasBeenInvoiced();

    /**
     * @return Information\InvoiceInformationInterface
     */
    public function invoiceInformation();

    // / REFUND

    /**
     * @return bool
     */
    public function hasBeenRefunded();

    /**
     * @return Information\RefundInformationInterface
     */
    public function refundInformation();

    // / SHIPPING

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
     * @return Information\ShippingInformationInterface
     */
    public function shippingInformation();

    // / TRACKING

    /**
     * @return bool
     */
    public function hasNewTrackingInformation();

    /**
     * @return void
     */
    public function saveNewTrackingInformation();

    /**
     * @return Information\TrackingInformationInterface
     */
    public function trackingInformation();

    // / BASKET-UPDATE

    /**
     * @return bool
     */
    public function hasBasketUpdates();

    /**
     * @return void
     */
    public function saveBasketUpdatesReported();

    /**
     * @return Information\BasketUpdateInformationInterface
     */
    public function basketUpdateInformation();

    // / PAYMENT

    /**
     * @return void
     */
    public function saveHasBeenPaid();

    /**
     * @return Information\PaymentInformationInterface
     */
    public function paymentInformation();
}
