<?php

namespace FilippoToso\Travelport\Util;

class HotelUpsellQualify
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
     * @var typeDate $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var typeDate $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $OfferRef
     */
    protected $OfferRef = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param CorporateDiscountID $CorporateDiscountID
     * @param typeHotelChainCode $HotelChainCode
     * @param typeHotelCode $HotelCode
     * @param typeIATACode $HotelLocation
     * @param typeRatePlanType $RatePlanType
     * @param typeDate $EffectiveDate
     * @param typeDate $ExpirationDate
     * @param typeRef $Key
     * @param typeRef $OfferRef
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($CorporateDiscountID = null, $HotelChainCode = null, $HotelCode = null, $HotelLocation = null, $RatePlanType = null, $EffectiveDate = null, $ExpirationDate = null, $Key = null, $OfferRef = null, $ElStat = null, $KeyOverride = null)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->HotelChainCode = $HotelChainCode;
      $this->HotelCode = $HotelCode;
      $this->HotelLocation = $HotelLocation;
      $this->RatePlanType = $RatePlanType;
      $this->EffectiveDate = $EffectiveDate;
      $this->ExpirationDate = $ExpirationDate;
      $this->Key = $Key;
      $this->OfferRef = $OfferRef;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
     */
    public function setRatePlanType($RatePlanType)
    {
      $this->RatePlanType = $RatePlanType;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param typeDate $EffectiveDate
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param typeDate $ExpirationDate
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getOfferRef()
    {
      return $this->OfferRef;
    }

    /**
     * @param typeRef $OfferRef
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
     */
    public function setOfferRef($OfferRef)
    {
      $this->OfferRef = $OfferRef;
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellQualify
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
