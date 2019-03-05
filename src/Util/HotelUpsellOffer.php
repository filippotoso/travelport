<?php

namespace FilippoToso\Travelport\Util;

class HotelUpsellOffer
{

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    protected $CorporateDiscountID = null;

    /**
     * @var typeRatePlanType $RatePlanType
     */
    protected $RatePlanType = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

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
     * @param typeRatePlanType $RatePlanType
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($CorporateDiscountID = null, $RatePlanType = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->RatePlanType = $RatePlanType;
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellOffer
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellOffer
     */
    public function setRatePlanType($RatePlanType)
    {
      $this->RatePlanType = $RatePlanType;
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellOffer
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellOffer
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellOffer
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
