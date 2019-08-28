<?php

namespace FilippoToso\Travelport\GDSQueue;

class City extends Location
{

    /**
     * @var typeIATACode $Code
     */
    protected $Code = null;

    /**
     * @param typeIATACode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeIATACode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeIATACode $Code
     * @return \FilippoToso\Travelport\GDSQueue\City
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
