<?php

namespace FilippoToso\Travelport\Terminal;

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
     * @var anonymous37 $Name
     */
    protected $Name = null;

    /**
     * @var anonymous38 $CVV
     */
    protected $CVV = null;

    /**
     * @var anonymous39 $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param typeCardMerchantType $Type
     * @param typeCreditCardNumber $Number
     * @param gYearMonth $ExpDate
     * @param anonymous37 $Name
     * @param anonymous38 $CVV
     * @param anonymous39 $ApprovalCode
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
     * @return \FilippoToso\Travelport\Terminal\typePaymentCard
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
     * @return \FilippoToso\Travelport\Terminal\typePaymentCard
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
     * @return \FilippoToso\Travelport\Terminal\typePaymentCard
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
     * @return \FilippoToso\Travelport\Terminal\typePaymentCard
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
     * @return \FilippoToso\Travelport\Terminal\typePaymentCard
     */
    public function setExpDate($ExpDate)
    {
      $this->ExpDate = $ExpDate;
      return $this;
    }

    /**
     * @return anonymous37
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous37 $Name
     * @return \FilippoToso\Travelport\Terminal\typePaymentCard
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anonymous38
     */
    public function getCVV()
    {
      return $this->CVV;
    }

    /**
     * @param anonymous38 $CVV
     * @return \FilippoToso\Travelport\Terminal\typePaymentCard
     */
    public function setCVV($CVV)
    {
      $this->CVV = $CVV;
      return $this;
    }

    /**
     * @return anonymous39
     */
    public function getApprovalCode()
    {
      return $this->ApprovalCode;
    }

    /**
     * @param anonymous39 $ApprovalCode
     * @return \FilippoToso\Travelport\Terminal\typePaymentCard
     */
    public function setApprovalCode($ApprovalCode)
    {
      $this->ApprovalCode = $ApprovalCode;
      return $this;
    }

}
