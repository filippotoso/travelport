<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VehicleSearchModifiers
{

    /**
     * @var PermittedVendors $PermittedVendors
     */
    protected $PermittedVendors = null;

    /**
     * @var ProhibitedVendors $ProhibitedVendors
     */
    protected $ProhibitedVendors = null;

    /**
     * @var VehicleModifier $VehicleModifier
     */
    protected $VehicleModifier = null;

    /**
     * @var VehicleType $VehicleType
     */
    protected $VehicleType = null;

    /**
     * @var RateModifiers $RateModifiers
     */
    protected $RateModifiers = null;

    /**
     * @var typeRateHostIndicator $RateHostIndicator
     */
    protected $RateHostIndicator = null;

    /**
     * @var LoyaltyCard $LoyaltyCard
     */
    protected $LoyaltyCard = null;

    /**
     * @var typeReferencePoint $ReferencePoint
     */
    protected $ReferencePoint = null;

    /**
     * @var BookingSource $BookingSource
     */
    protected $BookingSource = null;

    /**
     * @var SpecialEquipment $SpecialEquipment
     */
    protected $SpecialEquipment = null;

    /**
     * @var typeVehicleSearchDistance $SearchDistance
     */
    protected $SearchDistance = null;

    /**
     * @var typeKeyword $Policy
     */
    protected $Policy = null;

    /**
     * @var DriverInfo $DriverInfo
     */
    protected $DriverInfo = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeCurrency $PreferredCurrency
     */
    protected $PreferredCurrency = null;

    /**
     * @var boolean $UnlimitedMileage
     */
    protected $UnlimitedMileage = null;

    /**
     * @var typeRateCategory $RateCategory
     */
    protected $RateCategory = null;

    /**
     * @var boolean $RateGuaranteed
     */
    protected $RateGuaranteed = null;

    /**
     * @var typeRateTimePeriod $RatePeriod
     */
    protected $RatePeriod = null;

    /**
     * @var boolean $SellableRatesOnly
     */
    protected $SellableRatesOnly = null;

    /**
     * @param VehicleModifier $VehicleModifier
     * @param VehicleType $VehicleType
     * @param RateModifiers $RateModifiers
     * @param LoyaltyCard $LoyaltyCard
     * @param typeReferencePoint $ReferencePoint
     * @param BookingSource $BookingSource
     * @param SpecialEquipment $SpecialEquipment
     * @param typeKeyword $Policy
     * @param DriverInfo $DriverInfo
     * @param typeRef $Key
     * @param typeCurrency $PreferredCurrency
     * @param boolean $UnlimitedMileage
     * @param typeRateCategory $RateCategory
     * @param boolean $RateGuaranteed
     * @param typeRateTimePeriod $RatePeriod
     * @param boolean $SellableRatesOnly
     */
    public function __construct($VehicleModifier = null, $VehicleType = null, $RateModifiers = null, $LoyaltyCard = null, $ReferencePoint = null, $BookingSource = null, $SpecialEquipment = null, $Policy = null, $DriverInfo = null, $Key = null, $PreferredCurrency = null, $UnlimitedMileage = null, $RateCategory = null, $RateGuaranteed = null, $RatePeriod = null, $SellableRatesOnly = null)
    {
      $this->VehicleModifier = $VehicleModifier;
      $this->VehicleType = $VehicleType;
      $this->RateModifiers = $RateModifiers;
      $this->LoyaltyCard = $LoyaltyCard;
      $this->ReferencePoint = $ReferencePoint;
      $this->BookingSource = $BookingSource;
      $this->SpecialEquipment = $SpecialEquipment;
      $this->Policy = $Policy;
      $this->DriverInfo = $DriverInfo;
      $this->Key = $Key;
      $this->PreferredCurrency = $PreferredCurrency;
      $this->UnlimitedMileage = $UnlimitedMileage;
      $this->RateCategory = $RateCategory;
      $this->RateGuaranteed = $RateGuaranteed;
      $this->RatePeriod = $RatePeriod;
      $this->SellableRatesOnly = $SellableRatesOnly;
    }

    /**
     * @return PermittedVendors
     */
    public function getPermittedVendors()
    {
      return $this->PermittedVendors;
    }

    /**
     * @param PermittedVendors $PermittedVendors
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setPermittedVendors($PermittedVendors)
    {
      $this->PermittedVendors = $PermittedVendors;
      return $this;
    }

    /**
     * @return ProhibitedVendors
     */
    public function getProhibitedVendors()
    {
      return $this->ProhibitedVendors;
    }

    /**
     * @param ProhibitedVendors $ProhibitedVendors
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setProhibitedVendors($ProhibitedVendors)
    {
      $this->ProhibitedVendors = $ProhibitedVendors;
      return $this;
    }

    /**
     * @return VehicleModifier
     */
    public function getVehicleModifier()
    {
      return $this->VehicleModifier;
    }

    /**
     * @param VehicleModifier $VehicleModifier
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setVehicleModifier($VehicleModifier)
    {
      $this->VehicleModifier = $VehicleModifier;
      return $this;
    }

    /**
     * @return VehicleType
     */
    public function getVehicleType()
    {
      return $this->VehicleType;
    }

    /**
     * @param VehicleType $VehicleType
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setVehicleType($VehicleType)
    {
      $this->VehicleType = $VehicleType;
      return $this;
    }

    /**
     * @return RateModifiers
     */
    public function getRateModifiers()
    {
      return $this->RateModifiers;
    }

    /**
     * @param RateModifiers $RateModifiers
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setRateModifiers($RateModifiers)
    {
      $this->RateModifiers = $RateModifiers;
      return $this;
    }

    /**
     * @return typeRateHostIndicator
     */
    public function getRateHostIndicator()
    {
      return $this->RateHostIndicator;
    }

    /**
     * @param typeRateHostIndicator $RateHostIndicator
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setRateHostIndicator($RateHostIndicator)
    {
      $this->RateHostIndicator = $RateHostIndicator;
      return $this;
    }

    /**
     * @return LoyaltyCard
     */
    public function getLoyaltyCard()
    {
      return $this->LoyaltyCard;
    }

    /**
     * @param LoyaltyCard $LoyaltyCard
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setLoyaltyCard($LoyaltyCard)
    {
      $this->LoyaltyCard = $LoyaltyCard;
      return $this;
    }

    /**
     * @return typeReferencePoint
     */
    public function getReferencePoint()
    {
      return $this->ReferencePoint;
    }

    /**
     * @param typeReferencePoint $ReferencePoint
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setReferencePoint($ReferencePoint)
    {
      $this->ReferencePoint = $ReferencePoint;
      return $this;
    }

    /**
     * @return BookingSource
     */
    public function getBookingSource()
    {
      return $this->BookingSource;
    }

    /**
     * @param BookingSource $BookingSource
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setBookingSource($BookingSource)
    {
      $this->BookingSource = $BookingSource;
      return $this;
    }

    /**
     * @return SpecialEquipment
     */
    public function getSpecialEquipment()
    {
      return $this->SpecialEquipment;
    }

    /**
     * @param SpecialEquipment $SpecialEquipment
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setSpecialEquipment($SpecialEquipment)
    {
      $this->SpecialEquipment = $SpecialEquipment;
      return $this;
    }

    /**
     * @return typeVehicleSearchDistance
     */
    public function getSearchDistance()
    {
      return $this->SearchDistance;
    }

    /**
     * @param typeVehicleSearchDistance $SearchDistance
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setSearchDistance($SearchDistance)
    {
      $this->SearchDistance = $SearchDistance;
      return $this;
    }

    /**
     * @return typeKeyword
     */
    public function getPolicy()
    {
      return $this->Policy;
    }

    /**
     * @param typeKeyword $Policy
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setPolicy($Policy)
    {
      $this->Policy = $Policy;
      return $this;
    }

    /**
     * @return DriverInfo
     */
    public function getDriverInfo()
    {
      return $this->DriverInfo;
    }

    /**
     * @param DriverInfo $DriverInfo
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setDriverInfo($DriverInfo)
    {
      $this->DriverInfo = $DriverInfo;
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
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getPreferredCurrency()
    {
      return $this->PreferredCurrency;
    }

    /**
     * @param typeCurrency $PreferredCurrency
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setPreferredCurrency($PreferredCurrency)
    {
      $this->PreferredCurrency = $PreferredCurrency;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnlimitedMileage()
    {
      return $this->UnlimitedMileage;
    }

    /**
     * @param boolean $UnlimitedMileage
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setUnlimitedMileage($UnlimitedMileage)
    {
      $this->UnlimitedMileage = $UnlimitedMileage;
      return $this;
    }

    /**
     * @return typeRateCategory
     */
    public function getRateCategory()
    {
      return $this->RateCategory;
    }

    /**
     * @param typeRateCategory $RateCategory
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setRateCategory($RateCategory)
    {
      $this->RateCategory = $RateCategory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRateGuaranteed()
    {
      return $this->RateGuaranteed;
    }

    /**
     * @param boolean $RateGuaranteed
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setRateGuaranteed($RateGuaranteed)
    {
      $this->RateGuaranteed = $RateGuaranteed;
      return $this;
    }

    /**
     * @return typeRateTimePeriod
     */
    public function getRatePeriod()
    {
      return $this->RatePeriod;
    }

    /**
     * @param typeRateTimePeriod $RatePeriod
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setRatePeriod($RatePeriod)
    {
      $this->RatePeriod = $RatePeriod;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellableRatesOnly()
    {
      return $this->SellableRatesOnly;
    }

    /**
     * @param boolean $SellableRatesOnly
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleSearchModifiers
     */
    public function setSellableRatesOnly($SellableRatesOnly)
    {
      $this->SellableRatesOnly = $SellableRatesOnly;
      return $this;
    }

}
