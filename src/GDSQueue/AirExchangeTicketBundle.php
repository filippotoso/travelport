<?php

namespace FilippoToso\Travelport\GDSQueue;

class AirExchangeTicketBundle
{

    /**
     * @var StringLength1to13 $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var FormOfPaymentRef $FormOfPaymentRef
     */
    protected $FormOfPaymentRef = null;

    /**
     * @var WaiverCode $WaiverCode
     */
    protected $WaiverCode = null;

    /**
     * @param StringLength1to13 $TicketNumber
     * @param FormOfPayment $FormOfPayment
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @param WaiverCode $WaiverCode
     */
    public function __construct($TicketNumber = null, $FormOfPayment = null, $FormOfPaymentRef = null, $WaiverCode = null)
    {
      $this->TicketNumber = $TicketNumber;
      $this->FormOfPayment = $FormOfPayment;
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      $this->WaiverCode = $WaiverCode;
    }

    /**
     * @return StringLength1to13
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param StringLength1to13 $TicketNumber
     * @return \FilippoToso\Travelport\GDSQueue\AirExchangeTicketBundle
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
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
     * @return \FilippoToso\Travelport\GDSQueue\AirExchangeTicketBundle
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
     * @return \FilippoToso\Travelport\GDSQueue\AirExchangeTicketBundle
     */
    public function setFormOfPaymentRef($FormOfPaymentRef)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      return $this;
    }

    /**
     * @return WaiverCode
     */
    public function getWaiverCode()
    {
      return $this->WaiverCode;
    }

    /**
     * @param WaiverCode $WaiverCode
     * @return \FilippoToso\Travelport\GDSQueue\AirExchangeTicketBundle
     */
    public function setWaiverCode($WaiverCode)
    {
      $this->WaiverCode = $WaiverCode;
      return $this;
    }

}
