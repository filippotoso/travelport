<?php

namespace FilippoToso\Travelport\UniversalRecord;

class BookingAction
{

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param FormOfPayment $FormOfPayment
     * @param Payment $Payment
     * @param string $Type
     */
    public function __construct($FormOfPayment = null, $Payment = null, $Type = null)
    {
      $this->FormOfPayment = $FormOfPayment;
      $this->Payment = $Payment;
      $this->Type = $Type;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\UniversalRecord\BookingAction
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \FilippoToso\Travelport\UniversalRecord\BookingAction
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\UniversalRecord\BookingAction
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
