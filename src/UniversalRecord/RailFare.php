<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailFare
{

    /**
     * @var RailFareNoteRef $RailFareNoteRef
     */
    protected $RailFareNoteRef = null;

    /**
     * @var RailFareID $RailFareID
     */
    protected $RailFareID = null;

    /**
     * @var RailFareIDRef $RailFareIDRef
     */
    protected $RailFareIDRef = null;

    /**
     * @var FareValidity $FareValidity
     */
    protected $FareValidity = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var FulFillmentType $FulFillmentType
     */
    protected $FulFillmentType = null;

    /**
     * @var RailFareComponent $RailFareComponent
     */
    protected $RailFareComponent = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var string $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var typeRailCabin $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var typePTC $PassengerTypeCode
     */
    protected $PassengerTypeCode = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var string $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var string $RouteDescription
     */
    protected $RouteDescription = null;

    /**
     * @var string $TicketTypeCode
     */
    protected $TicketTypeCode = null;

    /**
     * @var anonymous1306 $FareReference
     */
    protected $FareReference = null;

    /**
     * @var boolean $CrossCityFare
     */
    protected $CrossCityFare = null;

    /**
     * @var string $OriginStationName
     */
    protected $OriginStationName = null;

    /**
     * @var string $DestinationStationName
     */
    protected $DestinationStationName = null;

    /**
     * @var boolean $ReservationRequired
     */
    protected $ReservationRequired = null;

    /**
     * @var typeJourneyDirection $JourneyDirection
     */
    protected $JourneyDirection = null;

    /**
     * @var typeRailLocationCode $RailLocOrigin
     */
    protected $RailLocOrigin = null;

    /**
     * @var typeRailLocationCode $RailLocDestination
     */
    protected $RailLocDestination = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param RailFareNoteRef $RailFareNoteRef
     * @param RailFareID $RailFareID
     * @param RailFareIDRef $RailFareIDRef
     * @param FareValidity $FareValidity
     * @param HostToken $HostToken
     * @param FulFillmentType $FulFillmentType
     * @param RailFareComponent $RailFareComponent
     * @param typeRef $Key
     * @param string $FareBasis
     * @param typeRailCabin $CabinClass
     * @param typePTC $PassengerTypeCode
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param string $EffectiveDate
     * @param typeMoney $Amount
     * @param string $RouteDescription
     * @param string $TicketTypeCode
     * @param anonymous1306 $FareReference
     * @param boolean $CrossCityFare
     * @param string $OriginStationName
     * @param string $DestinationStationName
     * @param boolean $ReservationRequired
     * @param typeJourneyDirection $JourneyDirection
     * @param typeRailLocationCode $RailLocOrigin
     * @param typeRailLocationCode $RailLocDestination
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($RailFareNoteRef = null, $RailFareID = null, $RailFareIDRef = null, $FareValidity = null, $HostToken = null, $FulFillmentType = null, $RailFareComponent = null, $Key = null, $FareBasis = null, $CabinClass = null, $PassengerTypeCode = null, $Origin = null, $Destination = null, $EffectiveDate = null, $Amount = null, $RouteDescription = null, $TicketTypeCode = null, $FareReference = null, $CrossCityFare = null, $OriginStationName = null, $DestinationStationName = null, $ReservationRequired = null, $JourneyDirection = null, $RailLocOrigin = null, $RailLocDestination = null, $ElStat = null, $KeyOverride = null)
    {
      $this->RailFareNoteRef = $RailFareNoteRef;
      $this->RailFareID = $RailFareID;
      $this->RailFareIDRef = $RailFareIDRef;
      $this->FareValidity = $FareValidity;
      $this->HostToken = $HostToken;
      $this->FulFillmentType = $FulFillmentType;
      $this->RailFareComponent = $RailFareComponent;
      $this->Key = $Key;
      $this->FareBasis = $FareBasis;
      $this->CabinClass = $CabinClass;
      $this->PassengerTypeCode = $PassengerTypeCode;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->EffectiveDate = $EffectiveDate;
      $this->Amount = $Amount;
      $this->RouteDescription = $RouteDescription;
      $this->TicketTypeCode = $TicketTypeCode;
      $this->FareReference = $FareReference;
      $this->CrossCityFare = $CrossCityFare;
      $this->OriginStationName = $OriginStationName;
      $this->DestinationStationName = $DestinationStationName;
      $this->ReservationRequired = $ReservationRequired;
      $this->JourneyDirection = $JourneyDirection;
      $this->RailLocOrigin = $RailLocOrigin;
      $this->RailLocDestination = $RailLocDestination;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return RailFareNoteRef
     */
    public function getRailFareNoteRef()
    {
      return $this->RailFareNoteRef;
    }

    /**
     * @param RailFareNoteRef $RailFareNoteRef
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setRailFareNoteRef($RailFareNoteRef)
    {
      $this->RailFareNoteRef = $RailFareNoteRef;
      return $this;
    }

    /**
     * @return RailFareID
     */
    public function getRailFareID()
    {
      return $this->RailFareID;
    }

    /**
     * @param RailFareID $RailFareID
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setRailFareID($RailFareID)
    {
      $this->RailFareID = $RailFareID;
      return $this;
    }

    /**
     * @return RailFareIDRef
     */
    public function getRailFareIDRef()
    {
      return $this->RailFareIDRef;
    }

    /**
     * @param RailFareIDRef $RailFareIDRef
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setRailFareIDRef($RailFareIDRef)
    {
      $this->RailFareIDRef = $RailFareIDRef;
      return $this;
    }

    /**
     * @return FareValidity
     */
    public function getFareValidity()
    {
      return $this->FareValidity;
    }

    /**
     * @param FareValidity $FareValidity
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setFareValidity($FareValidity)
    {
      $this->FareValidity = $FareValidity;
      return $this;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setFulFillmentType($FulFillmentType)
    {
      $this->FulFillmentType = $FulFillmentType;
      return $this;
    }

    /**
     * @return RailFareComponent
     */
    public function getRailFareComponent()
    {
      return $this->RailFareComponent;
    }

    /**
     * @param RailFareComponent $RailFareComponent
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setRailFareComponent($RailFareComponent)
    {
      $this->RailFareComponent = $RailFareComponent;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param string $FareBasis
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getPassengerTypeCode()
    {
      return $this->PassengerTypeCode;
    }

    /**
     * @param typePTC $PassengerTypeCode
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setPassengerTypeCode($PassengerTypeCode)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param string $EffectiveDate
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getRouteDescription()
    {
      return $this->RouteDescription;
    }

    /**
     * @param string $RouteDescription
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setRouteDescription($RouteDescription)
    {
      $this->RouteDescription = $RouteDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketTypeCode()
    {
      return $this->TicketTypeCode;
    }

    /**
     * @param string $TicketTypeCode
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setTicketTypeCode($TicketTypeCode)
    {
      $this->TicketTypeCode = $TicketTypeCode;
      return $this;
    }

    /**
     * @return anonymous1306
     */
    public function getFareReference()
    {
      return $this->FareReference;
    }

    /**
     * @param anonymous1306 $FareReference
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setFareReference($FareReference)
    {
      $this->FareReference = $FareReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrossCityFare()
    {
      return $this->CrossCityFare;
    }

    /**
     * @param boolean $CrossCityFare
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setCrossCityFare($CrossCityFare)
    {
      $this->CrossCityFare = $CrossCityFare;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setDestinationStationName($DestinationStationName)
    {
      $this->DestinationStationName = $DestinationStationName;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setReservationRequired($ReservationRequired)
    {
      $this->ReservationRequired = $ReservationRequired;
      return $this;
    }

    /**
     * @return typeJourneyDirection
     */
    public function getJourneyDirection()
    {
      return $this->JourneyDirection;
    }

    /**
     * @param typeJourneyDirection $JourneyDirection
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setJourneyDirection($JourneyDirection)
    {
      $this->JourneyDirection = $JourneyDirection;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setRailLocDestination($RailLocDestination)
    {
      $this->RailLocDestination = $RailLocDestination;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailFare
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
