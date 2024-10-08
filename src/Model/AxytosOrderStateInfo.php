<?php

namespace Axytos\KaufAufRechnung\Core\Plugin\Abstractions\Model;

class AxytosOrderStateInfo
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $data;

    /**
     * @param string      $name
     * @param string|null $data
     */
    public function __construct($name, $data = null)
    {
        $this->name = $name;
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }
}
