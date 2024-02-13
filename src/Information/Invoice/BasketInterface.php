<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Invoice;

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
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Invoice\BasketPositionInterface[]
     */
    public function getPositions();

    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Invoice\TaxGroupInterface[]
     */
    public function getTaxGroups();
}
