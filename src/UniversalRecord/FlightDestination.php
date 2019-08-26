<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FlightDestination
{

    /**
     * @var Airport $Airport
     */
    protected $Airport = null;

    /**
     * @param Airport $Airport
     */
    public function __construct($Airport)
    {
      $this->Airport = $Airport;
    }

    /**
     * @return Airport
     */
    public function getAirport()
    {
      return $this->Airport;
    }

    /**
     * @param Airport $Airport
     * @return \FilippoToso\Travelport\UniversalRecord\FlightDestination
     */
    public function setAirport($Airport)
    {
      $this->Airport = $Airport;
      return $this;
    }

}
