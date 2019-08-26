<?php

namespace FilippoToso\Travelport\GDSQueue;

class FlightOptionsList
{

    /**
     * @var FlightOption $FlightOption
     */
    protected $FlightOption = null;

    /**
     * @param FlightOption $FlightOption
     */
    public function __construct($FlightOption)
    {
      $this->FlightOption = $FlightOption;
    }

    /**
     * @return FlightOption
     */
    public function getFlightOption()
    {
      return $this->FlightOption;
    }

    /**
     * @param FlightOption $FlightOption
     * @return \FilippoToso\Travelport\GDSQueue\FlightOptionsList
     */
    public function setFlightOption($FlightOption)
    {
      $this->FlightOption = $FlightOption;
      return $this;
    }

}
