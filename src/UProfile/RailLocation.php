<?php

namespace FilippoToso\Travelport\UProfile;

class RailLocation extends Location
{

    /**
     * @var typeRailLocationCode $Code
     */
    protected $Code = null;

    /**
     * @param typeRailLocationCode $Code
     */
    public function __construct($Code)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeRailLocationCode $Code
     * @return \FilippoToso\Travelport\UProfile\RailLocation
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
