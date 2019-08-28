<?php

namespace FilippoToso\Travelport\Air;

class BaseAirExchangeQuoteReq extends BaseCoreReq
{

    /**
     * @var StringLength1to13 $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var ProviderReservationInfo $ProviderReservationInfo
     */
    protected $ProviderReservationInfo = null;

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var AirExchangeModifiers $AirExchangeModifiers
     */
    protected $AirExchangeModifiers = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var OptionalServices $OptionalServices
     */
    protected $OptionalServices = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var RepricingModifiers $RepricingModifiers
     */
    protected $RepricingModifiers = null;

    /**
     * @var OriginalItineraryDetails $OriginalItineraryDetails
     */
    protected $OriginalItineraryDetails = null;

    /**
     * @var PCC $PCC
     */
    protected $PCC = null;

    /**
     * @var typeFareRuleType $FareRuleType
     */
    protected $FareRuleType = null;

    /**
     * @param BillingPointOfSaleInfo $BillingPointOfSaleInfo
     * @param AgentIDOverride $AgentIDOverride
     * @param string $TerminalSessionInfo
     * @param string $TraceId
     * @param string $TokenId
     * @param string $AuthorizedBy
     * @param typeBranchCode $TargetBranch
     * @param typeLoggingLevel $OverrideLogging
     * @param language $LanguageCode
     * @param StringLength1to13 $TicketNumber
     * @param AirPricingSolution $AirPricingSolution
     * @param AirExchangeModifiers $AirExchangeModifiers
     * @param HostToken $HostToken
     * @param OptionalServices $OptionalServices
     * @param FormOfPayment $FormOfPayment
     * @param RepricingModifiers $RepricingModifiers
     * @param OriginalItineraryDetails $OriginalItineraryDetails
     * @param PCC $PCC
     * @param typeFareRuleType $FareRuleType
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $TicketNumber = null, $AirPricingSolution = null, $AirExchangeModifiers = null, $HostToken = null, $OptionalServices = null, $FormOfPayment = null, $RepricingModifiers = null, $OriginalItineraryDetails = null, $PCC = null, $FareRuleType = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode);
      $this->TicketNumber = $TicketNumber;
      $this->AirPricingSolution = $AirPricingSolution;
      $this->AirExchangeModifiers = $AirExchangeModifiers;
      $this->HostToken = $HostToken;
      $this->OptionalServices = $OptionalServices;
      $this->FormOfPayment = $FormOfPayment;
      $this->RepricingModifiers = $RepricingModifiers;
      $this->OriginalItineraryDetails = $OriginalItineraryDetails;
      $this->PCC = $PCC;
      $this->FareRuleType = $FareRuleType;
    }

    /**
     * @return StringLength1to13
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param StringLength1to13 $TicketNumber
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

    /**
     * @return ProviderReservationInfo
     */
    public function getProviderReservationInfo()
    {
      return $this->ProviderReservationInfo;
    }

    /**
     * @param ProviderReservationInfo $ProviderReservationInfo
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setProviderReservationInfo($ProviderReservationInfo)
    {
      $this->ProviderReservationInfo = $ProviderReservationInfo;
      return $this;
    }

    /**
     * @return AirPricingSolution
     */
    public function getAirPricingSolution()
    {
      return $this->AirPricingSolution;
    }

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

    /**
     * @return AirExchangeModifiers
     */
    public function getAirExchangeModifiers()
    {
      return $this->AirExchangeModifiers;
    }

    /**
     * @param AirExchangeModifiers $AirExchangeModifiers
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setAirExchangeModifiers($AirExchangeModifiers)
    {
      $this->AirExchangeModifiers = $AirExchangeModifiers;
      return $this;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return OptionalServices
     */
    public function getOptionalServices()
    {
      return $this->OptionalServices;
    }

    /**
     * @param OptionalServices $OptionalServices
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setOptionalServices($OptionalServices)
    {
      $this->OptionalServices = $OptionalServices;
      return $this;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return RepricingModifiers
     */
    public function getRepricingModifiers()
    {
      return $this->RepricingModifiers;
    }

    /**
     * @param RepricingModifiers $RepricingModifiers
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setRepricingModifiers($RepricingModifiers)
    {
      $this->RepricingModifiers = $RepricingModifiers;
      return $this;
    }

    /**
     * @return OriginalItineraryDetails
     */
    public function getOriginalItineraryDetails()
    {
      return $this->OriginalItineraryDetails;
    }

    /**
     * @param OriginalItineraryDetails $OriginalItineraryDetails
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setOriginalItineraryDetails($OriginalItineraryDetails)
    {
      $this->OriginalItineraryDetails = $OriginalItineraryDetails;
      return $this;
    }

    /**
     * @return PCC
     */
    public function getPCC()
    {
      return $this->PCC;
    }

    /**
     * @param PCC $PCC
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setPCC($PCC)
    {
      $this->PCC = $PCC;
      return $this;
    }

    /**
     * @return typeFareRuleType
     */
    public function getFareRuleType()
    {
      return $this->FareRuleType;
    }

    /**
     * @param typeFareRuleType $FareRuleType
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeQuoteReq
     */
    public function setFareRuleType($FareRuleType)
    {
      $this->FareRuleType = $FareRuleType;
      return $this;
    }

}
