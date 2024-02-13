<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\BasketUpdate;

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
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\BasketUpdate\BasketPositionInterface[]
     */
    public function getPositions();
}
