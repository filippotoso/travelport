<?php

namespace FilippoToso\Travelport\Air;

class AirPricingInfoRef
{

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @param typeRef $Key
     */
    public function __construct($BookingTravelerRef = null, $Key = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Air\AirPricingInfoRef
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \FilippoToso\Travelport\Air\AirPricingInfoRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
