<?php

namespace FilippoToso\Travelport\UProfile;

class PaymentDetails extends typeKeyTaggedElement
{

    /**
     * @var PaymentPhone $PaymentPhone
     */
    protected $PaymentPhone = null;

    /**
     * @var PaymentAddress $PaymentAddress
     */
    protected $PaymentAddress = null;

    /**
     * @var typeDateOptions $StartDate
     */
    protected $StartDate = null;

    /**
     * @var typeDateOptions $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var typePaymentType $Type
     */
    protected $Type = null;

    /**
     * @var StringLength1to128 $IssuedToName
     */
    protected $IssuedToName = null;

    /**
     * @var boolean $ExtendedPayment
     */
    protected $ExtendedPayment = null;

    /**
     * @var typePaymentSupplier $PaymentSupplier
     */
    protected $PaymentSupplier = null;

    /**
     * @var StringLength1to128 $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @var typeProfileID $OwnerID
     */
    protected $OwnerID = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param PaymentPhone $PaymentPhone
     * @param PaymentAddress $PaymentAddress
     * @param typePaymentType $Type
     * @param StringLength1to128 $IssuedToName
     * @param boolean $ExtendedPayment
     * @param typePaymentSupplier $PaymentSupplier
     * @param StringLength1to128 $AccountNumber
     * @param StringLength1to255 $Description
     * @param typePriorityOrder $PriorityOrder
     * @param typeProfileID $OwnerID
     */
    public function __construct($Key = null, $TagRef = null, $PaymentPhone = null, $PaymentAddress = null, $Type = null, $IssuedToName = null, $ExtendedPayment = null, $PaymentSupplier = null, $AccountNumber = null, $Description = null, $PriorityOrder = null, $OwnerID = null)
    {
      parent::__construct($Key, $TagRef);
      $this->PaymentPhone = $PaymentPhone;
      $this->PaymentAddress = $PaymentAddress;
      $this->Type = $Type;
      $this->IssuedToName = $IssuedToName;
      $this->ExtendedPayment = $ExtendedPayment;
      $this->PaymentSupplier = $PaymentSupplier;
      $this->AccountNumber = $AccountNumber;
      $this->Description = $Description;
      $this->PriorityOrder = $PriorityOrder;
      $this->OwnerID = $OwnerID;
    }

    /**
     * @return PaymentPhone
     */
    public function getPaymentPhone()
    {
      return $this->PaymentPhone;
    }

    /**
     * @param PaymentPhone $PaymentPhone
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setPaymentPhone($PaymentPhone)
    {
      $this->PaymentPhone = $PaymentPhone;
      return $this;
    }

    /**
     * @return PaymentAddress
     */
    public function getPaymentAddress()
    {
      return $this->PaymentAddress;
    }

    /**
     * @param PaymentAddress $PaymentAddress
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setPaymentAddress($PaymentAddress)
    {
      $this->PaymentAddress = $PaymentAddress;
      return $this;
    }

    /**
     * @return typeDateOptions
     */
    public function getStartDate()
    {
      return $this->StartDate;
    }

    /**
     * @param typeDateOptions $StartDate
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setStartDate($StartDate)
    {
      $this->StartDate = $StartDate;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
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
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getIssuedToName()
    {
      return $this->IssuedToName;
    }

    /**
     * @param StringLength1to128 $IssuedToName
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setIssuedToName($IssuedToName)
    {
      $this->IssuedToName = $IssuedToName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtendedPayment()
    {
      return $this->ExtendedPayment;
    }

    /**
     * @param boolean $ExtendedPayment
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setExtendedPayment($ExtendedPayment)
    {
      $this->ExtendedPayment = $ExtendedPayment;
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
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setPaymentSupplier($PaymentSupplier)
    {
      $this->PaymentSupplier = $PaymentSupplier;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param StringLength1to128 $AccountNumber
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to255 $Description
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getOwnerID()
    {
      return $this->OwnerID;
    }

    /**
     * @param typeProfileID $OwnerID
     * @return \FilippoToso\Travelport\UProfile\PaymentDetails
     */
    public function setOwnerID($OwnerID)
    {
      $this->OwnerID = $OwnerID;
      return $this;
    }

}
