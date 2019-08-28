<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailSegment extends Segment
{

    /**
     * @var RailSegmentInfo $RailSegmentInfo
     */
    protected $RailSegmentInfo = null;

    /**
     * @var OperatingCompany $OperatingCompany
     */
    protected $OperatingCompany = null;

    /**
     * @var RailAvailInfo $RailAvailInfo
     */
    protected $RailAvailInfo = null;

    /**
     * @var FulFillmentType $FulFillmentType
     */
    protected $FulFillmentType = null;

    /**
     * @var typeTrainNumber $TrainNumber
     */
    protected $TrainNumber = null;

    /**
     * @var string $TrainType
     */
    protected $TrainType = null;

    /**
     * @var typeTrainType $TrainTypeCode
     */
    protected $TrainTypeCode = null;

    /**
     * @var typeTransportMode $TransportMode
     */
    protected $TransportMode = null;

    /**
     * @var boolean $SeatAssignable
     */
    protected $SeatAssignable = null;

    /**
     * @var string $TransportCode
     */
    protected $TransportCode = null;

    /**
     * @var boolean $ReservationRequired
     */
    protected $ReservationRequired = null;

    /**
     * @var int $TravelTime
     */
    protected $TravelTime = null;

    /**
     * @var typeRef $HostTokenRef
     */
    protected $HostTokenRef = null;

    /**
     * @var typeRailCabin $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var typeRailClass $ClassCode
     */
    protected $ClassCode = null;

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
     * @var string $OriginStationName
     */
    protected $OriginStationName = null;

    /**
     * @var string $DestinationStationName
     */
    protected $DestinationStationName = null;

    /**
     * @var typeRailLocationCode $RailLocOrigin
     */
    protected $RailLocOrigin = null;

    /**
     * @var typeRailLocationCode $RailLocDestination
     */
    protected $RailLocDestination = null;

    /**
     * @param SegmentRemark $SegmentRemark
     * @param typeRef $Key
     * @param string $Status
     * @param boolean $Passive
     * @param int $TravelOrder
     * @param anonymous198 $ProviderSegmentOrder
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     * @param RailSegmentInfo $RailSegmentInfo
     * @param OperatingCompany $OperatingCompany
     * @param RailAvailInfo $RailAvailInfo
     * @param FulFillmentType $FulFillmentType
     * @param typeTrainNumber $TrainNumber
     * @param string $TrainType
     * @param typeTrainType $TrainTypeCode
     * @param typeTransportMode $TransportMode
     * @param boolean $SeatAssignable
     * @param string $TransportCode
     * @param boolean $ReservationRequired
     * @param int $TravelTime
     * @param typeRef $HostTokenRef
     * @param typeRailCabin $CabinClass
     * @param typeRailClass $ClassCode
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $DepartureTime
     * @param string $ArrivalTime
     * @param string $OriginStationName
     * @param string $DestinationStationName
     * @param typeRailLocationCode $RailLocOrigin
     * @param typeRailLocationCode $RailLocDestination
     */
    public function __construct($SegmentRemark = null, $Key = null, $Status = null, $Passive = null, $TravelOrder = null, $ProviderSegmentOrder = null, $ElStat = null, $KeyOverride = null, $RailSegmentInfo = null, $OperatingCompany = null, $RailAvailInfo = null, $FulFillmentType = null, $TrainNumber = null, $TrainType = null, $TrainTypeCode = null, $TransportMode = null, $SeatAssignable = null, $TransportCode = null, $ReservationRequired = null, $TravelTime = null, $HostTokenRef = null, $CabinClass = null, $ClassCode = null, $Origin = null, $Destination = null, $DepartureTime = null, $ArrivalTime = null, $OriginStationName = null, $DestinationStationName = null, $RailLocOrigin = null, $RailLocDestination = null)
    {
      parent::__construct($SegmentRemark, $Key, $Status, $Passive, $TravelOrder, $ProviderSegmentOrder, $ElStat, $KeyOverride);
      $this->RailSegmentInfo = $RailSegmentInfo;
      $this->OperatingCompany = $OperatingCompany;
      $this->RailAvailInfo = $RailAvailInfo;
      $this->FulFillmentType = $FulFillmentType;
      $this->TrainNumber = $TrainNumber;
      $this->TrainType = $TrainType;
      $this->TrainTypeCode = $TrainTypeCode;
      $this->TransportMode = $TransportMode;
      $this->SeatAssignable = $SeatAssignable;
      $this->TransportCode = $TransportCode;
      $this->ReservationRequired = $ReservationRequired;
      $this->TravelTime = $TravelTime;
      $this->HostTokenRef = $HostTokenRef;
      $this->CabinClass = $CabinClass;
      $this->ClassCode = $ClassCode;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->DepartureTime = $DepartureTime;
      $this->ArrivalTime = $ArrivalTime;
      $this->OriginStationName = $OriginStationName;
      $this->DestinationStationName = $DestinationStationName;
      $this->RailLocOrigin = $RailLocOrigin;
      $this->RailLocDestination = $RailLocDestination;
    }

    /**
     * @return RailSegmentInfo
     */
    public function getRailSegmentInfo()
    {
      return $this->RailSegmentInfo;
    }

    /**
     * @param RailSegmentInfo $RailSegmentInfo
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setRailSegmentInfo($RailSegmentInfo)
    {
      $this->RailSegmentInfo = $RailSegmentInfo;
      return $this;
    }

    /**
     * @return OperatingCompany
     */
    public function getOperatingCompany()
    {
      return $this->OperatingCompany;
    }

    /**
     * @param OperatingCompany $OperatingCompany
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setOperatingCompany($OperatingCompany)
    {
      $this->OperatingCompany = $OperatingCompany;
      return $this;
    }

    /**
     * @return RailAvailInfo
     */
    public function getRailAvailInfo()
    {
      return $this->RailAvailInfo;
    }

    /**
     * @param RailAvailInfo $RailAvailInfo
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setRailAvailInfo($RailAvailInfo)
    {
      $this->RailAvailInfo = $RailAvailInfo;
      return $this;
    }

    /**
     * @return FulFillmentType
     */
    public function getFulFillmentType()
    {
      return $this->FulFillmentType;
    }

    /**
     * @param FulFillmentType $FulFillmentType
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setFulFillmentType($FulFillmentType)
    {
      $this->FulFillmentType = $FulFillmentType;
      return $this;
    }

    /**
     * @return typeTrainNumber
     */
    public function getTrainNumber()
    {
      return $this->TrainNumber;
    }

    /**
     * @param typeTrainNumber $TrainNumber
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setTrainNumber($TrainNumber)
    {
      $this->TrainNumber = $TrainNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrainType()
    {
      return $this->TrainType;
    }

    /**
     * @param string $TrainType
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setTrainType($TrainType)
    {
      $this->TrainType = $TrainType;
      return $this;
    }

    /**
     * @return typeTrainType
     */
    public function getTrainTypeCode()
    {
      return $this->TrainTypeCode;
    }

    /**
     * @param typeTrainType $TrainTypeCode
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setTrainTypeCode($TrainTypeCode)
    {
      $this->TrainTypeCode = $TrainTypeCode;
      return $this;
    }

    /**
     * @return typeTransportMode
     */
    public function getTransportMode()
    {
      return $this->TransportMode;
    }

    /**
     * @param typeTransportMode $TransportMode
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setTransportMode($TransportMode)
    {
      $this->TransportMode = $TransportMode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSeatAssignable()
    {
      return $this->SeatAssignable;
    }

    /**
     * @param boolean $SeatAssignable
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setSeatAssignable($SeatAssignable)
    {
      $this->SeatAssignable = $SeatAssignable;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransportCode()
    {
      return $this->TransportCode;
    }

    /**
     * @param string $TransportCode
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setTransportCode($TransportCode)
    {
      $this->TransportCode = $TransportCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReservationRequired()
    {
      return $this->ReservationRequired;
    }

    /**
     * @param boolean $ReservationRequired
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setReservationRequired($ReservationRequired)
    {
      $this->ReservationRequired = $ReservationRequired;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getHostTokenRef()
    {
      return $this->HostTokenRef;
    }

    /**
     * @param typeRef $HostTokenRef
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setHostTokenRef($HostTokenRef)
    {
      $this->HostTokenRef = $HostTokenRef;
      return $this;
    }

    /**
     * @return typeRailCabin
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param typeRailCabin $CabinClass
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return typeRailClass
     */
    public function getClassCode()
    {
      return $this->ClassCode;
    }

    /**
     * @param typeRailClass $ClassCode
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setClassCode($ClassCode)
    {
      $this->ClassCode = $ClassCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setArrivalTime($ArrivalTime)
    {
      $this->ArrivalTime = $ArrivalTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginStationName()
    {
      return $this->OriginStationName;
    }

    /**
     * @param string $OriginStationName
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setOriginStationName($OriginStationName)
    {
      $this->OriginStationName = $OriginStationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationStationName()
    {
      return $this->DestinationStationName;
    }

    /**
     * @param string $DestinationStationName
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setDestinationStationName($DestinationStationName)
    {
      $this->DestinationStationName = $DestinationStationName;
      return $this;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getRailLocOrigin()
    {
      return $this->RailLocOrigin;
    }

    /**
     * @param typeRailLocationCode $RailLocOrigin
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setRailLocOrigin($RailLocOrigin)
    {
      $this->RailLocOrigin = $RailLocOrigin;
      return $this;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getRailLocDestination()
    {
      return $this->RailLocDestination;
    }

    /**
     * @param typeRailLocationCode $RailLocDestination
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegment
     */
    public function setRailLocDestination($RailLocDestination)
    {
      $this->RailLocDestination = $RailLocDestination;
      return $this;
    }

}
