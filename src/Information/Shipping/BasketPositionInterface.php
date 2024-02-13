<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Shipping;

interface BasketPositionInterface
{
    /**
     * @return string
     */
    public function getProductNumber();

    /**
     * @return int
     */
    public function getQuantity();
}
