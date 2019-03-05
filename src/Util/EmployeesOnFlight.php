<?php

namespace FilippoToso\Travelport\Util;

class EmployeesOnFlight
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var typeLocatorCode $UniversalRecordLocator
     */
    protected $UniversalRecordLocator = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var date $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @param Name $Name
     * @param typeLocatorCode $UniversalRecordLocator
     * @param typeIATACode $Destination
     * @param typeIATACode $Origin
     * @param date $DepartureDate
     * @param string $FlightNumber
     * @param typeCarrier $Carrier
     */
    public function __construct($Name = null, $UniversalRecordLocator = null, $Destination = null, $Origin = null, $DepartureDate = null, $FlightNumber = null, $Carrier = null)
    {
      $this->Name = $Name;
      $this->UniversalRecordLocator = $UniversalRecordLocator;
      $this->Destination = $Destination;
      $this->Origin = $Origin;
      $this->DepartureDate = $DepartureDate;
      $this->FlightNumber = $FlightNumber;
      $this->Carrier = $Carrier;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\Util\EmployeesOnFlight
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalRecordLocator()
    {
      return $this->UniversalRecordLocator;
    }

    /**
     * @param typeLocatorCode $UniversalRecordLocator
     * @return \FilippoToso\Travelport\Util\EmployeesOnFlight
     */
    public function setUniversalRecordLocator($UniversalRecordLocator)
    {
      $this->UniversalRecordLocator = $UniversalRecordLocator;
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
     * @return \FilippoToso\Travelport\Util\EmployeesOnFlight
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
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
     * @return \FilippoToso\Travelport\Util\EmployeesOnFlight
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
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
     * @return \FilippoToso\Travelport\Util\EmployeesOnFlight
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
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
     * @return \FilippoToso\Travelport\Util\EmployeesOnFlight
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
     * @return \FilippoToso\Travelport\Util\EmployeesOnFlight
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

}
