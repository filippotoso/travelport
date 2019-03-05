<?php

namespace FilippoToso\Travelport\Rail;

class FlightInfoDetail
{

    /**
     * @var CodeshareInfo $CodeshareInfo
     */
    protected $CodeshareInfo = null;

    /**
     * @var typeMealService $Meals
     */
    protected $Meals = null;

    /**
     * @var string $InFlightServices
     */
    protected $InFlightServices = null;

    /**
     * @var Variance $Variance
     */
    protected $Variance = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var string $ScheduledDepartureTime
     */
    protected $ScheduledDepartureTime = null;

    /**
     * @var string $ScheduledArrivalTime
     */
    protected $ScheduledArrivalTime = null;

    /**
     * @var int $TravelTime
     */
    protected $TravelTime = null;

    /**
     * @var typeEticketability $ETicketability
     */
    protected $ETicketability = null;

    /**
     * @var typeEquipment $Equipment
     */
    protected $Equipment = null;

    /**
     * @var string $OriginTerminal
     */
    protected $OriginTerminal = null;

    /**
     * @var anonymous994 $OriginGate
     */
    protected $OriginGate = null;

    /**
     * @var string $DestinationTerminal
     */
    protected $DestinationTerminal = null;

    /**
     * @var anonymous995 $DestinationGate
     */
    protected $DestinationGate = null;

    /**
     * @var boolean $AutomatedCheckin
     */
    protected $AutomatedCheckin = null;

    /**
     * @param CodeshareInfo $CodeshareInfo
     * @param typeMealService $Meals
     * @param string $InFlightServices
     * @param Variance $Variance
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $ScheduledDepartureTime
     * @param string $ScheduledArrivalTime
     * @param int $TravelTime
     * @param typeEticketability $ETicketability
     * @param typeEquipment $Equipment
     * @param string $OriginTerminal
     * @param anonymous994 $OriginGate
     * @param string $DestinationTerminal
     * @param anonymous995 $DestinationGate
     * @param boolean $AutomatedCheckin
     */
    public function __construct($CodeshareInfo = null, $Meals = null, $InFlightServices = null, $Variance = null, $Origin = null, $Destination = null, $ScheduledDepartureTime = null, $ScheduledArrivalTime = null, $TravelTime = null, $ETicketability = null, $Equipment = null, $OriginTerminal = null, $OriginGate = null, $DestinationTerminal = null, $DestinationGate = null, $AutomatedCheckin = null)
    {
      $this->CodeshareInfo = $CodeshareInfo;
      $this->Meals = $Meals;
      $this->InFlightServices = $InFlightServices;
      $this->Variance = $Variance;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->ScheduledDepartureTime = $ScheduledDepartureTime;
      $this->ScheduledArrivalTime = $ScheduledArrivalTime;
      $this->TravelTime = $TravelTime;
      $this->ETicketability = $ETicketability;
      $this->Equipment = $Equipment;
      $this->OriginTerminal = $OriginTerminal;
      $this->OriginGate = $OriginGate;
      $this->DestinationTerminal = $DestinationTerminal;
      $this->DestinationGate = $DestinationGate;
      $this->AutomatedCheckin = $AutomatedCheckin;
    }

    /**
     * @return CodeshareInfo
     */
    public function getCodeshareInfo()
    {
      return $this->CodeshareInfo;
    }

    /**
     * @param CodeshareInfo $CodeshareInfo
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setCodeshareInfo($CodeshareInfo)
    {
      $this->CodeshareInfo = $CodeshareInfo;
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
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
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
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setInFlightServices($InFlightServices)
    {
      $this->InFlightServices = $InFlightServices;
      return $this;
    }

    /**
     * @return Variance
     */
    public function getVariance()
    {
      return $this->Variance;
    }

    /**
     * @param Variance $Variance
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setVariance($Variance)
    {
      $this->Variance = $Variance;
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
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
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
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getScheduledDepartureTime()
    {
      return $this->ScheduledDepartureTime;
    }

    /**
     * @param string $ScheduledDepartureTime
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setScheduledDepartureTime($ScheduledDepartureTime)
    {
      $this->ScheduledDepartureTime = $ScheduledDepartureTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getScheduledArrivalTime()
    {
      return $this->ScheduledArrivalTime;
    }

    /**
     * @param string $ScheduledArrivalTime
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setScheduledArrivalTime($ScheduledArrivalTime)
    {
      $this->ScheduledArrivalTime = $ScheduledArrivalTime;
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
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

    /**
     * @return typeEticketability
     */
    public function getETicketability()
    {
      return $this->ETicketability;
    }

    /**
     * @param typeEticketability $ETicketability
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setETicketability($ETicketability)
    {
      $this->ETicketability = $ETicketability;
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
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setEquipment($Equipment)
    {
      $this->Equipment = $Equipment;
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
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setOriginTerminal($OriginTerminal)
    {
      $this->OriginTerminal = $OriginTerminal;
      return $this;
    }

    /**
     * @return anonymous994
     */
    public function getOriginGate()
    {
      return $this->OriginGate;
    }

    /**
     * @param anonymous994 $OriginGate
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setOriginGate($OriginGate)
    {
      $this->OriginGate = $OriginGate;
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
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setDestinationTerminal($DestinationTerminal)
    {
      $this->DestinationTerminal = $DestinationTerminal;
      return $this;
    }

    /**
     * @return anonymous995
     */
    public function getDestinationGate()
    {
      return $this->DestinationGate;
    }

    /**
     * @param anonymous995 $DestinationGate
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setDestinationGate($DestinationGate)
    {
      $this->DestinationGate = $DestinationGate;
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
     * @return \FilippoToso\Travelport\Rail\FlightInfoDetail
     */
    public function setAutomatedCheckin($AutomatedCheckin)
    {
      $this->AutomatedCheckin = $AutomatedCheckin;
      return $this;
    }

}
