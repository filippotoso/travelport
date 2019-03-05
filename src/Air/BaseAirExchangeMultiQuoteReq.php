<?php

namespace FilippoToso\Travelport\Air;

class BaseAirExchangeMultiQuoteReq extends BaseCoreReq
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
     * @var RepricingModifiers $RepricingModifiers
     */
    protected $RepricingModifiers = null;

    /**
     * @var OriginalItineraryDetails $OriginalItineraryDetails
     */
    protected $OriginalItineraryDetails = null;

    /**
     * @var OverridePCC $OverridePCC
     */
    protected $OverridePCC = null;

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
     * @param RepricingModifiers $RepricingModifiers
     * @param OriginalItineraryDetails $OriginalItineraryDetails
     * @param OverridePCC $OverridePCC
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $TicketNumber = null, $AirPricingSolution = null, $RepricingModifiers = null, $OriginalItineraryDetails = null, $OverridePCC = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode);
      $this->TicketNumber = $TicketNumber;
      $this->AirPricingSolution = $AirPricingSolution;
      $this->RepricingModifiers = $RepricingModifiers;
      $this->OriginalItineraryDetails = $OriginalItineraryDetails;
      $this->OverridePCC = $OverridePCC;
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
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeMultiQuoteReq
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
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeMultiQuoteReq
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
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeMultiQuoteReq
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
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
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeMultiQuoteReq
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
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeMultiQuoteReq
     */
    public function setOriginalItineraryDetails($OriginalItineraryDetails)
    {
      $this->OriginalItineraryDetails = $OriginalItineraryDetails;
      return $this;
    }

    /**
     * @return OverridePCC
     */
    public function getOverridePCC()
    {
      return $this->OverridePCC;
    }

    /**
     * @param OverridePCC $OverridePCC
     * @return \FilippoToso\Travelport\Air\BaseAirExchangeMultiQuoteReq
     */
    public function setOverridePCC($OverridePCC)
    {
      $this->OverridePCC = $OverridePCC;
      return $this;
    }

}
