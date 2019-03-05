<?php

namespace FilippoToso\Travelport\UProfile;

class Carrier
{

    /**
     * @var typeCarrier $Code
     */
    protected $Code = null;

    /**
     * @param typeCarrier $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeCarrier
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeCarrier $Code
     * @return \FilippoToso\Travelport\UProfile\Carrier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
