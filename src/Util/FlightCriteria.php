<?php

namespace FilippoToso\Travelport\Util;

class FlightCriteria
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var date $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @param string $_
     * @param typeCarrier $Carrier
     * @param string $FlightNumber
     * @param date $DepartureDate
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     */
    public function __construct($_ = null, $Carrier = null, $FlightNumber = null, $DepartureDate = null, $Origin = null, $Destination = null)
    {
      $this->_ = $_;
      $this->Carrier = $Carrier;
      $this->FlightNumber = $FlightNumber;
      $this->DepartureDate = $DepartureDate;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Util\FlightCriteria
     */
    public function set_($_)
    {
      $this->_ = $_;
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
     * @return \FilippoToso\Travelport\Util\FlightCriteria
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param string $FlightNumber
     * @return \FilippoToso\Travelport\Util\FlightCriteria
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getDepartureDate()
    {
      return $this->DepartureDate;
    }

    /**
     * @param date $DepartureDate
     * @return \FilippoToso\Travelport\Util\FlightCriteria
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
      return $this;
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
     * @return \FilippoToso\Travelport\Util\FlightCriteria
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
     * @return \FilippoToso\Travelport\Util\FlightCriteria
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

}
