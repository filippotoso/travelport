<?php

namespace FilippoToso\Travelport\UniversalRecord;

class OptionalService
{

    /**
     * @var OptionJourneyDetails $OptionJourneyDetails
     */
    protected $OptionJourneyDetails = null;

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var StringLength1 $FeatureType
     */
    protected $FeatureType = null;

    /**
     * @var typeStatusCode $Status
     */
    protected $Status = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var StringLength1to10 $ProviderDefinedType
     */
    protected $ProviderDefinedType = null;

    /**
     * @var StringLength1to25 $Description
     */
    protected $Description = null;

    /**
     * @var date $StartDate
     */
    protected $StartDate = null;

    /**
     * @var date $EndDate
     */
    protected $EndDate = null;

    /**
     * @var date $BookingDate
     */
    protected $BookingDate = null;

    /**
     * @var StringLength1to10 $SetIdentifier
     */
    protected $SetIdentifier = null;

    /**
     * @var StringLength1to20 $SetName
     */
    protected $SetName = null;

    /**
     * @var typeMoney $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var boolean $TransportIndicator
     */
    protected $TransportIndicator = null;

    /**
     * @var boolean $AirCityIndicator
     */
    protected $AirCityIndicator = null;

    /**
     * @var boolean $PurchaseIndicator
     */
    protected $PurchaseIndicator = null;

    /**
     * @param OptionJourneyDetails $OptionJourneyDetails
     * @param BookingTravelerRef $BookingTravelerRef
     * @param StringLength1 $FeatureType
     * @param typeStatusCode $Status
     * @param int $Quantity
     * @param StringLength1to10 $ProviderDefinedType
     * @param StringLength1to25 $Description
     * @param date $StartDate
     * @param date $EndDate
     * @param date $BookingDate
     * @param StringLength1to10 $SetIdentifier
     * @param StringLength1to20 $SetName
     * @param typeMoney $TotalPrice
     * @param boolean $TransportIndicator
     * @param boolean $AirCityIndicator
     * @param boolean $PurchaseIndicator
     */
    public function __construct($OptionJourneyDetails = null, $BookingTravelerRef = null, $FeatureType = null, $Status = null, $Quantity = null, $ProviderDefinedType = null, $Description = null, $StartDate = null, $EndDate = null, $BookingDate = null, $SetIdentifier = null, $SetName = null, $TotalPrice = null, $TransportIndicator = null, $AirCityIndicator = null, $PurchaseIndicator = null)
    {
      $this->OptionJourneyDetails = $OptionJourneyDetails;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->FeatureType = $FeatureType;
      $this->Status = $Status;
      $this->Quantity = $Quantity;
      $this->ProviderDefinedType = $ProviderDefinedType;
      $this->Description = $Description;
      $this->StartDate = $StartDate;
      $this->EndDate = $EndDate;
      $this->BookingDate = $BookingDate;
      $this->SetIdentifier = $SetIdentifier;
      $this->SetName = $SetName;
      $this->TotalPrice = $TotalPrice;
      $this->TransportIndicator = $TransportIndicator;
      $this->AirCityIndicator = $AirCityIndicator;
      $this->PurchaseIndicator = $PurchaseIndicator;
    }

    /**
     * @return OptionJourneyDetails
     */
    public function getOptionJourneyDetails()
    {
      return $this->OptionJourneyDetails;
    }

    /**
     * @param OptionJourneyDetails $OptionJourneyDetails
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setOptionJourneyDetails($OptionJourneyDetails)
    {
      $this->OptionJourneyDetails = $OptionJourneyDetails;
      return $this;
    }

    /**
     * @return BookingTravelerRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return StringLength1
     */
    public function getFeatureType()
    {
      return $this->FeatureType;
    }

    /**
     * @param StringLength1 $FeatureType
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setFeatureType($FeatureType)
    {
      $this->FeatureType = $FeatureType;
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
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return StringLength1to10
     */
    public function getProviderDefinedType()
    {
      return $this->ProviderDefinedType;
    }

    /**
     * @param StringLength1to10 $ProviderDefinedType
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setProviderDefinedType($ProviderDefinedType)
    {
      $this->ProviderDefinedType = $ProviderDefinedType;
      return $this;
    }

    /**
     * @return StringLength1to25
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to25 $Description
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param date $StartDate
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->EndDate;
    }

    /**
     * @param date $EndDate
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setEndDate($EndDate)
    {
      $this->EndDate = $EndDate;
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
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setBookingDate($BookingDate)
    {
      $this->BookingDate = $BookingDate;
      return $this;
    }

    /**
     * @return StringLength1to10
     */
    public function getSetIdentifier()
    {
      return $this->SetIdentifier;
    }

    /**
     * @param StringLength1to10 $SetIdentifier
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setSetIdentifier($SetIdentifier)
    {
      $this->SetIdentifier = $SetIdentifier;
      return $this;
    }

    /**
     * @return StringLength1to20
     */
    public function getSetName()
    {
      return $this->SetName;
    }

    /**
     * @param StringLength1to20 $SetName
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setSetName($SetName)
    {
      $this->SetName = $SetName;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTransportIndicator()
    {
      return $this->TransportIndicator;
    }

    /**
     * @param boolean $TransportIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setTransportIndicator($TransportIndicator)
    {
      $this->TransportIndicator = $TransportIndicator;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAirCityIndicator()
    {
      return $this->AirCityIndicator;
    }

    /**
     * @param boolean $AirCityIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setAirCityIndicator($AirCityIndicator)
    {
      $this->AirCityIndicator = $AirCityIndicator;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPurchaseIndicator()
    {
      return $this->PurchaseIndicator;
    }

    /**
     * @param boolean $PurchaseIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\OptionalService
     */
    public function setPurchaseIndicator($PurchaseIndicator)
    {
      $this->PurchaseIndicator = $PurchaseIndicator;
      return $this;
    }

}
