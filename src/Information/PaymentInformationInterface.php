<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information;

interface PaymentInformationInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();
}
