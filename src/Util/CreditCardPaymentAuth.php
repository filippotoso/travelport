<?php

namespace FilippoToso\Travelport\Util;

class CreditCardPaymentAuth
{

    /**
     * @var CreditCard $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @var FormOfPaymentRef $FormOfPaymentRef
     */
    protected $FormOfPaymentRef = null;

    /**
     * @var anonymous1121 $SecurityCode
     */
    protected $SecurityCode = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var boolean $PerformAVS
     */
    protected $PerformAVS = null;

    /**
     * @param CreditCard $CreditCard
     * @param FormOfPaymentRef $FormOfPaymentRef
     * @param anonymous1121 $SecurityCode
     * @param typeMoney $Amount
     * @param boolean $PerformAVS
     */
    public function __construct($CreditCard = null, $FormOfPaymentRef = null, $SecurityCode = null, $Amount = null, $PerformAVS = null)
    {
      $this->CreditCard = $CreditCard;
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      $this->SecurityCode = $SecurityCode;
      $this->Amount = $Amount;
      $this->PerformAVS = $PerformAVS;
    }

    /**
     * @return CreditCard
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param CreditCard $CreditCard
     * @return \FilippoToso\Travelport\Util\CreditCardPaymentAuth
     */
    public function setCreditCard($CreditCard)
    {
      $this->CreditCard = $CreditCard;
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
     * @return \FilippoToso\Travelport\Util\CreditCardPaymentAuth
     */
    public function setFormOfPaymentRef($FormOfPaymentRef)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      return $this;
    }

    /**
     * @return anonymous1121
     */
    public function getSecurityCode()
    {
      return $this->SecurityCode;
    }

    /**
     * @param anonymous1121 $SecurityCode
     * @return \FilippoToso\Travelport\Util\CreditCardPaymentAuth
     */
    public function setSecurityCode($SecurityCode)
    {
      $this->SecurityCode = $SecurityCode;
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
     * @return \FilippoToso\Travelport\Util\CreditCardPaymentAuth
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPerformAVS()
    {
      return $this->PerformAVS;
    }

    /**
     * @param boolean $PerformAVS
     * @return \FilippoToso\Travelport\Util\CreditCardPaymentAuth
     */
    public function setPerformAVS($PerformAVS)
    {
      $this->PerformAVS = $PerformAVS;
      return $this;
    }

}
