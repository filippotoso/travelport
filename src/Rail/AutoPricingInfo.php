<?php

namespace FilippoToso\Travelport\Rail;

class AutoPricingInfo
{

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var AirPricingModifiers $AirPricingModifiers
     */
    protected $AirPricingModifiers = null;

    /**
     * @var AirSegmentPricingModifiers $AirSegmentPricingModifiers
     */
    protected $AirSegmentPricingModifiers = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var anonymous1063 $PricingType
     */
    protected $PricingType = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @param BookingTravelerRef $BookingTravelerRef
     * @param AirPricingModifiers $AirPricingModifiers
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @param typeRef $Key
     * @param anonymous1063 $PricingType
     * @param typeCarrier $PlatingCarrier
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($AirSegmentRef = null, $BookingTravelerRef = null, $AirPricingModifiers = null, $AirSegmentPricingModifiers = null, $Key = null, $PricingType = null, $PlatingCarrier = null, $ElStat = null, $KeyOverride = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->AirPricingModifiers = $AirPricingModifiers;
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
      $this->Key = $Key;
      $this->PricingType = $PricingType;
      $this->PlatingCarrier = $PlatingCarrier;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return AirSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @return \FilippoToso\Travelport\Rail\AutoPricingInfo
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
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
     * @return \FilippoToso\Travelport\Rail\AutoPricingInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return AirPricingModifiers
     */
    public function getAirPricingModifiers()
    {
      return $this->AirPricingModifiers;
    }

    /**
     * @param AirPricingModifiers $AirPricingModifiers
     * @return \FilippoToso\Travelport\Rail\AutoPricingInfo
     */
    public function setAirPricingModifiers($AirPricingModifiers)
    {
      $this->AirPricingModifiers = $AirPricingModifiers;
      return $this;
    }

    /**
     * @return AirSegmentPricingModifiers
     */
    public function getAirSegmentPricingModifiers()
    {
      return $this->AirSegmentPricingModifiers;
    }

    /**
     * @param AirSegmentPricingModifiers $AirSegmentPricingModifiers
     * @return \FilippoToso\Travelport\Rail\AutoPricingInfo
     */
    public function setAirSegmentPricingModifiers($AirSegmentPricingModifiers)
    {
      $this->AirSegmentPricingModifiers = $AirSegmentPricingModifiers;
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
     * @return \FilippoToso\Travelport\Rail\AutoPricingInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous1063
     */
    public function getPricingType()
    {
      return $this->PricingType;
    }

    /**
     * @param anonymous1063 $PricingType
     * @return \FilippoToso\Travelport\Rail\AutoPricingInfo
     */
    public function setPricingType($PricingType)
    {
      $this->PricingType = $PricingType;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param typeCarrier $PlatingCarrier
     * @return \FilippoToso\Travelport\Rail\AutoPricingInfo
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
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
     * @return \FilippoToso\Travelport\Rail\AutoPricingInfo
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
     * @return \FilippoToso\Travelport\Rail\AutoPricingInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
