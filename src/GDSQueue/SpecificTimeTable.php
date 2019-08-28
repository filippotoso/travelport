<?php

namespace FilippoToso\Travelport\GDSQueue;

class SpecificTimeTable
{

    /**
     * @var FlightOrigin $FlightOrigin
     */
    protected $FlightOrigin = null;

    /**
     * @var FlightDestination $FlightDestination
     */
    protected $FlightDestination = null;

    /**
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @param string $StartDate
     * @param typeCarrier $Carrier
     * @param typeFlightNumber $FlightNumber
     */
    public function __construct($StartDate = null, $Carrier = null, $FlightNumber = null)
    {
      $this->StartDate = $StartDate;
      $this->Carrier = $Carrier;
      $this->FlightNumber = $FlightNumber;
    }

    /**
     * @return FlightOrigin
     */
    public function getFlightOrigin()
    {
      return $this->FlightOrigin;
    }

    /**
     * @param FlightOrigin $FlightOrigin
     * @return \FilippoToso\Travelport\GDSQueue\SpecificTimeTable
     */
    public function setFlightOrigin($FlightOrigin)
    {
      $this->FlightOrigin = $FlightOrigin;
      return $this;
    }

    /**
     * @return FlightDestination
     */
    public function getFlightDestination()
    {
      return $this->FlightDestination;
    }

    /**
     * @param FlightDestination $FlightDestination
     * @return \FilippoToso\Travelport\GDSQueue\SpecificTimeTable
     */
    public function setFlightDestination($FlightDestination)
    {
      $this->FlightDestination = $FlightDestination;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param string $StartDate
     * @return \FilippoToso\Travelport\GDSQueue\SpecificTimeTable
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\GDSQueue\SpecificTimeTable
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
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
     * @return \FilippoToso\Travelport\GDSQueue\SpecificTimeTable
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

}
