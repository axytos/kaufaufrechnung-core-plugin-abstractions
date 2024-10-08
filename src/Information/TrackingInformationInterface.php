<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Information;

interface TrackingInformationInterface
{
    /**
     * @return string|int
     */
    public function getOrderNumber();

    /**
     * @return float
     */
    public function getDeliveryWeight();

    /**
     * @return string
     */
    public function getDeliveryMethod(); // Logistician

    /**
     * @return Tracking\DeliveryAddressInterface
     */
    public function getDeliveryAddress();

    /**
     * @return array<string>
     */
    public function getTrackingIds();
}
