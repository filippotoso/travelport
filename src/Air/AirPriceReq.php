<?php

namespace FilippoToso\Travelport\Air;

class AirPriceReq extends BaseAirPriceReq
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
     * @param AirItinerary $AirItinerary
     * @param AirPricingModifiers $AirPricingModifiers
     * @param SearchPassenger $SearchPassenger
     * @param AirPricingCommand $AirPricingCommand
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @param OptionalServices $OptionalServices
     * @param FormOfPayment $FormOfPayment
     * @param PCC $PCC
     * @param SSR $SSR
     * @param string $CheckOBFees
     * @param typeFareRuleType $FareRuleType
     * @param typeSupplierCode $SupplierCode
     * @param date $TicketDate
     * @param boolean $CheckFlightDetails
     * @param boolean $ReturnMM
     * @param anonymous1147 $NSCC
     * @param boolean $SplitPricing
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $AirItinerary = null, $AirPricingModifiers = null, $SearchPassenger = null, $AirPricingCommand = null, $AirReservationLocatorCode = null, $OptionalServices = null, $FormOfPayment = null, $PCC = null, $SSR = null, $CheckOBFees = null, $FareRuleType = null, $SupplierCode = null, $TicketDate = null, $CheckFlightDetails = null, $ReturnMM = null, $NSCC = null, $SplitPricing = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $AirItinerary, $AirPricingModifiers, $SearchPassenger, $AirPricingCommand, $AirReservationLocatorCode, $OptionalServices, $FormOfPayment, $PCC, $SSR, $CheckOBFees, $FareRuleType, $SupplierCode, $TicketDate, $CheckFlightDetails, $ReturnMM, $NSCC, $SplitPricing);
    }

}
