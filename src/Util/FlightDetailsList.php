<?php

namespace FilippoToso\Travelport\Util;

class FlightDetailsList
{

    /**
     * @var FlightDetails $FlightDetails
     */
    protected $FlightDetails = null;

    /**
     * @param FlightDetails $FlightDetails
     */
    public function __construct($FlightDetails = null)
    {
      $this->FlightDetails = $FlightDetails;
    }

    /**
     * @return FlightDetails
     */
    public function getFlightDetails()
    {
      return $this->FlightDetails;
    }

    /**
     * @param FlightDetails $FlightDetails
     * @return \FilippoToso\Travelport\Util\FlightDetailsList
     */
    public function setFlightDetails($FlightDetails)
    {
      $this->FlightDetails = $FlightDetails;
      return $this;
    }

}
