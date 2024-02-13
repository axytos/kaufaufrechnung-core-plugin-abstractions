<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information;

interface CancelInformationInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();
}
