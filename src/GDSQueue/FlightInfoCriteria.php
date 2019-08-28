<?php

namespace FilippoToso\Travelport\GDSQueue;

class FlightInfoCriteria
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var date $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var typeClassOfService $ClassOfService
     */
    protected $ClassOfService = null;

    /**
     * @param typeRef $Key
     * @param typeCarrier $Carrier
     * @param typeFlightNumber $FlightNumber
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param date $DepartureDate
     * @param typeClassOfService $ClassOfService
     */
    public function __construct($Key = null, $Carrier = null, $FlightNumber = null, $Origin = null, $Destination = null, $DepartureDate = null, $ClassOfService = null)
    {
      $this->Key = $Key;
      $this->Carrier = $Carrier;
      $this->FlightNumber = $FlightNumber;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureDate = $DepartureDate;
      $this->ClassOfService = $ClassOfService;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\GDSQueue\FlightInfoCriteria
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\GDSQueue\FlightInfoCriteria
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
     * @return \FilippoToso\Travelport\GDSQueue\FlightInfoCriteria
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
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
     * @return \FilippoToso\Travelport\GDSQueue\FlightInfoCriteria
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
     * @return \FilippoToso\Travelport\GDSQueue\FlightInfoCriteria
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
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
     * @return \FilippoToso\Travelport\GDSQueue\FlightInfoCriteria
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
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
     * @return \FilippoToso\Travelport\GDSQueue\FlightInfoCriteria
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
      return $this;
    }

}
