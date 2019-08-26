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
     * @param anonymous1145 $NSCC
     * @param boolean $SplitPricing
     * @param boolean $IgnoreAvailability
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $AirItinerary, $AirPricingModifiers, $SearchPassenger, $AirPricingCommand, $AirReservationLocatorCode, $OptionalServices, $FormOfPayment, $PCC, $SSR, $CheckOBFees, $FareRuleType, $SupplierCode, $TicketDate, $CheckFlightDetails, $ReturnMM, $NSCC, $SplitPricing, $IgnoreAvailability)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $AirItinerary, $AirPricingModifiers, $SearchPassenger, $AirPricingCommand, $AirReservationLocatorCode, $OptionalServices, $FormOfPayment, $PCC, $SSR, $CheckOBFees, $FareRuleType, $SupplierCode, $TicketDate, $CheckFlightDetails, $ReturnMM, $NSCC, $SplitPricing, $IgnoreAvailability);
    }

}
