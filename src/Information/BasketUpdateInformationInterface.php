<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information;

interface BasketUpdateInformationInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();

    /**
     * @return BasketUpdate\BasketInterface
     */
    public function getBasket();
}
