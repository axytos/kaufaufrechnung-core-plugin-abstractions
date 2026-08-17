<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions;

interface PluginOrderSupportsPartialRefundInterface
{
    /**
     * @return bool
     */
    public function hasBeenPartialRefunded();

    /**
     * @return bool
     */
    public function savePartialRefundReported();

    /**
     * @return bool
     */
    public function hasNewPartialRefundSinceLastReport();

    /**
     * @return Information\PartialRefundInformationInterface
     */
    public function partialRefundInformation();
}
