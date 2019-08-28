<?php

namespace FilippoToso\Travelport\UniversalRecord;

class GeneralTimeTable
{

    /**
     * @var typeDaysOfOperation $DaysOfOperation
     */
    protected $DaysOfOperation = null;

    /**
     * @var typeLocation $FlightOrigin
     */
    protected $FlightOrigin = null;

    /**
     * @var typeLocation $FlightDestination
     */
    protected $FlightDestination = null;

    /**
     * @var CarrierList $CarrierList
     */
    protected $CarrierList = null;

    /**
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
     * @var time $StartTime
     */
    protected $StartTime = null;

    /**
     * @var time $EndTime
     */
    protected $EndTime = null;

    /**
     * @var boolean $IncludeConnection
     */
    protected $IncludeConnection = null;

    /**
     * @param typeLocation $FlightOrigin
     * @param typeLocation $FlightDestination
     * @param CarrierList $CarrierList
     * @param string $StartDate
     * @param string $EndDate
     * @param time $StartTime
     * @param time $EndTime
     * @param boolean $IncludeConnection
     */
    public function __construct($FlightOrigin = null, $FlightDestination = null, $CarrierList = null, $StartDate = null, $EndDate = null, $StartTime = null, $EndTime = null, $IncludeConnection = null)
    {
      $this->FlightOrigin = $FlightOrigin;
      $this->FlightDestination = $FlightDestination;
      $this->CarrierList = $CarrierList;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->StartTime = $StartTime;
      $this->EndTime = $EndTime;
      $this->IncludeConnection = $IncludeConnection;
    }

    /**
     * @return typeDaysOfOperation
     */
    public function getDaysOfOperation()
    {
      return $this->DaysOfOperation;
    }

    /**
     * @param typeDaysOfOperation $DaysOfOperation
     * @return \FilippoToso\Travelport\UniversalRecord\GeneralTimeTable
     */
    public function setDaysOfOperation($DaysOfOperation)
    {
      $this->DaysOfOperation = $DaysOfOperation;
      return $this;
    }

    /**
     * @return typeLocation
     */
    public function getFlightOrigin()
    {
      return $this->FlightOrigin;
    }

    /**
     * @param typeLocation $FlightOrigin
     * @return \FilippoToso\Travelport\UniversalRecord\GeneralTimeTable
     */
    public function setFlightOrigin($FlightOrigin)
    {
      $this->FlightOrigin = $FlightOrigin;
      return $this;
    }

    /**
     * @return typeLocation
     */
    public function getFlightDestination()
    {
      return $this->FlightDestination;
    }

    /**
     * @param typeLocation $FlightDestination
     * @return \FilippoToso\Travelport\UniversalRecord\GeneralTimeTable
     */
    public function setFlightDestination($FlightDestination)
    {
      $this->FlightDestination = $FlightDestination;
      return $this;
    }

    /**
     * @return CarrierList
     */
    public function getCarrierList()
    {
      return $this->CarrierList;
    }

    /**
     * @param CarrierList $CarrierList
     * @return \FilippoToso\Travelport\UniversalRecord\GeneralTimeTable
     */
    public function setCarrierList($CarrierList)
    {
      $this->CarrierList = $CarrierList;
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
     * @return \FilippoToso\Travelport\UniversalRecord\GeneralTimeTable
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param string $EndDate
     * @return \FilippoToso\Travelport\UniversalRecord\GeneralTimeTable
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
      return $this;
    }

    /**
     * @return time
     */
    public function getStartTime()
    {
      return $this->StartTime;
    }

    /**
     * @param time $StartTime
     * @return \FilippoToso\Travelport\UniversalRecord\GeneralTimeTable
     */
    public function setStartTime($StartTime)
    {
      $this->StartTime = $StartTime;
      return $this;
    }

    /**
     * @return time
     */
    public function getEndTime()
    {
      return $this->EndTime;
    }

    /**
     * @param time $EndTime
     * @return \FilippoToso\Travelport\UniversalRecord\GeneralTimeTable
     */
    public function setEndTime($EndTime)
    {
      $this->EndTime = $EndTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeConnection()
    {
      return $this->IncludeConnection;
    }

    /**
     * @param boolean $IncludeConnection
     * @return \FilippoToso\Travelport\UniversalRecord\GeneralTimeTable
     */
    public function setIncludeConnection($IncludeConnection)
    {
      $this->IncludeConnection = $IncludeConnection;
      return $this;
    }

}
