<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelRateInfo
{

    /**
     * @var typeRatePlanType $RatePlanType
     */
    protected $RatePlanType = null;

    /**
     * @param typeRatePlanType $RatePlanType
     */
    public function __construct($RatePlanType)
    {
      $this->RatePlanType = $RatePlanType;
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
     * @return \FilippoToso\Travelport\UniversalRecord\HotelRateInfo
     */
    public function setRatePlanType($RatePlanType)
    {
      $this->RatePlanType = $RatePlanType;
      return $this;
    }

}
