<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CruiseItinerary
{

    /**
     * @var date $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var time $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var date $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var time $ArrivalTime
     */
    protected $ArrivalTime = null;

    /**
     * @var date $BoardingDate
     */
    protected $BoardingDate = null;

    /**
     * @var time $BoardingTime
     */
    protected $BoardingTime = null;

    /**
     * @var typeStatusCode $Status
     */
    protected $Status = null;

    /**
     * @var StringLength1to20 $PortName
     */
    protected $PortName = null;

    /**
     * @var StringLength1 $PortIndicator
     */
    protected $PortIndicator = null;

    /**
     * @param date $DepartureDate
     * @param time $DepartureTime
     * @param date $ArrivalDate
     * @param time $ArrivalTime
     * @param date $BoardingDate
     * @param time $BoardingTime
     * @param typeStatusCode $Status
     * @param StringLength1to20 $PortName
     * @param StringLength1 $PortIndicator
     */
    public function __construct($DepartureDate = null, $DepartureTime = null, $ArrivalDate = null, $ArrivalTime = null, $BoardingDate = null, $BoardingTime = null, $Status = null, $PortName = null, $PortIndicator = null)
    {
      $this->DepartureDate = $DepartureDate;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalDate = $ArrivalDate;
      $this->ArrivalTime = $ArrivalTime;
      $this->BoardingDate = $BoardingDate;
      $this->BoardingTime = $BoardingTime;
      $this->Status = $Status;
      $this->PortName = $PortName;
      $this->PortIndicator = $PortIndicator;
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
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseItinerary
     */
    public function setDepartureDate($DepartureDate)
    {
      $this->DepartureDate = $DepartureDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param time $DepartureTime
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseItinerary
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return date
     */
    public function getArrivalDate()
    {
      return $this->ArrivalDate;
    }

    /**
     * @param date $ArrivalDate
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseItinerary
     */
    public function setArrivalDate($ArrivalDate)
    {
      $this->ArrivalDate = $ArrivalDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getArrivalTime()
    {
      return $this->ArrivalTime;
    }

    /**
     * @param time $ArrivalTime
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseItinerary
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

    /**
     * @return date
     */
    public function getBoardingDate()
    {
      return $this->BoardingDate;
    }

    /**
     * @param date $BoardingDate
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseItinerary
     */
    public function setBoardingDate($BoardingDate)
    {
      $this->BoardingDate = $BoardingDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getBoardingTime()
    {
      return $this->BoardingTime;
    }

    /**
     * @param time $BoardingTime
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseItinerary
     */
    public function setBoardingTime($BoardingTime)
    {
      $this->BoardingTime = $BoardingTime;
      return $this;
    }

    /**
     * @return typeStatusCode
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeStatusCode $Status
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseItinerary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return StringLength1to20
     */
    public function getPortName()
    {
      return $this->PortName;
    }

    /**
     * @param StringLength1to20 $PortName
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseItinerary
     */
    public function setPortName($PortName)
    {
      $this->PortName = $PortName;
      return $this;
    }

    /**
     * @return StringLength1
     */
    public function getPortIndicator()
    {
      return $this->PortIndicator;
    }

    /**
     * @param StringLength1 $PortIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\CruiseItinerary
     */
    public function setPortIndicator($PortIndicator)
    {
      $this->PortIndicator = $PortIndicator;
      return $this;
    }

}
