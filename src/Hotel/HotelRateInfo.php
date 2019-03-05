<?php

namespace FilippoToso\Travelport\Hotel;

class HotelRateInfo
{

    /**
     * @var typeRatePlanType $RatePlanType
     */
    protected $RatePlanType = null;

    /**
     * @param typeRatePlanType $RatePlanType
     */
    public function __construct($RatePlanType = null)
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
     * @return \FilippoToso\Travelport\Hotel\HotelRateInfo
     */
    public function setRatePlanType($RatePlanType)
    {
      $this->RatePlanType = $RatePlanType;
      return $this;
    }

}
