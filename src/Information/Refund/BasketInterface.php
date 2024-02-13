<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Refund;

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
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Refund\BasketPositionInterface[]
     */
    public function getPositions();
    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Refund\TaxGroupInterface[]
     */
    public function getTaxGroups();
}
