<?php

namespace FilippoToso\Travelport\Air;

class FlightDetails
{

    /**
     * @var Connection $Connection
     */
    protected $Connection = null;

    /**
     * @var typeMealService $Meals
     */
    protected $Meals = null;

    /**
     * @var string $InFlightServices
     */
    protected $InFlightServices = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeEquipment $Equipment
     */
    protected $Equipment = null;

    /**
     * @var int $OnTimePerformance
     */
    protected $OnTimePerformance = null;

    /**
     * @var string $OriginTerminal
     */
    protected $OriginTerminal = null;

    /**
     * @var string $DestinationTerminal
     */
    protected $DestinationTerminal = null;

    /**
     * @var int $GroundTime
     */
    protected $GroundTime = null;

    /**
     * @var boolean $AutomatedCheckin
     */
    protected $AutomatedCheckin = null;

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
     * @var string $ArrivalTime
     */
    protected $ArrivalTime = null;

    /**
     * @var int $FlightTime
     */
    protected $FlightTime = null;

    /**
     * @var int $TravelTime
     */
    protected $TravelTime = null;

    /**
     * @var int $Distance
     */
    protected $Distance = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param Connection $Connection
     * @param typeMealService $Meals
     * @param string $InFlightServices
     * @param typeRef $Key
     * @param typeEquipment $Equipment
     * @param int $OnTimePerformance
     * @param string $OriginTerminal
     * @param string $DestinationTerminal
     * @param int $GroundTime
     * @param boolean $AutomatedCheckin
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $DepartureTime
     * @param string $ArrivalTime
     * @param int $FlightTime
     * @param int $TravelTime
     * @param int $Distance
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Connection = null, $Meals = null, $InFlightServices = null, $Key = null, $Equipment = null, $OnTimePerformance = null, $OriginTerminal = null, $DestinationTerminal = null, $GroundTime = null, $AutomatedCheckin = null, $Origin = null, $Destination = null, $DepartureTime = null, $ArrivalTime = null, $FlightTime = null, $TravelTime = null, $Distance = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Connection = $Connection;
      $this->Meals = $Meals;
      $this->InFlightServices = $InFlightServices;
      $this->Key = $Key;
      $this->Equipment = $Equipment;
      $this->OnTimePerformance = $OnTimePerformance;
      $this->OriginTerminal = $OriginTerminal;
      $this->DestinationTerminal = $DestinationTerminal;
      $this->GroundTime = $GroundTime;
      $this->AutomatedCheckin = $AutomatedCheckin;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
      $this->FlightTime = $FlightTime;
      $this->TravelTime = $TravelTime;
      $this->Distance = $Distance;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setConnection($Connection)
    {
      $this->Connection = $Connection;
      return $this;
    }

    /**
     * @return typeMealService
     */
    public function getMeals()
    {
      return $this->Meals;
    }

    /**
     * @param typeMealService $Meals
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setMeals($Meals)
    {
      $this->Meals = $Meals;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFlightServices()
    {
      return $this->InFlightServices;
    }

    /**
     * @param string $InFlightServices
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setInFlightServices($InFlightServices)
    {
      $this->InFlightServices = $InFlightServices;
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
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setEquipment($Equipment)
    {
      $this->Equipment = $Equipment;
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
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setOnTimePerformance($OnTimePerformance)
    {
      $this->OnTimePerformance = $OnTimePerformance;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginTerminal()
    {
      return $this->OriginTerminal;
    }

    /**
     * @param string $OriginTerminal
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setOriginTerminal($OriginTerminal)
    {
      $this->OriginTerminal = $OriginTerminal;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationTerminal()
    {
      return $this->DestinationTerminal;
    }

    /**
     * @param string $DestinationTerminal
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setDestinationTerminal($DestinationTerminal)
    {
      $this->DestinationTerminal = $DestinationTerminal;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroundTime()
    {
      return $this->GroundTime;
    }

    /**
     * @param int $GroundTime
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setGroundTime($GroundTime)
    {
      $this->GroundTime = $GroundTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutomatedCheckin()
    {
      return $this->AutomatedCheckin;
    }

    /**
     * @param boolean $AutomatedCheckin
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setAutomatedCheckin($AutomatedCheckin)
    {
      $this->AutomatedCheckin = $AutomatedCheckin;
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
     * @return \FilippoToso\Travelport\Air\FlightDetails
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
     * @return \FilippoToso\Travelport\Air\FlightDetails
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
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getArrivalTime()
    {
      return $this->ArrivalTime;
    }

    /**
     * @param string $ArrivalTime
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
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
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setFlightTime($FlightTime)
    {
      $this->FlightTime = $FlightTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravelTime()
    {
      return $this->TravelTime;
    }

    /**
     * @param int $TravelTime
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param int $Distance
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Air\FlightDetails
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
