<?php

namespace FilippoToso\Travelport\Rail;

class AirReservationCriteria
{

    /**
     * @var typeDateSpec $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var typeDateSpec $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var boolean $PassiveOnly
     */
    protected $PassiveOnly = null;

    /**
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $FlightNumber
     * @param typeCarrier $Carrier
     * @param boolean $PassiveOnly
     */
    public function __construct($Origin = null, $Destination = null, $FlightNumber = null, $Carrier = null, $PassiveOnly = null)
    {
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->FlightNumber = $FlightNumber;
      $this->Carrier = $Carrier;
      $this->PassiveOnly = $PassiveOnly;
    }

    /**
     * @return typeDateSpec
     */
    public function getDepartureDate()
    {
      return $this->DepartureDate;
    }

    /**
     * @param typeDateSpec $DepartureDate
     * @return \FilippoToso\Travelport\Rail\AirReservationCriteria
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
      return $this;
    }

    /**
     * @return typeDateSpec
     */
    public function getArrivalDate()
    {
      return $this->ArrivalDate;
    }

    /**
     * @param typeDateSpec $ArrivalDate
     * @return \FilippoToso\Travelport\Rail\AirReservationCriteria
     */
    public function setArrivalDate($ArrivalDate)
    {
      $this->ArrivalDate = $ArrivalDate;
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
     * @return \FilippoToso\Travelport\Rail\AirReservationCriteria
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
     * @return \FilippoToso\Travelport\Rail\AirReservationCriteria
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
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
     * @return \FilippoToso\Travelport\Rail\AirReservationCriteria
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
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
     * @return \FilippoToso\Travelport\Rail\AirReservationCriteria
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassiveOnly()
    {
      return $this->PassiveOnly;
    }

    /**
     * @param boolean $PassiveOnly
     * @return \FilippoToso\Travelport\Rail\AirReservationCriteria
     */
    public function setPassiveOnly($PassiveOnly)
    {
      $this->PassiveOnly = $PassiveOnly;
      return $this;
    }

}
