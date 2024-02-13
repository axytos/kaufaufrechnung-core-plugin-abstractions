<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Invoice;

interface TaxGroupInterface
{
    /**
     * @return float
     */
    public function getTaxPercent();

    /**
     * @return float
     */
    public function getValueToTax();

    /**
     * @return float
     */
    public function getTotal();
}
