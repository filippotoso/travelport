<?php

namespace FilippoToso\Travelport\System;

class Payment
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var anonymous304 $Type
     */
    protected $Type = null;

    /**
     * @var typeRef $FormOfPaymentRef
     */
    protected $FormOfPaymentRef = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var StringLength1to32 $AmountType
     */
    protected $AmountType = null;

    /**
     * @var typeMoney $ApproximateAmount
     */
    protected $ApproximateAmount = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param anonymous304 $Type
     * @param typeRef $FormOfPaymentRef
     * @param typeRef $BookingTravelerRef
     * @param typeMoney $Amount
     * @param StringLength1to32 $AmountType
     * @param typeMoney $ApproximateAmount
     * @param string $Status
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key = null, $Type = null, $FormOfPaymentRef = null, $BookingTravelerRef = null, $Amount = null, $AmountType = null, $ApproximateAmount = null, $Status = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Key = $Key;
      $this->Type = $Type;
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->Amount = $Amount;
      $this->AmountType = $AmountType;
      $this->ApproximateAmount = $ApproximateAmount;
      $this->Status = $Status;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\System\Payment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous304
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous304 $Type
     * @return \FilippoToso\Travelport\System\Payment
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\System\Payment
     */
    public function setFormOfPaymentRef($FormOfPaymentRef)
    {
      $this->FormOfPaymentRef = $FormOfPaymentRef;
      return $this;
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
     * @return \FilippoToso\Travelport\System\Payment
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
     * @return \FilippoToso\Travelport\System\Payment
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return StringLength1to32
     */
    public function getAmountType()
    {
      return $this->AmountType;
    }

    /**
     * @param StringLength1to32 $AmountType
     * @return \FilippoToso\Travelport\System\Payment
     */
    public function setAmountType($AmountType)
    {
      $this->AmountType = $AmountType;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateAmount()
    {
      return $this->ApproximateAmount;
    }

    /**
     * @param typeMoney $ApproximateAmount
     * @return \FilippoToso\Travelport\System\Payment
     */
    public function setApproximateAmount($ApproximateAmount)
    {
      $this->ApproximateAmount = $ApproximateAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FilippoToso\Travelport\System\Payment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\System\Payment
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\System\Payment
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
