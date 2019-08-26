<?php

namespace FilippoToso\Travelport\Hotel;

class CreditCardAuth
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $PaymentRef
     */
    protected $PaymentRef = null;

    /**
     * @var string $TransId
     */
    protected $TransId = null;

    /**
     * @var typeCreditCardNumber $Number
     */
    protected $Number = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var string $AuthCode
     */
    protected $AuthCode = null;

    /**
     * @var string $AuthResultCode
     */
    protected $AuthResultCode = null;

    /**
     * @var string $AVSResultCode
     */
    protected $AVSResultCode = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $FormOfPaymentRef
     */
    protected $FormOfPaymentRef = null;

    /**
     * @param typeRef $Key
     * @param typeRef $PaymentRef
     * @param string $TransId
     * @param typeCreditCardNumber $Number
     * @param typeMoney $Amount
     * @param string $AuthCode
     * @param string $AuthResultCode
     * @param string $AVSResultCode
     * @param string $Message
     * @param typeRef $ProviderReservationInfoRef
     * @param typeRef $FormOfPaymentRef
     */
    public function __construct($Key, $PaymentRef, $TransId, $Number, $Amount, $AuthCode, $AuthResultCode, $AVSResultCode, $Message, $ProviderReservationInfoRef, $FormOfPaymentRef)
    {
      $this->Key = $Key;
      $this->PaymentRef = $PaymentRef;
      $this->TransId = $TransId;
      $this->Number = $Number;
      $this->Amount = $Amount;
      $this->AuthCode = $AuthCode;
      $this->AuthResultCode = $AuthResultCode;
      $this->AVSResultCode = $AVSResultCode;
      $this->Message = $Message;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->FormOfPaymentRef = $FormOfPaymentRef;
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
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPaymentRef()
    {
      return $this->PaymentRef;
    }

    /**
     * @param typeRef $PaymentRef
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setPaymentRef($PaymentRef)
    {
      $this->PaymentRef = $PaymentRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransId()
    {
      return $this->TransId;
    }

    /**
     * @param string $TransId
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setTransId($TransId)
    {
      $this->TransId = $TransId;
      return $this;
    }

    /**
     * @return typeCreditCardNumber
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param typeCreditCardNumber $Number
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthCode()
    {
      return $this->AuthCode;
    }

    /**
     * @param string $AuthCode
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setAuthCode($AuthCode)
    {
      $this->AuthCode = $AuthCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthResultCode()
    {
      return $this->AuthResultCode;
    }

    /**
     * @param string $AuthResultCode
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setAuthResultCode($AuthResultCode)
    {
      $this->AuthResultCode = $AuthResultCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAVSResultCode()
    {
      return $this->AVSResultCode;
    }

    /**
     * @param string $AVSResultCode
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setAVSResultCode($AVSResultCode)
    {
      $this->AVSResultCode = $AVSResultCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFormOfPaymentRef()
    {
      return $this->FormOfPaymentRef;
    }

    /**
     * @param typeRef $FormOfPaymentRef
     * @return \FilippoToso\Travelport\Hotel\CreditCardAuth
     */
    public function setFormOfPaymentRef($FormOfPaymentRef)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      return $this;
    }

}
