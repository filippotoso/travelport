<?php

namespace FilippoToso\Travelport\Rail;

class OptionalServicesInfo
{

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var FormOfPaymentRef $FormOfPaymentRef
     */
    protected $FormOfPaymentRef = null;

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @param FormOfPayment $FormOfPayment
     * @param FormOfPaymentRef $FormOfPaymentRef
     */
    public function __construct($AirPricingSolution, $FormOfPayment, $FormOfPaymentRef)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      $this->FormOfPayment = $FormOfPayment;
      $this->FormOfPaymentRef = $FormOfPaymentRef;
    }

    /**
     * @return AirPricingSolution
     */
    public function getAirPricingSolution()
    {
      return $this->AirPricingSolution;
    }

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @return \FilippoToso\Travelport\Rail\OptionalServicesInfo
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\OptionalServicesInfo
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return FormOfPaymentRef
     */
    public function getFormOfPaymentRef()
    {
      return $this->FormOfPaymentRef;
    }

    /**
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @return \FilippoToso\Travelport\Rail\OptionalServicesInfo
     */
    public function setFormOfPaymentRef($FormOfPaymentRef)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      return $this;
    }

}
