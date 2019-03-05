<?php

namespace FilippoToso\Travelport\Air;

class CustomerReceiptInfo
{

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeRef $EmailRef
     */
    protected $EmailRef = null;

    /**
     * @param typeRef $BookingTravelerRef
     * @param typeRef $EmailRef
     */
    public function __construct($BookingTravelerRef = null, $EmailRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->EmailRef = $EmailRef;
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
     * @return \FilippoToso\Travelport\Air\CustomerReceiptInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getEmailRef()
    {
      return $this->EmailRef;
    }

    /**
     * @param typeRef $EmailRef
     * @return \FilippoToso\Travelport\Air\CustomerReceiptInfo
     */
    public function setEmailRef($EmailRef)
    {
      $this->EmailRef = $EmailRef;
      return $this;
    }

}
