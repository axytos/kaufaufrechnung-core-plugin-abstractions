<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information;

interface ShippingInformationInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Shipping\BasketPositionInterface[]
     */
    public function getShippingBasketPositions();
}
