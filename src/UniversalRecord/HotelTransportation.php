<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelTransportation
{

    /**
     * @var typeOTACode $Type
     */
    protected $Type = null;

    /**
     * @param typeOTACode $Type
     */
    public function __construct($Type = null)
    {
      $this->Type = $Type;
    }

    /**
     * @return typeOTACode
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeOTACode $Type
     * @return \FilippoToso\Travelport\UniversalRecord\HotelTransportation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
