<?php

namespace FilippoToso\Travelport\UProfile;

class typeVoucherInformationHistory
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
     * @param typeVoucherType $VoucherType
     * @param typeMoney $Amount
     * @param string $ConfirmationNumber
     * @param string $AccountName
     */
    public function __construct($VoucherType = null, $Amount = null, $ConfirmationNumber = null, $AccountName = null)
    {
      $this->VoucherType = $VoucherType;
      $this->Amount = $Amount;
      $this->ConfirmationNumber = $ConfirmationNumber;
      $this->AccountName = $AccountName;
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
     * @return \FilippoToso\Travelport\UProfile\typeVoucherInformationHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeVoucherInformationHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeVoucherInformationHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeVoucherInformationHistory
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

}
