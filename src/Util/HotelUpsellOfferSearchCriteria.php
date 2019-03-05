<?php

namespace FilippoToso\Travelport\Util;

class HotelUpsellOfferSearchCriteria
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
     * @param CorporateDiscountID $CorporateDiscountID
     * @param typeRatePlanType $RatePlanType
     */
    public function __construct($CorporateDiscountID = null, $RatePlanType = null)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellOfferSearchCriteria
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
     * @return \FilippoToso\Travelport\Util\HotelUpsellOfferSearchCriteria
     */
    public function setRatePlanType($RatePlanType)
    {
      $this->RatePlanType = $RatePlanType;
      return $this;
    }

}
