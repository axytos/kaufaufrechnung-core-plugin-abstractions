<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions;

interface OrderSyncRepositoryInterface
{
    /**
     * @param string[]    $orderStates
     * @param int|null    $limit
     * @param string|null $startId
     *
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\PluginOrderInterface[]
     */
    public function getOrdersByStates($orderStates, $limit = null, $startId = null);

    /**
     * @param string|int $orderNumber
     *
     * @return PluginOrderInterface|null
     */
    public function getOrderByOrderNumber($orderNumber);
}
