<?php

namespace FilippoToso\Travelport\Air;

class ScheduleSearchReq extends AirSearchReq
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
     * @param OverridePCC $OverridePCC
     * @param boolean $RetrieveProviderReservationDetails
     * @param NextResultReference $NextResultReference
     * @param PointOfCommencement $PointOfCommencement
     * @param SearchAirLeg $SearchAirLeg
     * @param SearchSpecificAirSegment $SearchSpecificAirSegment
     * @param AirSearchModifiers $AirSearchModifiers
     * @param JourneyData $JourneyData
     */
    public function __construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference, $PointOfCommencement, $SearchAirLeg, $SearchSpecificAirSegment, $AirSearchModifiers, $JourneyData)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference, $PointOfCommencement, $SearchAirLeg, $SearchSpecificAirSegment, $AirSearchModifiers, $JourneyData);
    }

}
