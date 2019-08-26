<?php

namespace FilippoToso\Travelport\GDSQueue;

class Provider
{

    /**
     * @var typeProviderCode $Code
     */
    protected $Code = null;

    /**
     * @param typeProviderCode $Code
     */
    public function __construct($Code)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeProviderCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeProviderCode $Code
     * @return \FilippoToso\Travelport\GDSQueue\Provider
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
