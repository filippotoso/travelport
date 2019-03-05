<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ProhibitedChains
{

    /**
     * @var HotelChain $HotelChain
     */
    protected $HotelChain = null;

    /**
     * @param HotelChain $HotelChain
     */
    public function __construct($HotelChain = null)
    {
      $this->HotelChain = $HotelChain;
    }

    /**
     * @return HotelChain
     */
    public function getHotelChain()
    {
      return $this->HotelChain;
    }

    /**
     * @param HotelChain $HotelChain
     * @return \FilippoToso\Travelport\UniversalRecord\ProhibitedChains
     */
    public function setHotelChain($HotelChain)
    {
      $this->HotelChain = $HotelChain;
      return $this;
    }

}
