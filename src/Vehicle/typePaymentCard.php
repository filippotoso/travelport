<?php

namespace FilippoToso\Travelport\Vehicle;

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
     * @var anonymous41 $Name
     */
    protected $Name = null;

    /**
     * @var anonymous42 $CVV
     */
    protected $CVV = null;

    /**
     * @var anonymous43 $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param typeCardMerchantType $Type
     * @param typeCreditCardNumber $Number
     * @param gYearMonth $ExpDate
     * @param anonymous41 $Name
     * @param anonymous42 $CVV
     * @param anonymous43 $ApprovalCode
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
     * @return \FilippoToso\Travelport\Vehicle\typePaymentCard
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
     * @return \FilippoToso\Travelport\Vehicle\typePaymentCard
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
     * @return \FilippoToso\Travelport\Vehicle\typePaymentCard
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
     * @return \FilippoToso\Travelport\Vehicle\typePaymentCard
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
     * @return \FilippoToso\Travelport\Vehicle\typePaymentCard
     */
    public function setExpDate($ExpDate)
    {
      $this->ExpDate = $ExpDate;
      return $this;
    }

    /**
     * @return anonymous41
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous41 $Name
     * @return \FilippoToso\Travelport\Vehicle\typePaymentCard
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anonymous42
     */
    public function getCVV()
    {
      return $this->CVV;
    }

    /**
     * @param anonymous42 $CVV
     * @return \FilippoToso\Travelport\Vehicle\typePaymentCard
     */
    public function setCVV($CVV)
    {
      $this->CVV = $CVV;
      return $this;
    }

    /**
     * @return anonymous43
     */
    public function getApprovalCode()
    {
      return $this->ApprovalCode;
    }

    /**
     * @param anonymous43 $ApprovalCode
     * @return \FilippoToso\Travelport\Vehicle\typePaymentCard
     */
    public function setApprovalCode($ApprovalCode)
    {
      $this->ApprovalCode = $ApprovalCode;
      return $this;
    }

}
