<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Configuration;

interface ClientSecretProviderInterface
{
    /**
     * @return string|null
     */
    public function getClientSecret();
}
