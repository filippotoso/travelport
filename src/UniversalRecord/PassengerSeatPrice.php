<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PassengerSeatPrice
{

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @param typeRef $BookingTravelerRef
     * @param typeMoney $Amount
     */
    public function __construct($BookingTravelerRef = null, $Amount = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->Amount = $Amount;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\PassengerSeatPrice
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\UniversalRecord\PassengerSeatPrice
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
