<?php

namespace FilippoToso\Travelport\GDSQueue;

class PassiveSegment
{

    /**
     * @var Amount $Amount
     */
    protected $Amount = null;

    /**
     * @var typePassiveSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $StartDate
     */
    protected $StartDate = null;

    /**
     * @var string $EndDate
     */
    protected $EndDate = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var string $AvailabilitySource
     */
    protected $AvailabilitySource = null;

    /**
     * @var string $PolledAvailabilityOption
     */
    protected $PolledAvailabilityOption = null;

    /**
     * @var string $AvailabilityDisplayType
     */
    protected $AvailabilityDisplayType = null;

    /**
     * @var string $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var string $ClassOfService
     */
    protected $ClassOfService = null;

    /**
     * @var int $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var string $SegmentType
     */
    protected $SegmentType = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var string $VehicleType
     */
    protected $VehicleType = null;

    /**
     * @var typeRef $PassiveProviderReservationInfoRef
     */
    protected $PassiveProviderReservationInfoRef = null;

    /**
     * @var int $Group
     */
    protected $Group = null;

    /**
     * @var int $TravelOrder
     */
    protected $TravelOrder = null;

    /**
     * @var anonymous1269 $ProviderSegmentOrder
     */
    protected $ProviderSegmentOrder = null;

    /**
     * @var string $PassiveGroup
     */
    protected $PassiveGroup = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typePassiveSupplierCode $SupplierCode
     * @param string $Status
     * @param string $StartDate
     * @param string $EndDate
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $AvailabilitySource
     * @param string $PolledAvailabilityOption
     * @param string $AvailabilityDisplayType
     * @param string $FlightNumber
     * @param string $ClassOfService
     * @param int $NumberOfItems
     * @param string $SegmentType
     * @param typeRef $Key
     * @param string $VehicleType
     * @param typeRef $PassiveProviderReservationInfoRef
     * @param int $Group
     * @param int $TravelOrder
     * @param anonymous1269 $ProviderSegmentOrder
     * @param string $PassiveGroup
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($SupplierCode = null, $Status = null, $StartDate = null, $EndDate = null, $Origin = null, $Destination = null, $AvailabilitySource = null, $PolledAvailabilityOption = null, $AvailabilityDisplayType = null, $FlightNumber = null, $ClassOfService = null, $NumberOfItems = null, $SegmentType = null, $Key = null, $VehicleType = null, $PassiveProviderReservationInfoRef = null, $Group = null, $TravelOrder = null, $ProviderSegmentOrder = null, $PassiveGroup = null, $ElStat = null, $KeyOverride = null)
    {
      $this->SupplierCode = $SupplierCode;
      $this->Status = $Status;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->AvailabilitySource = $AvailabilitySource;
      $this->PolledAvailabilityOption = $PolledAvailabilityOption;
      $this->AvailabilityDisplayType = $AvailabilityDisplayType;
      $this->FlightNumber = $FlightNumber;
      $this->ClassOfService = $ClassOfService;
      $this->NumberOfItems = $NumberOfItems;
      $this->SegmentType = $SegmentType;
      $this->Key = $Key;
      $this->VehicleType = $VehicleType;
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
      $this->Group = $Group;
      $this->TravelOrder = $TravelOrder;
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
      $this->PassiveGroup = $PassiveGroup;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param Amount $Amount
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePassiveSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typePassiveSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvailabilitySource()
    {
      return $this->AvailabilitySource;
    }

    /**
     * @param string $AvailabilitySource
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setAvailabilitySource($AvailabilitySource)
    {
      $this->AvailabilitySource = $AvailabilitySource;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setAvailabilityDisplayType($AvailabilityDisplayType)
    {
      $this->AvailabilityDisplayType = $AvailabilityDisplayType;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getClassOfService()
    {
      return $this->ClassOfService;
    }

    /**
     * @param string $ClassOfService
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfItems()
    {
      return $this->NumberOfItems;
    }

    /**
     * @param int $NumberOfItems
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getSegmentType()
    {
      return $this->SegmentType;
    }

    /**
     * @param string $SegmentType
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setSegmentType($SegmentType)
    {
      $this->SegmentType = $SegmentType;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getVehicleType()
    {
      return $this->VehicleType;
    }

    /**
     * @param string $VehicleType
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setVehicleType($VehicleType)
    {
      $this->VehicleType = $VehicleType;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setPassiveProviderReservationInfoRef($PassiveProviderReservationInfoRef)
    {
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setGroup($Group)
    {
      $this->Group = $Group;
      return $this;
    }

    /**
     * @return int
     */
    public function getTravelOrder()
    {
      return $this->TravelOrder;
    }

    /**
     * @param int $TravelOrder
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setTravelOrder($TravelOrder)
    {
      $this->TravelOrder = $TravelOrder;
      return $this;
    }

    /**
     * @return anonymous1269
     */
    public function getProviderSegmentOrder()
    {
      return $this->ProviderSegmentOrder;
    }

    /**
     * @param anonymous1269 $ProviderSegmentOrder
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setProviderSegmentOrder($ProviderSegmentOrder)
    {
      $this->ProviderSegmentOrder = $ProviderSegmentOrder;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassiveGroup()
    {
      return $this->PassiveGroup;
    }

    /**
     * @param string $PassiveGroup
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setPassiveGroup($PassiveGroup)
    {
      $this->PassiveGroup = $PassiveGroup;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveSegment
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
