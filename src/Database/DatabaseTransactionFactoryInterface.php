<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Database;

interface DatabaseTransactionFactoryInterface
{
    /**
     * @return \Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Database\DatabaseTransactionInterface
     */
    public function create();
}
