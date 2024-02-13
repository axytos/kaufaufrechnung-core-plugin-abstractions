<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Database;

interface DatabaseTransactionInterface
{
    /**
     * @return void
     */
    public function begin();

    /**
     * @return void
     */
    public function commit();

    /**
     * @return void
     */
    public function rollback();
}
