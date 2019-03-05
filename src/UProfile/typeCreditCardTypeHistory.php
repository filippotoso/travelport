<?php

namespace FilippoToso\Travelport\UProfile;

class typeCreditCardTypeHistory extends typePaymentCardHistory
{

    /**
     * @var string $ExtendedPayment
     */
    protected $ExtendedPayment = null;

    /**
     * @var string $CustomerReference
     */
    protected $CustomerReference = null;

    /**
     * @var boolean $AcceptanceOverride
     */
    protected $AcceptanceOverride = null;

    /**
     * @var boolean $ThirdPartyPayment
     */
    protected $ThirdPartyPayment = null;

    /**
     * @var string $BankName
     */
    protected $BankName = null;

    /**
     * @var typeCountry $BankCountryCode
     */
    protected $BankCountryCode = null;

    /**
     * @var boolean $ExtractIndicator
     */
    protected $ExtractIndicator = null;

    /**
     * @var boolean $Active
     */
    protected $Active = null;

    /**
     * @param PhoneNumberHistory $PhoneNumberHistory
     * @param typeCardMerchantType $Type
     * @param typeCreditCardNumber $Number
     * @param gYearMonth $ExpDate
     * @param anonymous903 $Name
     * @param anonymous904 $CVV
     * @param anonymous905 $ApprovalCode
     * @param string $ExtendedPayment
     * @param string $CustomerReference
     * @param boolean $AcceptanceOverride
     * @param boolean $ThirdPartyPayment
     * @param string $BankName
     * @param typeCountry $BankCountryCode
     * @param boolean $ExtractIndicator
     * @param boolean $Active
     */
    public function __construct($PhoneNumberHistory = null, $Type = null, $Number = null, $ExpDate = null, $Name = null, $CVV = null, $ApprovalCode = null, $ExtendedPayment = null, $CustomerReference = null, $AcceptanceOverride = null, $ThirdPartyPayment = null, $BankName = null, $BankCountryCode = null, $ExtractIndicator = null, $Active = null)
    {
      parent::__construct($PhoneNumberHistory, $Type, $Number, $ExpDate, $Name, $CVV, $ApprovalCode);
      $this->ExtendedPayment = $ExtendedPayment;
      $this->CustomerReference = $CustomerReference;
      $this->AcceptanceOverride = $AcceptanceOverride;
      $this->ThirdPartyPayment = $ThirdPartyPayment;
      $this->BankName = $BankName;
      $this->BankCountryCode = $BankCountryCode;
      $this->ExtractIndicator = $ExtractIndicator;
      $this->Active = $Active;
    }

    /**
     * @return string
     */
    public function getExtendedPayment()
    {
      return $this->ExtendedPayment;
    }

    /**
     * @param string $ExtendedPayment
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardTypeHistory
     */
    public function setExtendedPayment($ExtendedPayment)
    {
      $this->ExtendedPayment = $ExtendedPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
      return $this->CustomerReference;
    }

    /**
     * @param string $CustomerReference
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardTypeHistory
     */
    public function setCustomerReference($CustomerReference)
    {
      $this->CustomerReference = $CustomerReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAcceptanceOverride()
    {
      return $this->AcceptanceOverride;
    }

    /**
     * @param boolean $AcceptanceOverride
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardTypeHistory
     */
    public function setAcceptanceOverride($AcceptanceOverride)
    {
      $this->AcceptanceOverride = $AcceptanceOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThirdPartyPayment()
    {
      return $this->ThirdPartyPayment;
    }

    /**
     * @param boolean $ThirdPartyPayment
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardTypeHistory
     */
    public function setThirdPartyPayment($ThirdPartyPayment)
    {
      $this->ThirdPartyPayment = $ThirdPartyPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->BankName;
    }

    /**
     * @param string $BankName
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardTypeHistory
     */
    public function setBankName($BankName)
    {
      $this->BankName = $BankName;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getBankCountryCode()
    {
      return $this->BankCountryCode;
    }

    /**
     * @param typeCountry $BankCountryCode
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardTypeHistory
     */
    public function setBankCountryCode($BankCountryCode)
    {
      $this->BankCountryCode = $BankCountryCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExtractIndicator()
    {
      return $this->ExtractIndicator;
    }

    /**
     * @param boolean $ExtractIndicator
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardTypeHistory
     */
    public function setExtractIndicator($ExtractIndicator)
    {
      $this->ExtractIndicator = $ExtractIndicator;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->Active;
    }

    /**
     * @param boolean $Active
     * @return \FilippoToso\Travelport\UProfile\typeCreditCardTypeHistory
     */
    public function setActive($Active)
    {
      $this->Active = $Active;
      return $this;
    }

}
