<?php

namespace FilippoToso\Travelport\UProfile;

class typeSearchPaymentDetails
{

    /**
     * @var typeDateOptions $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var typePaymentType $Type
     */
    protected $Type = null;

    /**
     * @var typePaymentSupplier $PaymentSupplier
     */
    protected $PaymentSupplier = null;

    /**
     * @var StringLength1to255 $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @param typePaymentType $Type
     * @param typePaymentSupplier $PaymentSupplier
     * @param StringLength1to255 $AccountNumber
     */
    public function __construct($Type = null, $PaymentSupplier = null, $AccountNumber = null)
    {
      $this->Type = $Type;
      $this->PaymentSupplier = $PaymentSupplier;
      $this->AccountNumber = $AccountNumber;
    }

    /**
     * @return typeDateOptions
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param typeDateOptions $ExpirationDate
     * @return \FilippoToso\Travelport\UProfile\typeSearchPaymentDetails
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
      return $this;
    }

    /**
     * @return typePaymentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typePaymentType $Type
     * @return \FilippoToso\Travelport\UProfile\typeSearchPaymentDetails
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return typePaymentSupplier
     */
    public function getPaymentSupplier()
    {
      return $this->PaymentSupplier;
    }

    /**
     * @param typePaymentSupplier $PaymentSupplier
     * @return \FilippoToso\Travelport\UProfile\typeSearchPaymentDetails
     */
    public function setPaymentSupplier($PaymentSupplier)
    {
      $this->PaymentSupplier = $PaymentSupplier;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param StringLength1to255 $AccountNumber
     * @return \FilippoToso\Travelport\UProfile\typeSearchPaymentDetails
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

}
