<?php

namespace FilippoToso\Travelport\Rail;

class HotelChain
{

    /**
     * @var typeHotelChainCode $Code
     */
    protected $Code = null;

    /**
     * @param typeHotelChainCode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeHotelChainCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeHotelChainCode $Code
     * @return \FilippoToso\Travelport\Rail\HotelChain
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
