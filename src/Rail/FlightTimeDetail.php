<?php

namespace FilippoToso\Travelport\Rail;

class FlightTimeDetail
{

    /**
     * @var typeDaysOfOperation $DaysOfOperation
     */
    protected $DaysOfOperation = null;

    /**
     * @var Connection $Connection
     */
    protected $Connection = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var string $VendorCode
     */
    protected $VendorCode = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var typeAirport $Origin
     */
    protected $Origin = null;

    /**
     * @var typeAirport $Destination
     */
    protected $Destination = null;

    /**
     * @var time $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var time $ArrivalTime
     */
    protected $ArrivalTime = null;

    /**
     * @var int $StopCount
     */
    protected $StopCount = null;

    /**
     * @var typeEquipment $Equipment
     */
    protected $Equipment = null;

    /**
     * @var date $ScheduleStartDate
     */
    protected $ScheduleStartDate = null;

    /**
     * @var date $ScheduleEndDate
     */
    protected $ScheduleEndDate = null;

    /**
     * @var boolean $DisplayOption
     */
    protected $DisplayOption = null;

    /**
     * @var int $OnTimePerformance
     */
    protected $OnTimePerformance = null;

    /**
     * @var int $DayChange
     */
    protected $DayChange = null;

    /**
     * @var int $JourneyTime
     */
    protected $JourneyTime = null;

    /**
     * @var int $FlightTime
     */
    protected $FlightTime = null;

    /**
     * @var string $StartTerminal
     */
    protected $StartTerminal = null;

    /**
     * @var string $EndTerminal
     */
    protected $EndTerminal = null;

    /**
     * @var typeIATACode $FirstIntermediateStop
     */
    protected $FirstIntermediateStop = null;

    /**
     * @var typeIATACode $LastIntermediateStop
     */
    protected $LastIntermediateStop = null;

    /**
     * @var anonymous1009 $InsideAvailability
     */
    protected $InsideAvailability = null;

    /**
     * @var anonymous1010 $SecureSell
     */
    protected $SecureSell = null;

    /**
     * @var typeAvailabilitySource $AvailabilitySource
     */
    protected $AvailabilitySource = null;

    /**
     * @param Connection $Connection
     * @param typeRef $Key
     * @param string $VendorCode
     * @param typeFlightNumber $FlightNumber
     * @param typeAirport $Origin
     * @param typeAirport $Destination
     * @param time $DepartureTime
     * @param time $ArrivalTime
     * @param int $StopCount
     * @param typeEquipment $Equipment
     * @param date $ScheduleStartDate
     * @param date $ScheduleEndDate
     * @param boolean $DisplayOption
     * @param int $OnTimePerformance
     * @param int $DayChange
     * @param int $JourneyTime
     * @param int $FlightTime
     * @param string $StartTerminal
     * @param string $EndTerminal
     * @param typeIATACode $FirstIntermediateStop
     * @param typeIATACode $LastIntermediateStop
     * @param anonymous1009 $InsideAvailability
     * @param anonymous1010 $SecureSell
     * @param typeAvailabilitySource $AvailabilitySource
     */
    public function __construct($Connection = null, $Key = null, $VendorCode = null, $FlightNumber = null, $Origin = null, $Destination = null, $DepartureTime = null, $ArrivalTime = null, $StopCount = null, $Equipment = null, $ScheduleStartDate = null, $ScheduleEndDate = null, $DisplayOption = null, $OnTimePerformance = null, $DayChange = null, $JourneyTime = null, $FlightTime = null, $StartTerminal = null, $EndTerminal = null, $FirstIntermediateStop = null, $LastIntermediateStop = null, $InsideAvailability = null, $SecureSell = null, $AvailabilitySource = null)
    {
      $this->Connection = $Connection;
      $this->Key = $Key;
      $this->VendorCode = $VendorCode;
      $this->FlightNumber = $FlightNumber;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
      $this->StopCount = $StopCount;
      $this->Equipment = $Equipment;
      $this->ScheduleStartDate = $ScheduleStartDate;
      $this->ScheduleEndDate = $ScheduleEndDate;
      $this->DisplayOption = $DisplayOption;
      $this->OnTimePerformance = $OnTimePerformance;
      $this->DayChange = $DayChange;
      $this->JourneyTime = $JourneyTime;
      $this->FlightTime = $FlightTime;
      $this->StartTerminal = $StartTerminal;
      $this->EndTerminal = $EndTerminal;
      $this->FirstIntermediateStop = $FirstIntermediateStop;
      $this->LastIntermediateStop = $LastIntermediateStop;
      $this->InsideAvailability = $InsideAvailability;
      $this->SecureSell = $SecureSell;
      $this->AvailabilitySource = $AvailabilitySource;
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
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setDaysOfOperation($DaysOfOperation)
    {
      $this->DaysOfOperation = $DaysOfOperation;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getConnection()
    {
      return $this->Connection;
    }

    /**
     * @param Connection $Connection
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setConnection($Connection)
    {
      $this->Connection = $Connection;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param string $VendorCode
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
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
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeAirport $Origin
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeAirport
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeAirport $Destination
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
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
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
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
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getStopCount()
    {
      return $this->StopCount;
    }

    /**
     * @param int $StopCount
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setStopCount($StopCount)
    {
      $this->StopCount = $StopCount;
      return $this;
    }

    /**
     * @return typeEquipment
     */
    public function getEquipment()
    {
      return $this->Equipment;
    }

    /**
     * @param typeEquipment $Equipment
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setEquipment($Equipment)
    {
      $this->Equipment = $Equipment;
      return $this;
    }

    /**
     * @return date
     */
    public function getScheduleStartDate()
    {
      return $this->ScheduleStartDate;
    }

    /**
     * @param date $ScheduleStartDate
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setScheduleStartDate($ScheduleStartDate)
    {
      $this->ScheduleStartDate = $ScheduleStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getScheduleEndDate()
    {
      return $this->ScheduleEndDate;
    }

    /**
     * @param date $ScheduleEndDate
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setScheduleEndDate($ScheduleEndDate)
    {
      $this->ScheduleEndDate = $ScheduleEndDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayOption()
    {
      return $this->DisplayOption;
    }

    /**
     * @param boolean $DisplayOption
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setDisplayOption($DisplayOption)
    {
      $this->DisplayOption = $DisplayOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getOnTimePerformance()
    {
      return $this->OnTimePerformance;
    }

    /**
     * @param int $OnTimePerformance
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setOnTimePerformance($OnTimePerformance)
    {
      $this->OnTimePerformance = $OnTimePerformance;
      return $this;
    }

    /**
     * @return int
     */
    public function getDayChange()
    {
      return $this->DayChange;
    }

    /**
     * @param int $DayChange
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setDayChange($DayChange)
    {
      $this->DayChange = $DayChange;
      return $this;
    }

    /**
     * @return int
     */
    public function getJourneyTime()
    {
      return $this->JourneyTime;
    }

    /**
     * @param int $JourneyTime
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setJourneyTime($JourneyTime)
    {
      $this->JourneyTime = $JourneyTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getFlightTime()
    {
      return $this->FlightTime;
    }

    /**
     * @param int $FlightTime
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setFlightTime($FlightTime)
    {
      $this->FlightTime = $FlightTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartTerminal()
    {
      return $this->StartTerminal;
    }

    /**
     * @param string $StartTerminal
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setStartTerminal($StartTerminal)
    {
      $this->StartTerminal = $StartTerminal;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndTerminal()
    {
      return $this->EndTerminal;
    }

    /**
     * @param string $EndTerminal
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setEndTerminal($EndTerminal)
    {
      $this->EndTerminal = $EndTerminal;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getFirstIntermediateStop()
    {
      return $this->FirstIntermediateStop;
    }

    /**
     * @param typeIATACode $FirstIntermediateStop
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setFirstIntermediateStop($FirstIntermediateStop)
    {
      $this->FirstIntermediateStop = $FirstIntermediateStop;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getLastIntermediateStop()
    {
      return $this->LastIntermediateStop;
    }

    /**
     * @param typeIATACode $LastIntermediateStop
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setLastIntermediateStop($LastIntermediateStop)
    {
      $this->LastIntermediateStop = $LastIntermediateStop;
      return $this;
    }

    /**
     * @return anonymous1009
     */
    public function getInsideAvailability()
    {
      return $this->InsideAvailability;
    }

    /**
     * @param anonymous1009 $InsideAvailability
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setInsideAvailability($InsideAvailability)
    {
      $this->InsideAvailability = $InsideAvailability;
      return $this;
    }

    /**
     * @return anonymous1010
     */
    public function getSecureSell()
    {
      return $this->SecureSell;
    }

    /**
     * @param anonymous1010 $SecureSell
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setSecureSell($SecureSell)
    {
      $this->SecureSell = $SecureSell;
      return $this;
    }

    /**
     * @return typeAvailabilitySource
     */
    public function getAvailabilitySource()
    {
      return $this->AvailabilitySource;
    }

    /**
     * @param typeAvailabilitySource $AvailabilitySource
     * @return \FilippoToso\Travelport\Rail\FlightTimeDetail
     */
    public function setAvailabilitySource($AvailabilitySource)
    {
      $this->AvailabilitySource = $AvailabilitySource;
      return $this;
    }

}
