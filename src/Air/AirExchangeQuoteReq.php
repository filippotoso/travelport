<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeQuoteReq extends BaseAirExchangeQuoteReq
{

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
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $TicketNumber, $AirPricingSolution, $AirExchangeModifiers, $HostToken, $OptionalServices, $FormOfPayment, $RepricingModifiers, $OriginalItineraryDetails, $PCC, $FareRuleType);
    }

}
