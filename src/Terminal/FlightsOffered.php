<?php

namespace FilippoToso\Travelport\Terminal;

class FlightsOffered
{

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var string $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var int $TravelOrder
     */
    protected $TravelOrder = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var typeClassOfService $ClassOfService
     */
    protected $ClassOfService = null;

    /**
     * @var boolean $StopOver
     */
    protected $StopOver = null;

    /**
     * @var boolean $Connection
     */
    protected $Connection = null;

    /**
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $DepartureTime
     * @param int $TravelOrder
     * @param typeCarrier $Carrier
     * @param typeFlightNumber $FlightNumber
     * @param typeClassOfService $ClassOfService
     * @param boolean $StopOver
     * @param boolean $Connection
     */
    public function __construct($Origin = null, $Destination = null, $DepartureTime = null, $TravelOrder = null, $Carrier = null, $FlightNumber = null, $ClassOfService = null, $StopOver = null, $Connection = null)
    {
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime;
      $this->TravelOrder = $TravelOrder;
      $this->Carrier = $Carrier;
      $this->FlightNumber = $FlightNumber;
      $this->ClassOfService = $ClassOfService;
      $this->StopOver = $StopOver;
      $this->Connection = $Connection;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Terminal\FlightsOffered
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Terminal\FlightsOffered
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param string $DepartureTime
     * @return \FilippoToso\Travelport\Terminal\FlightsOffered
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravelOrder()
    {
      return $this->TravelOrder;
    }

    /**
     * @param int $TravelOrder
     * @return \FilippoToso\Travelport\Terminal\FlightsOffered
     */
    public function setTravelOrder($TravelOrder)
    {
      $this->TravelOrder = $TravelOrder;
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
     * @return \FilippoToso\Travelport\Terminal\FlightsOffered
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
     * @return \FilippoToso\Travelport\Terminal\FlightsOffered
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return typeClassOfService
     */
    public function getClassOfService()
    {
      return $this->ClassOfService;
    }

    /**
     * @param typeClassOfService $ClassOfService
     * @return \FilippoToso\Travelport\Terminal\FlightsOffered
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStopOver()
    {
      return $this->StopOver;
    }

    /**
     * @param boolean $StopOver
     * @return \FilippoToso\Travelport\Terminal\FlightsOffered
     */
    public function setStopOver($StopOver)
    {
      $this->StopOver = $StopOver;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getConnection()
    {
      return $this->Connection;
    }

    /**
     * @param boolean $Connection
     * @return \FilippoToso\Travelport\Terminal\FlightsOffered
     */
    public function setConnection($Connection)
    {
      $this->Connection = $Connection;
      return $this;
    }

}
