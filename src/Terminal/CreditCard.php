<?php

namespace FilippoToso\Travelport\Terminal;

class CreditCard extends typeCreditCardType
{

    /**
     * @var string $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param typeCardMerchantType $Type
     * @param typeCreditCardNumber $Number
     * @param gYearMonth $ExpDate
     * @param anonymous37 $Name
     * @param anonymous38 $CVV
     * @param anonymous39 $ApprovalCode
     * @param string $ExtendedPayment
     * @param string $CustomerReference
     * @param boolean $AcceptanceOverride
     * @param boolean $ThirdPartyPayment
     * @param string $BankName
     * @param typeCountry $BankCountryCode
     * @param typeState $BankStateCode
     * @param boolean $Enett
     * @param string $ProfileID
     * @param typeRef $Key
     */
    public function __construct($PhoneNumber = null, $Type = null, $Number = null, $ExpDate = null, $Name = null, $CVV = null, $ApprovalCode = null, $ExtendedPayment = null, $CustomerReference = null, $AcceptanceOverride = null, $ThirdPartyPayment = null, $BankName = null, $BankCountryCode = null, $BankStateCode = null, $Enett = null, $ProfileID = null, $Key = null)
    {
      parent::__construct($PhoneNumber, $Type, $Number, $ExpDate, $Name, $CVV, $ApprovalCode, $ExtendedPayment, $CustomerReference, $AcceptanceOverride, $ThirdPartyPayment, $BankName, $BankCountryCode, $BankStateCode, $Enett);
      $this->ProfileID = $ProfileID;
      $this->Key = $Key;
    }

    /**
     * @return string
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param string $ProfileID
     * @return \FilippoToso\Travelport\Terminal\CreditCard
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
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
     * @return \FilippoToso\Travelport\Terminal\CreditCard
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
