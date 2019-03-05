<?php

namespace FilippoToso\Travelport\Air;

class LowFareSearchAsynchReq extends BaseLowFareSearchReq
{

    /**
     * @var AirSearchAsynchModifiers $AirSearchAsynchModifiers
     */
    protected $AirSearchAsynchModifiers = null;

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
     * @param NextResultReference $NextResultReference
     * @param SearchAirLeg $SearchAirLeg
     * @param SearchSpecificAirSegment $SearchSpecificAirSegment
     * @param AirSearchModifiers $AirSearchModifiers
     * @param SplitTicketingSearch $SplitTicketingSearch
     * @param JourneyData $JourneyData
     * @param SearchPassenger $SearchPassenger
     * @param AirPricingModifiers $AirPricingModifiers
     * @param Enumeration $Enumeration
     * @param AirExchangeModifiers $AirExchangeModifiers
     * @param FlexExploreModifiers $FlexExploreModifiers
     * @param PCC $PCC
     * @param FareRulesFilterCategory $FareRulesFilterCategory
     * @param FormOfPayment $FormOfPayment
     * @param boolean $EnablePointToPointSearch
     * @param boolean $EnablePointToPointAlternates
     * @param int $MaxNumberOfExpertSolutions
     * @param boolean $SolutionResult
     * @param boolean $PreferCompleteItinerary
     * @param anonymous1185 $MetaOptionIdentifier
     * @param boolean $ReturnUpsellFare
     * @param boolean $IncludeFareInfoMessages
     * @param boolean $ReturnBrandedFares
     * @param boolean $MultiGDSSearch
     * @param boolean $ReturnMM
     * @param string $CheckOBFees
     * @param anonymous1186 $NSCC
     * @param boolean $FareInfoRules
     * @param AirSearchAsynchModifiers $AirSearchAsynchModifiers
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $NextResultReference = null, $SearchAirLeg = null, $SearchSpecificAirSegment = null, $AirSearchModifiers = null, $SplitTicketingSearch = null, $JourneyData = null, $SearchPassenger = null, $AirPricingModifiers = null, $Enumeration = null, $AirExchangeModifiers = null, $FlexExploreModifiers = null, $PCC = null, $FareRulesFilterCategory = null, $FormOfPayment = null, $EnablePointToPointSearch = null, $EnablePointToPointAlternates = null, $MaxNumberOfExpertSolutions = null, $SolutionResult = null, $PreferCompleteItinerary = null, $MetaOptionIdentifier = null, $ReturnUpsellFare = null, $IncludeFareInfoMessages = null, $ReturnBrandedFares = null, $MultiGDSSearch = null, $ReturnMM = null, $CheckOBFees = null, $NSCC = null, $FareInfoRules = null, $AirSearchAsynchModifiers = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $NextResultReference, $SearchAirLeg, $SearchSpecificAirSegment, $AirSearchModifiers, $SplitTicketingSearch, $JourneyData, $SearchPassenger, $AirPricingModifiers, $Enumeration, $AirExchangeModifiers, $FlexExploreModifiers, $PCC, $FareRulesFilterCategory, $FormOfPayment, $EnablePointToPointSearch, $EnablePointToPointAlternates, $MaxNumberOfExpertSolutions, $SolutionResult, $PreferCompleteItinerary, $MetaOptionIdentifier, $ReturnUpsellFare, $IncludeFareInfoMessages, $ReturnBrandedFares, $MultiGDSSearch, $ReturnMM, $CheckOBFees, $NSCC, $FareInfoRules);
      $this->AirSearchAsynchModifiers = $AirSearchAsynchModifiers;
    }

    /**
     * @return AirSearchAsynchModifiers
     */
    public function getAirSearchAsynchModifiers()
    {
      return $this->AirSearchAsynchModifiers;
    }

    /**
     * @param AirSearchAsynchModifiers $AirSearchAsynchModifiers
     * @return \FilippoToso\Travelport\Air\LowFareSearchAsynchReq
     */
    public function setAirSearchAsynchModifiers($AirSearchAsynchModifiers)
    {
      $this->AirSearchAsynchModifiers = $AirSearchAsynchModifiers;
      return $this;
    }

}
