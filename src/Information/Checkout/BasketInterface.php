<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Checkout;

interface BasketInterface
{
    /**
     * @return float
     */
    public function getNetTotal();

    /**
     * @return float
     */
    public function getGrossTotal();

    /**
     * @return string
     */
    public function getCurrency();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Checkout\BasketPositionInterface[]
     */
    public function getPositions();
}
