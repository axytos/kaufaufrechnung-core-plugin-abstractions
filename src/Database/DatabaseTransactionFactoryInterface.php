<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Database;

interface DatabaseTransactionFactoryInterface
{
    /**
     * @return DatabaseTransactionInterface
     */
    public function create();
}
