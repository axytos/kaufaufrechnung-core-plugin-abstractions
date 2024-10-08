<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information;

interface RefundInformationInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();

    /**
     * @return string|int
     */
    public function getInvoiceNumber();

    /**
     * @return Refund\BasketInterface
     */
    public function getBasket();
}
