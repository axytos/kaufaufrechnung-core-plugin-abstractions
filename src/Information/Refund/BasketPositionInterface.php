<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information\Refund;

interface BasketPositionInterface
{
    /**
     * @return string
     */
    public function getProductNumber();

    /**
     * @return float
     */
    public function getNetRefundTotal();

    /**
     * @return float
     */
    public function getGrossRefundTotal();
}
