<?php

namespace FilippoToso\Travelport\UProfile;

class typePaymentCardHistory
{

    /**
     * @var PhoneNumberHistory $PhoneNumberHistory
     */
    protected $PhoneNumberHistory = null;

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
     * @var anonymous903 $Name
     */
    protected $Name = null;

    /**
     * @var anonymous904 $CVV
     */
    protected $CVV = null;

    /**
     * @var anonymous905 $ApprovalCode
     */
    protected $ApprovalCode = null;

    /**
     * @param PhoneNumberHistory $PhoneNumberHistory
     * @param typeCardMerchantType $Type
     * @param typeCreditCardNumber $Number
     * @param gYearMonth $ExpDate
     * @param anonymous903 $Name
     * @param anonymous904 $CVV
     * @param anonymous905 $ApprovalCode
     */
    public function __construct($PhoneNumberHistory = null, $Type = null, $Number = null, $ExpDate = null, $Name = null, $CVV = null, $ApprovalCode = null)
    {
      $this->PhoneNumberHistory = $PhoneNumberHistory;
      $this->Type = $Type;
      $this->Number = $Number;
      $this->ExpDate = $ExpDate;
      $this->Name = $Name;
      $this->CVV = $CVV;
      $this->ApprovalCode = $ApprovalCode;
    }

    /**
     * @return PhoneNumberHistory
     */
    public function getPhoneNumberHistory()
    {
      return $this->PhoneNumberHistory;
    }

    /**
     * @param PhoneNumberHistory $PhoneNumberHistory
     * @return \FilippoToso\Travelport\UProfile\typePaymentCardHistory
     */
    public function setPhoneNumberHistory($PhoneNumberHistory)
    {
      $this->PhoneNumberHistory = $PhoneNumberHistory;
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
     * @return \FilippoToso\Travelport\UProfile\typePaymentCardHistory
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
     * @return \FilippoToso\Travelport\UProfile\typePaymentCardHistory
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
     * @return \FilippoToso\Travelport\UProfile\typePaymentCardHistory
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
     * @return \FilippoToso\Travelport\UProfile\typePaymentCardHistory
     */
    public function setExpDate($ExpDate)
    {
      $this->ExpDate = $ExpDate;
      return $this;
    }

    /**
     * @return anonymous903
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param anonymous903 $Name
     * @return \FilippoToso\Travelport\UProfile\typePaymentCardHistory
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anonymous904
     */
    public function getCVV()
    {
      return $this->CVV;
    }

    /**
     * @param anonymous904 $CVV
     * @return \FilippoToso\Travelport\UProfile\typePaymentCardHistory
     */
    public function setCVV($CVV)
    {
      $this->CVV = $CVV;
      return $this;
    }

    /**
     * @return anonymous905
     */
    public function getApprovalCode()
    {
      return $this->ApprovalCode;
    }

    /**
     * @param anonymous905 $ApprovalCode
     * @return \FilippoToso\Travelport\UProfile\typePaymentCardHistory
     */
    public function setApprovalCode($ApprovalCode)
    {
      $this->ApprovalCode = $ApprovalCode;
      return $this;
    }

}
