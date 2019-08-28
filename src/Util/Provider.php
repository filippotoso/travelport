<?php

namespace FilippoToso\Travelport\Util;

class Provider
{

    /**
     * @var typeProviderCode $Code
     */
    protected $Code = null;

    /**
     * @param typeProviderCode $Code
     */
    public function __construct($Code = null)
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
     * @return \FilippoToso\Travelport\Util\Provider
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
