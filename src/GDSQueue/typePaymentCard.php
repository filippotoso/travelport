<?php

namespace FilippoToso\Travelport\GDSQueue;

class typePaymentCard
{

    /**
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var typeStructuredAddress $BillingAddress
     */
    protected $BillingAddress = null;

    /**
     * @var typeCardMerchantType $Type
     */
    protected $Type = null;

    /**
     * @var typeCreditCardNumber $Number
     */
    protected $Number = null;

    /**
     * @var gYearMonth $ExpDate
     */
    protected $ExpDate = null;

    /**
     * @var anonymous38 $Name
     */
    protected $Name = null;

    /**
     * @var anonymous39 $CVV
     */
    protected $CVV = null;

    /**
     * @var anonymous40 $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param typeCardMerchantType $Type
     * @param typeCreditCardNumber $Number
     * @param gYearMonth $ExpDate
     * @param anonymous38 $Name
     * @param anonymous39 $CVV
     * @param anonymous40 $ApprovalCode
     */
    public function __construct($PhoneNumber = null, $Type = null, $Number = null, $ExpDate = null, $Name = null, $CVV = null, $ApprovalCode = null)
    {
      $this->PhoneNumber = $PhoneNumber;
      $this->Type = $Type;
      $this->Number = $Number;
      $this->ExpDate = $ExpDate;
      $this->Name = $Name;
      $this->CVV = $CVV;
      $this->ApprovalCode = $ApprovalCode;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentCard
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return typeStructuredAddress
     */
    public function getBillingAddress()
    {
      return $this->BillingAddress;
    }

    /**
     * @param typeStructuredAddress $BillingAddress
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentCard
     */
    public function setBillingAddress($BillingAddress)
    {
      $this->BillingAddress = $BillingAddress;
      return $this;
    }

    /**
     * @return typeCardMerchantType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeCardMerchantType $Type
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentCard
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentCard
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return gYearMonth
     */
    public function getExpDate()
    {
      return $this->ExpDate;
    }

    /**
     * @param gYearMonth $ExpDate
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentCard
     */
    public function setExpDate($ExpDate)
    {
      $this->ExpDate = $ExpDate;
      return $this;
    }

    /**
     * @return anonymous38
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous38 $Name
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentCard
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anonymous39
     */
    public function getCVV()
    {
      return $this->CVV;
    }

    /**
     * @param anonymous39 $CVV
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentCard
     */
    public function setCVV($CVV)
    {
      $this->CVV = $CVV;
      return $this;
    }

    /**
     * @return anonymous40
     */
    public function getApprovalCode()
    {
      return $this->ApprovalCode;
    }

    /**
     * @param anonymous40 $ApprovalCode
     * @return \FilippoToso\Travelport\GDSQueue\typePaymentCard
     */
    public function setApprovalCode($ApprovalCode)
    {
      $this->ApprovalCode = $ApprovalCode;
      return $this;
    }

}
