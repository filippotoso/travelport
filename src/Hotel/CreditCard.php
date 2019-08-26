<?php

namespace FilippoToso\Travelport\Hotel;

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
     * @param anonymous38 $Name
     * @param anonymous39 $CVV
     * @param anonymous40 $ApprovalCode
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
    public function __construct($PhoneNumber, $Type, $Number, $ExpDate, $Name, $CVV, $ApprovalCode, $ExtendedPayment, $CustomerReference, $AcceptanceOverride, $ThirdPartyPayment, $BankName, $BankCountryCode, $BankStateCode, $Enett, $ProfileID, $Key)
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
     * @return \FilippoToso\Travelport\Hotel\CreditCard
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
     * @return \FilippoToso\Travelport\Hotel\CreditCard
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
