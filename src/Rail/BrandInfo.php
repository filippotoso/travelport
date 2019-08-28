<?php

namespace FilippoToso\Travelport\Rail;

class BrandInfo
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeBrandId $BrandID
     */
    protected $BrandID = null;

    /**
     * @var typeRef $AirPricingInfoRef
     */
    protected $AirPricingInfoRef = null;

    /**
     * @var typeRef $FareInfoRef
     */
    protected $FareInfoRef = null;

    /**
     * @param typeRef $Key
     * @param typeBrandId $BrandID
     * @param typeRef $AirPricingInfoRef
     * @param typeRef $FareInfoRef
     */
    public function __construct($Key = null, $BrandID = null, $AirPricingInfoRef = null, $FareInfoRef = null)
    {
      $this->Key = $Key;
      $this->BrandID = $BrandID;
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->FareInfoRef = $FareInfoRef;
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
     * @return \FilippoToso\Travelport\Rail\BrandInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeBrandId
     */
    public function getBrandID()
    {
      return $this->BrandID;
    }

    /**
     * @param typeBrandId $BrandID
     * @return \FilippoToso\Travelport\Rail\BrandInfo
     */
    public function setBrandID($BrandID)
    {
      $this->BrandID = $BrandID;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param typeRef $AirPricingInfoRef
     * @return \FilippoToso\Travelport\Rail\BrandInfo
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param typeRef $FareInfoRef
     * @return \FilippoToso\Travelport\Rail\BrandInfo
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
