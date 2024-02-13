<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information;

interface InvoiceInformationInterface
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
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Invoice\BasketInterface
     */
    public function getBasket();
}
