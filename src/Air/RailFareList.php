<?php

namespace FilippoToso\Travelport\Air;

class RailFareList
{

    /**
     * @var RailFare $RailFare
     */
    protected $RailFare = null;

    /**
     * @param RailFare $RailFare
     */
    public function __construct($RailFare = null)
    {
      $this->RailFare = $RailFare;
    }

    /**
     * @return RailFare
     */
    public function getRailFare()
    {
      return $this->RailFare;
    }

    /**
     * @param RailFare $RailFare
     * @return \FilippoToso\Travelport\Air\RailFareList
     */
    public function setRailFare($RailFare)
    {
      $this->RailFare = $RailFare;
      return $this;
    }

}
