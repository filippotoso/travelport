<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeBaseAirSegment extends Segment
{

    /**
     * @var SponsoredFltInfo $SponsoredFltInfo
     */
    protected $SponsoredFltInfo = null;

    /**
     * @var CodeshareInfo $CodeshareInfo
     */
    protected $CodeshareInfo = null;

    /**
     * @var AirAvailInfo $AirAvailInfo
     */
    protected $AirAvailInfo = null;

    /**
     * @var FlightDetails $FlightDetails
     */
    protected $FlightDetails = null;

    /**
     * @var FlightDetailsRef $FlightDetailsRef
     */
    protected $FlightDetailsRef = null;

    /**
     * @var AlternateLocationDistanceRef $AlternateLocationDistanceRef
     */
    protected $AlternateLocationDistanceRef = null;

    /**
     * @var Connection $Connection
     */
    protected $Connection = null;

    /**
     * @var string $SellMessage
     */
    protected $SellMessage = null;

    /**
     * @var RailCoachDetails $RailCoachDetails
     */
    protected $RailCoachDetails = null;

    /**
     * @var boolean $OpenSegment
     */
    protected $OpenSegment = null;

    /**
     * @var int $Group
     */
    protected $Group = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var typeClassOfService $ClassOfService
     */
    protected $ClassOfService = null;

    /**
     * @var typeEticketability $ETicketability
     */
    protected $ETicketability = null;

    /**
     * @var typeEquipment $Equipment
     */
    protected $Equipment = null;

    /**
     * @var int $MarriageGroup
     */
    protected $MarriageGroup = null;

    /**
     * @var int $NumberOfStops
     */
    protected $NumberOfStops = null;

    /**
     * @var boolean $Seamless
     */
    protected $Seamless = null;

    /**
     * @var boolean $ChangeOfPlane
     */
    protected $ChangeOfPlane = null;

    /**
     * @var string $GuaranteedPaymentCarrier
     */
    protected $GuaranteedPaymentCarrier = null;

    /**
     * @var string $HostTokenRef
     */
    protected $HostTokenRef = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $PassiveProviderReservationInfoRef
     */
    protected $PassiveProviderReservationInfoRef = null;

    /**
     * @var boolean $OptionalServicesIndicator
     */
    protected $OptionalServicesIndicator = null;

    /**
     * @var typeAvailabilitySource $AvailabilitySource
     */
    protected $AvailabilitySource = null;

    /**
     * @var string $APISRequirementsRef
     */
    protected $APISRequirementsRef = null;

    /**
     * @var boolean $BlackListed
     */
    protected $BlackListed = null;

    /**
     * @var string $OperationalStatus
     */
    protected $OperationalStatus = null;

    /**
     * @var anonymous985 $NumberInParty
     */
    protected $NumberInParty = null;

    /**
     * @var anonymous986 $RailCoachNumber
     */
    protected $RailCoachNumber = null;

    /**
     * @var date $BookingDate
     */
    protected $BookingDate = null;

    /**
     * @var boolean $FlownSegment
     */
    protected $FlownSegment = null;

    /**
     * @var boolean $ScheduleChange
     */
    protected $ScheduleChange = null;

    /**
     * @var string $BrandIndicator
     */
    protected $BrandIndicator = null;

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
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var string $ParticipantLevel
     */
    protected $ParticipantLevel = null;

    /**
     * @var boolean $LinkAvailability
     */
    protected $LinkAvailability = null;

    /**
     * @var string $PolledAvailabilityOption
     */
    protected $PolledAvailabilityOption = null;

    /**
     * @var string $AvailabilityDisplayType
     */
    protected $AvailabilityDisplayType = null;

    /**
     * @param SegmentRemark $SegmentRemark
     * @param typeRef $Key
     * @param string $Status
     * @param boolean $Passive
     * @param int $TravelOrder
     * @param anonymous198 $ProviderSegmentOrder
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param SponsoredFltInfo $SponsoredFltInfo
     * @param CodeshareInfo $CodeshareInfo
     * @param AirAvailInfo $AirAvailInfo
     * @param FlightDetails $FlightDetails
     * @param FlightDetailsRef $FlightDetailsRef
     * @param AlternateLocationDistanceRef $AlternateLocationDistanceRef
     * @param Connection $Connection
     * @param string $SellMessage
     * @param RailCoachDetails $RailCoachDetails
     * @param boolean $OpenSegment
     * @param int $Group
     * @param typeCarrier $Carrier
     * @param string $CabinClass
     * @param typeFlightNumber $FlightNumber
     * @param typeClassOfService $ClassOfService
     * @param typeEticketability $ETicketability
     * @param typeEquipment $Equipment
     * @param int $MarriageGroup
     * @param int $NumberOfStops
     * @param boolean $Seamless
     * @param boolean $ChangeOfPlane
     * @param string $GuaranteedPaymentCarrier
     * @param string $HostTokenRef
     * @param typeRef $ProviderReservationInfoRef
     * @param typeRef $PassiveProviderReservationInfoRef
     * @param boolean $OptionalServicesIndicator
     * @param typeAvailabilitySource $AvailabilitySource
     * @param string $APISRequirementsRef
     * @param boolean $BlackListed
     * @param string $OperationalStatus
     * @param anonymous985 $NumberInParty
     * @param anonymous986 $RailCoachNumber
     * @param date $BookingDate
     * @param boolean $FlownSegment
     * @param boolean $ScheduleChange
     * @param string $BrandIndicator
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $DepartureTime
     * @param string $ArrivalTime
     * @param int $FlightTime
     * @param int $TravelTime
     * @param int $Distance
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param string $ParticipantLevel
     * @param boolean $LinkAvailability
     * @param string $PolledAvailabilityOption
     * @param string $AvailabilityDisplayType
     */
    public function __construct($SegmentRemark = null, $Key = null, $Status = null, $Passive = null, $TravelOrder = null, $ProviderSegmentOrder = null, $ElStat = null, $KeyOverride = null, $SponsoredFltInfo = null, $CodeshareInfo = null, $AirAvailInfo = null, $FlightDetails = null, $FlightDetailsRef = null, $AlternateLocationDistanceRef = null, $Connection = null, $SellMessage = null, $RailCoachDetails = null, $OpenSegment = null, $Group = null, $Carrier = null, $CabinClass = null, $FlightNumber = null, $ClassOfService = null, $ETicketability = null, $Equipment = null, $MarriageGroup = null, $NumberOfStops = null, $Seamless = null, $ChangeOfPlane = null, $GuaranteedPaymentCarrier = null, $HostTokenRef = null, $ProviderReservationInfoRef = null, $PassiveProviderReservationInfoRef = null, $OptionalServicesIndicator = null, $AvailabilitySource = null, $APISRequirementsRef = null, $BlackListed = null, $OperationalStatus = null, $NumberInParty = null, $RailCoachNumber = null, $BookingDate = null, $FlownSegment = null, $ScheduleChange = null, $BrandIndicator = null, $Origin = null, $Destination = null, $DepartureTime = null, $ArrivalTime = null, $FlightTime = null, $TravelTime = null, $Distance = null, $ProviderCode = null, $SupplierCode = null, $ParticipantLevel = null, $LinkAvailability = null, $PolledAvailabilityOption = null, $AvailabilityDisplayType = null)
    {
      parent::__construct($SegmentRemark, $Key, $Status, $Passive, $TravelOrder, $ProviderSegmentOrder, $ElStat, $KeyOverride);
      $this->SponsoredFltInfo = $SponsoredFltInfo;
      $this->CodeshareInfo = $CodeshareInfo;
      $this->AirAvailInfo = $AirAvailInfo;
      $this->FlightDetails = $FlightDetails;
      $this->FlightDetailsRef = $FlightDetailsRef;
      $this->AlternateLocationDistanceRef = $AlternateLocationDistanceRef;
      $this->Connection = $Connection;
      $this->SellMessage = $SellMessage;
      $this->RailCoachDetails = $RailCoachDetails;
      $this->OpenSegment = $OpenSegment;
      $this->Group = $Group;
      $this->Carrier = $Carrier;
      $this->CabinClass = $CabinClass;
      $this->FlightNumber = $FlightNumber;
      $this->ClassOfService = $ClassOfService;
      $this->ETicketability = $ETicketability;
      $this->Equipment = $Equipment;
      $this->MarriageGroup = $MarriageGroup;
      $this->NumberOfStops = $NumberOfStops;
      $this->Seamless = $Seamless;
      $this->ChangeOfPlane = $ChangeOfPlane;
      $this->GuaranteedPaymentCarrier = $GuaranteedPaymentCarrier;
      $this->HostTokenRef = $HostTokenRef;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
      $this->OptionalServicesIndicator = $OptionalServicesIndicator;
      $this->AvailabilitySource = $AvailabilitySource;
      $this->APISRequirementsRef = $APISRequirementsRef;
      $this->BlackListed = $BlackListed;
      $this->OperationalStatus = $OperationalStatus;
      $this->NumberInParty = $NumberInParty;
      $this->RailCoachNumber = $RailCoachNumber;
      $this->BookingDate = $BookingDate;
      $this->FlownSegment = $FlownSegment;
      $this->ScheduleChange = $ScheduleChange;
      $this->BrandIndicator = $BrandIndicator;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
      $this->FlightTime = $FlightTime;
      $this->TravelTime = $TravelTime;
      $this->Distance = $Distance;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->ParticipantLevel = $ParticipantLevel;
      $this->LinkAvailability = $LinkAvailability;
      $this->PolledAvailabilityOption = $PolledAvailabilityOption;
      $this->AvailabilityDisplayType = $AvailabilityDisplayType;
    }

    /**
     * @return SponsoredFltInfo
     */
    public function getSponsoredFltInfo()
    {
      return $this->SponsoredFltInfo;
    }

    /**
     * @param SponsoredFltInfo $SponsoredFltInfo
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setSponsoredFltInfo($SponsoredFltInfo)
    {
      $this->SponsoredFltInfo = $SponsoredFltInfo;
      return $this;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setCodeshareInfo($CodeshareInfo)
    {
      $this->CodeshareInfo = $CodeshareInfo;
      return $this;
    }

    /**
     * @return AirAvailInfo
     */
    public function getAirAvailInfo()
    {
      return $this->AirAvailInfo;
    }

    /**
     * @param AirAvailInfo $AirAvailInfo
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setAirAvailInfo($AirAvailInfo)
    {
      $this->AirAvailInfo = $AirAvailInfo;
      return $this;
    }

    /**
     * @return FlightDetails
     */
    public function getFlightDetails()
    {
      return $this->FlightDetails;
    }

    /**
     * @param FlightDetails $FlightDetails
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setFlightDetails($FlightDetails)
    {
      $this->FlightDetails = $FlightDetails;
      return $this;
    }

    /**
     * @return FlightDetailsRef
     */
    public function getFlightDetailsRef()
    {
      return $this->FlightDetailsRef;
    }

    /**
     * @param FlightDetailsRef $FlightDetailsRef
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setFlightDetailsRef($FlightDetailsRef)
    {
      $this->FlightDetailsRef = $FlightDetailsRef;
      return $this;
    }

    /**
     * @return AlternateLocationDistanceRef
     */
    public function getAlternateLocationDistanceRef()
    {
      return $this->AlternateLocationDistanceRef;
    }

    /**
     * @param AlternateLocationDistanceRef $AlternateLocationDistanceRef
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setAlternateLocationDistanceRef($AlternateLocationDistanceRef)
    {
      $this->AlternateLocationDistanceRef = $AlternateLocationDistanceRef;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setConnection($Connection)
    {
      $this->Connection = $Connection;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellMessage()
    {
      return $this->SellMessage;
    }

    /**
     * @param string $SellMessage
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setSellMessage($SellMessage)
    {
      $this->SellMessage = $SellMessage;
      return $this;
    }

    /**
     * @return RailCoachDetails
     */
    public function getRailCoachDetails()
    {
      return $this->RailCoachDetails;
    }

    /**
     * @param RailCoachDetails $RailCoachDetails
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setRailCoachDetails($RailCoachDetails)
    {
      $this->RailCoachDetails = $RailCoachDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOpenSegment()
    {
      return $this->OpenSegment;
    }

    /**
     * @param boolean $OpenSegment
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setOpenSegment($OpenSegment)
    {
      $this->OpenSegment = $OpenSegment;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroup()
    {
      return $this->Group;
    }

    /**
     * @param int $Group
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setGroup($Group)
    {
      $this->Group = $Group;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param string $CabinClass
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setEquipment($Equipment)
    {
      $this->Equipment = $Equipment;
      return $this;
    }

    /**
     * @return int
     */
    public function getMarriageGroup()
    {
      return $this->MarriageGroup;
    }

    /**
     * @param int $MarriageGroup
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setMarriageGroup($MarriageGroup)
    {
      $this->MarriageGroup = $MarriageGroup;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfStops()
    {
      return $this->NumberOfStops;
    }

    /**
     * @param int $NumberOfStops
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setNumberOfStops($NumberOfStops)
    {
      $this->NumberOfStops = $NumberOfStops;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSeamless()
    {
      return $this->Seamless;
    }

    /**
     * @param boolean $Seamless
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setSeamless($Seamless)
    {
      $this->Seamless = $Seamless;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChangeOfPlane()
    {
      return $this->ChangeOfPlane;
    }

    /**
     * @param boolean $ChangeOfPlane
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setChangeOfPlane($ChangeOfPlane)
    {
      $this->ChangeOfPlane = $ChangeOfPlane;
      return $this;
    }

    /**
     * @return string
     */
    public function getGuaranteedPaymentCarrier()
    {
      return $this->GuaranteedPaymentCarrier;
    }

    /**
     * @param string $GuaranteedPaymentCarrier
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setGuaranteedPaymentCarrier($GuaranteedPaymentCarrier)
    {
      $this->GuaranteedPaymentCarrier = $GuaranteedPaymentCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getHostTokenRef()
    {
      return $this->HostTokenRef;
    }

    /**
     * @param string $HostTokenRef
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setHostTokenRef($HostTokenRef)
    {
      $this->HostTokenRef = $HostTokenRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPassiveProviderReservationInfoRef()
    {
      return $this->PassiveProviderReservationInfoRef;
    }

    /**
     * @param typeRef $PassiveProviderReservationInfoRef
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setPassiveProviderReservationInfoRef($PassiveProviderReservationInfoRef)
    {
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOptionalServicesIndicator()
    {
      return $this->OptionalServicesIndicator;
    }

    /**
     * @param boolean $OptionalServicesIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setOptionalServicesIndicator($OptionalServicesIndicator)
    {
      $this->OptionalServicesIndicator = $OptionalServicesIndicator;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setAvailabilitySource($AvailabilitySource)
    {
      $this->AvailabilitySource = $AvailabilitySource;
      return $this;
    }

    /**
     * @return string
     */
    public function getAPISRequirementsRef()
    {
      return $this->APISRequirementsRef;
    }

    /**
     * @param string $APISRequirementsRef
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setAPISRequirementsRef($APISRequirementsRef)
    {
      $this->APISRequirementsRef = $APISRequirementsRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBlackListed()
    {
      return $this->BlackListed;
    }

    /**
     * @param boolean $BlackListed
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setBlackListed($BlackListed)
    {
      $this->BlackListed = $BlackListed;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationalStatus()
    {
      return $this->OperationalStatus;
    }

    /**
     * @param string $OperationalStatus
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setOperationalStatus($OperationalStatus)
    {
      $this->OperationalStatus = $OperationalStatus;
      return $this;
    }

    /**
     * @return anonymous985
     */
    public function getNumberInParty()
    {
      return $this->NumberInParty;
    }

    /**
     * @param anonymous985 $NumberInParty
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setNumberInParty($NumberInParty)
    {
      $this->NumberInParty = $NumberInParty;
      return $this;
    }

    /**
     * @return anonymous986
     */
    public function getRailCoachNumber()
    {
      return $this->RailCoachNumber;
    }

    /**
     * @param anonymous986 $RailCoachNumber
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setRailCoachNumber($RailCoachNumber)
    {
      $this->RailCoachNumber = $RailCoachNumber;
      return $this;
    }

    /**
     * @return date
     */
    public function getBookingDate()
    {
      return $this->BookingDate;
    }

    /**
     * @param date $BookingDate
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setBookingDate($BookingDate)
    {
      $this->BookingDate = $BookingDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFlownSegment()
    {
      return $this->FlownSegment;
    }

    /**
     * @param boolean $FlownSegment
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setFlownSegment($FlownSegment)
    {
      $this->FlownSegment = $FlownSegment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getScheduleChange()
    {
      return $this->ScheduleChange;
    }

    /**
     * @param boolean $ScheduleChange
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setScheduleChange($ScheduleChange)
    {
      $this->ScheduleChange = $ScheduleChange;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandIndicator()
    {
      return $this->BrandIndicator;
    }

    /**
     * @param string $BrandIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setBrandIndicator($BrandIndicator)
    {
      $this->BrandIndicator = $BrandIndicator;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getParticipantLevel()
    {
      return $this->ParticipantLevel;
    }

    /**
     * @param string $ParticipantLevel
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setParticipantLevel($ParticipantLevel)
    {
      $this->ParticipantLevel = $ParticipantLevel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLinkAvailability()
    {
      return $this->LinkAvailability;
    }

    /**
     * @param boolean $LinkAvailability
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setLinkAvailability($LinkAvailability)
    {
      $this->LinkAvailability = $LinkAvailability;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolledAvailabilityOption()
    {
      return $this->PolledAvailabilityOption;
    }

    /**
     * @param string $PolledAvailabilityOption
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setPolledAvailabilityOption($PolledAvailabilityOption)
    {
      $this->PolledAvailabilityOption = $PolledAvailabilityOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvailabilityDisplayType()
    {
      return $this->AvailabilityDisplayType;
    }

    /**
     * @param string $AvailabilityDisplayType
     * @return \FilippoToso\Travelport\UniversalRecord\typeBaseAirSegment
     */
    public function setAvailabilityDisplayType($AvailabilityDisplayType)
    {
      $this->AvailabilityDisplayType = $AvailabilityDisplayType;
      return $this;
    }

}
