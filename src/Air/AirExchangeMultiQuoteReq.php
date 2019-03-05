<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeMultiQuoteReq extends BaseAirExchangeMultiQuoteReq
{

    /**
     * @var string $Type
     */
    protected $Type = null;

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
     * @param string $Type
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $TicketNumber = null, $AirPricingSolution = null, $RepricingModifiers = null, $OriginalItineraryDetails = null, $OverridePCC = null, $Type = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $TicketNumber, $AirPricingSolution, $RepricingModifiers, $OriginalItineraryDetails, $OverridePCC);
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Air\AirExchangeMultiQuoteReq
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
