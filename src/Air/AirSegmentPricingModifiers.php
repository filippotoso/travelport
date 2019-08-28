<?php

namespace FilippoToso\Travelport\Air;

class AirSegmentPricingModifiers
{

    /**
     * @var PermittedBookingCodes $PermittedBookingCodes
     */
    protected $PermittedBookingCodes = null;

    /**
     * @var typeRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var string $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var boolean $ProhibitAdvancePurchaseFares
     */
    protected $ProhibitAdvancePurchaseFares = null;

    /**
     * @var boolean $ProhibitNonRefundableFares
     */
    protected $ProhibitNonRefundableFares = null;

    /**
     * @var boolean $ProhibitPenaltyFares
     */
    protected $ProhibitPenaltyFares = null;

    /**
     * @var string $FareBasisCode
     */
    protected $FareBasisCode = null;

    /**
     * @var typeFareBreak $FareBreak
     */
    protected $FareBreak = null;

    /**
     * @var typeConnectionIndicator $ConnectionIndicator
     */
    protected $ConnectionIndicator = null;

    /**
     * @var StringLength1to10 $BrandTier
     */
    protected $BrandTier = null;

    /**
     * @param typeRef $AirSegmentRef
     * @param string $CabinClass
     * @param string $AccountCode
     * @param boolean $ProhibitAdvancePurchaseFares
     * @param boolean $ProhibitNonRefundableFares
     * @param boolean $ProhibitPenaltyFares
     * @param string $FareBasisCode
     * @param typeFareBreak $FareBreak
     * @param typeConnectionIndicator $ConnectionIndicator
     * @param StringLength1to10 $BrandTier
     */
    public function __construct($AirSegmentRef = null, $CabinClass = null, $AccountCode = null, $ProhibitAdvancePurchaseFares = null, $ProhibitNonRefundableFares = null, $ProhibitPenaltyFares = null, $FareBasisCode = null, $FareBreak = null, $ConnectionIndicator = null, $BrandTier = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->CabinClass = $CabinClass;
      $this->AccountCode = $AccountCode;
      $this->ProhibitAdvancePurchaseFares = $ProhibitAdvancePurchaseFares;
      $this->ProhibitNonRefundableFares = $ProhibitNonRefundableFares;
      $this->ProhibitPenaltyFares = $ProhibitPenaltyFares;
      $this->FareBasisCode = $FareBasisCode;
      $this->FareBreak = $FareBreak;
      $this->ConnectionIndicator = $ConnectionIndicator;
      $this->BrandTier = $BrandTier;
    }

    /**
     * @return PermittedBookingCodes
     */
    public function getPermittedBookingCodes()
    {
      return $this->PermittedBookingCodes;
    }

    /**
     * @param PermittedBookingCodes $PermittedBookingCodes
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setPermittedBookingCodes($PermittedBookingCodes)
    {
      $this->PermittedBookingCodes = $PermittedBookingCodes;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param typeRef $AirSegmentRef
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
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
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param string $AccountCode
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitAdvancePurchaseFares()
    {
      return $this->ProhibitAdvancePurchaseFares;
    }

    /**
     * @param boolean $ProhibitAdvancePurchaseFares
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setProhibitAdvancePurchaseFares($ProhibitAdvancePurchaseFares)
    {
      $this->ProhibitAdvancePurchaseFares = $ProhibitAdvancePurchaseFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitNonRefundableFares()
    {
      return $this->ProhibitNonRefundableFares;
    }

    /**
     * @param boolean $ProhibitNonRefundableFares
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setProhibitNonRefundableFares($ProhibitNonRefundableFares)
    {
      $this->ProhibitNonRefundableFares = $ProhibitNonRefundableFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitPenaltyFares()
    {
      return $this->ProhibitPenaltyFares;
    }

    /**
     * @param boolean $ProhibitPenaltyFares
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setProhibitPenaltyFares($ProhibitPenaltyFares)
    {
      $this->ProhibitPenaltyFares = $ProhibitPenaltyFares;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBasisCode()
    {
      return $this->FareBasisCode;
    }

    /**
     * @param string $FareBasisCode
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setFareBasisCode($FareBasisCode)
    {
      $this->FareBasisCode = $FareBasisCode;
      return $this;
    }

    /**
     * @return typeFareBreak
     */
    public function getFareBreak()
    {
      return $this->FareBreak;
    }

    /**
     * @param typeFareBreak $FareBreak
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setFareBreak($FareBreak)
    {
      $this->FareBreak = $FareBreak;
      return $this;
    }

    /**
     * @return typeConnectionIndicator
     */
    public function getConnectionIndicator()
    {
      return $this->ConnectionIndicator;
    }

    /**
     * @param typeConnectionIndicator $ConnectionIndicator
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setConnectionIndicator($ConnectionIndicator)
    {
      $this->ConnectionIndicator = $ConnectionIndicator;
      return $this;
    }

    /**
     * @return StringLength1to10
     */
    public function getBrandTier()
    {
      return $this->BrandTier;
    }

    /**
     * @param StringLength1to10 $BrandTier
     * @return \FilippoToso\Travelport\Air\AirSegmentPricingModifiers
     */
    public function setBrandTier($BrandTier)
    {
      $this->BrandTier = $BrandTier;
      return $this;
    }

}
