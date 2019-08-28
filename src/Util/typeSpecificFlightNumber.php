<?php

namespace FilippoToso\Travelport\Util;

class typeSpecificFlightNumber
{

    /**
     * @var typeFlightNumber $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @param typeFlightNumber $FlightNumber
     */
    public function __construct($FlightNumber = null)
    {
      $this->FlightNumber = $FlightNumber;
    }

    /**
     * @return typeFlightNumber
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param typeFlightNumber $FlightNumber
     * @return \FilippoToso\Travelport\Util\typeSpecificFlightNumber
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

}
