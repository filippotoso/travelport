<?php

namespace FilippoToso\Travelport\Rail;

class SSRInfo
{

    /**
     * @var SSR $SSR
     */
    protected $SSR = null;

    /**
     * @var typeRef[] $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param SSR $SSR
     */
    public function __construct($SSR = null)
    {
      $this->SSR = $SSR;
    }

    /**
     * @return SSR
     */
    public function getSSR()
    {
      return $this->SSR;
    }

    /**
     * @param SSR $SSR
     * @return \FilippoToso\Travelport\Rail\SSRInfo
     */
    public function setSSR($SSR)
    {
      $this->SSR = $SSR;
      return $this;
    }

    /**
     * @return typeRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef[] $BookingTravelerRef
     * @return \FilippoToso\Travelport\Rail\SSRInfo
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
