<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information;

interface BasketUpdateInformationInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\BasketUpdate\BasketInterface
     */
    public function getBasket();
}
