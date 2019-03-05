<?php

namespace FilippoToso\Travelport\Util;

class HotelUpsellQualifySearchCriteria extends UpsellSearchCriteria
{

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    protected $CorporateDiscountID = null;

    /**
     * @var typeHotelChainCode $HotelChainCode
     */
    protected $HotelChainCode = null;

    /**
     * @var typeHotelCode $HotelCode
     */
    protected $HotelCode = null;

    /**
     * @var typeIATACode $HotelLocation
     */
    protected $HotelLocation = null;

    /**
     * @var typeRatePlanType $RatePlanType
     */
    protected $RatePlanType = null;

    /**
     * @param EffectiveDate $EffectiveDate
     * @param ExpirationDate $ExpirationDate
     * @param CorporateDiscountID $CorporateDiscountID
     * @param typeHotelChainCode $HotelChainCode
     * @param typeHotelCode $HotelCode
     * @param typeIATACode $HotelLocation
     * @param typeRatePlanType $RatePlanType
     */
    public function __construct($EffectiveDate = null, $ExpirationDate = null, $CorporateDiscountID = null, $HotelChainCode = null, $HotelCode = null, $HotelLocation = null, $RatePlanType = null)
    {
      parent::__construct($EffectiveDate, $ExpirationDate);
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->HotelChainCode = $HotelChainCode;
      $this->HotelCode = $HotelCode;
      $this->HotelLocation = $HotelLocation;
      $this->RatePlanType = $RatePlanType;
    }

    /**
     * @return CorporateDiscountID
     */
    public function getCorporateDiscountID()
    {
      return $this->CorporateDiscountID;
    }

    /**
     * @param CorporateDiscountID $CorporateDiscountID
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualifySearchCriteria
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
      return $this;
    }

    /**
     * @return typeHotelChainCode
     */
    public function getHotelChainCode()
    {
      return $this->HotelChainCode;
    }

    /**
     * @param typeHotelChainCode $HotelChainCode
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualifySearchCriteria
     */
    public function setHotelChainCode($HotelChainCode)
    {
      $this->HotelChainCode = $HotelChainCode;
      return $this;
    }

    /**
     * @return typeHotelCode
     */
    public function getHotelCode()
    {
      return $this->HotelCode;
    }

    /**
     * @param typeHotelCode $HotelCode
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualifySearchCriteria
     */
    public function setHotelCode($HotelCode)
    {
      $this->HotelCode = $HotelCode;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getHotelLocation()
    {
      return $this->HotelLocation;
    }

    /**
     * @param typeIATACode $HotelLocation
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualifySearchCriteria
     */
    public function setHotelLocation($HotelLocation)
    {
      $this->HotelLocation = $HotelLocation;
      return $this;
    }

    /**
     * @return typeRatePlanType
     */
    public function getRatePlanType()
    {
      return $this->RatePlanType;
    }

    /**
     * @param typeRatePlanType $RatePlanType
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualifySearchCriteria
     */
    public function setRatePlanType($RatePlanType)
    {
      $this->RatePlanType = $RatePlanType;
      return $this;
    }

}
