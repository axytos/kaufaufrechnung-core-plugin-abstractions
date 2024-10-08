<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Invoice;

interface BasketPositionInterface
{
    /**
     * @return string
     */
    public function getProductNumber();

    /**
     * @return string
     */
    public function getProductName();

    /**
     * @return float
     */
    public function getQuantity();

    /**
     * @return float
     */
    public function getTaxPercent();

    /**
     * @return float
     */
    public function getNetPricePerUnit();

    /**
     * @return float
     */
    public function getGrossPricePerUnit();

    /**
     * @return float
     */
    public function getNetPositionTotal();

    /**
     * @return float
     */
    public function getGrossPositionTotal();
}
