<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeVoucherInformation
{

    /**
     * @var typeVoucherType $VoucherType
     */
    protected $VoucherType = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var string $ConfirmationNumber
     */
    protected $ConfirmationNumber = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var StringLength1to16 $Number
     */
    protected $Number = null;

    /**
     * @param typeVoucherType $VoucherType
     * @param typeMoney $Amount
     * @param string $ConfirmationNumber
     * @param string $AccountName
     * @param StringLength1to16 $Number
     */
    public function __construct($VoucherType = null, $Amount = null, $ConfirmationNumber = null, $AccountName = null, $Number = null)
    {
      $this->VoucherType = $VoucherType;
      $this->Amount = $Amount;
      $this->ConfirmationNumber = $ConfirmationNumber;
      $this->AccountName = $AccountName;
      $this->Number = $Number;
    }

    /**
     * @return typeVoucherType
     */
    public function getVoucherType()
    {
      return $this->VoucherType;
    }

    /**
     * @param typeVoucherType $VoucherType
     * @return \FilippoToso\Travelport\UniversalRecord\typeVoucherInformation
     */
    public function setVoucherType($VoucherType)
    {
      $this->VoucherType = $VoucherType;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeVoucherInformation
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmationNumber()
    {
      return $this->ConfirmationNumber;
    }

    /**
     * @param string $ConfirmationNumber
     * @return \FilippoToso\Travelport\UniversalRecord\typeVoucherInformation
     */
    public function setConfirmationNumber($ConfirmationNumber)
    {
      $this->ConfirmationNumber = $ConfirmationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \FilippoToso\Travelport\UniversalRecord\typeVoucherInformation
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

    /**
     * @return StringLength1to16
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param StringLength1to16 $Number
     * @return \FilippoToso\Travelport\UniversalRecord\typeVoucherInformation
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
