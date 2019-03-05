<?php

namespace FilippoToso\Travelport\Air;

class BaseLowFareSearchReq extends BaseAirSearchReq
{

    /**
     * @var SearchPassenger $SearchPassenger
     */
    protected $SearchPassenger = null;

    /**
     * @var AirPricingModifiers $AirPricingModifiers
     */
    protected $AirPricingModifiers = null;

    /**
     * @var Enumeration $Enumeration
     */
    protected $Enumeration = null;

    /**
     * @var AirExchangeModifiers $AirExchangeModifiers
     */
    protected $AirExchangeModifiers = null;

    /**
     * @var FlexExploreModifiers $FlexExploreModifiers
     */
    protected $FlexExploreModifiers = null;

    /**
     * @var PCC $PCC
     */
    protected $PCC = null;

    /**
     * @var FareRulesFilterCategory $FareRulesFilterCategory
     */
    protected $FareRulesFilterCategory = null;

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var boolean $EnablePointToPointSearch
     */
    protected $EnablePointToPointSearch = null;

    /**
     * @var boolean $EnablePointToPointAlternates
     */
    protected $EnablePointToPointAlternates = null;

    /**
     * @var int $MaxNumberOfExpertSolutions
     */
    protected $MaxNumberOfExpertSolutions = null;

    /**
     * @var boolean $SolutionResult
     */
    protected $SolutionResult = null;

    /**
     * @var boolean $PreferCompleteItinerary
     */
    protected $PreferCompleteItinerary = null;

    /**
     * @var anonymous1185 $MetaOptionIdentifier
     */
    protected $MetaOptionIdentifier = null;

    /**
     * @var boolean $ReturnUpsellFare
     */
    protected $ReturnUpsellFare = null;

    /**
     * @var boolean $IncludeFareInfoMessages
     */
    protected $IncludeFareInfoMessages = null;

    /**
     * @var boolean $ReturnBrandedFares
     */
    protected $ReturnBrandedFares = null;

    /**
     * @var boolean $MultiGDSSearch
     */
    protected $MultiGDSSearch = null;

    /**
     * @var boolean $ReturnMM
     */
    protected $ReturnMM = null;

    /**
     * @var string $CheckOBFees
     */
    protected $CheckOBFees = null;

    /**
     * @var anonymous1186 $NSCC
     */
    protected $NSCC = null;

    /**
     * @var boolean $FareInfoRules
     */
    protected $FareInfoRules = null;

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
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $NextResultReference = null, $SearchAirLeg = null, $SearchSpecificAirSegment = null, $AirSearchModifiers = null, $SplitTicketingSearch = null, $JourneyData = null, $SearchPassenger = null, $AirPricingModifiers = null, $Enumeration = null, $AirExchangeModifiers = null, $FlexExploreModifiers = null, $PCC = null, $FareRulesFilterCategory = null, $FormOfPayment = null, $EnablePointToPointSearch = null, $EnablePointToPointAlternates = null, $MaxNumberOfExpertSolutions = null, $SolutionResult = null, $PreferCompleteItinerary = null, $MetaOptionIdentifier = null, $ReturnUpsellFare = null, $IncludeFareInfoMessages = null, $ReturnBrandedFares = null, $MultiGDSSearch = null, $ReturnMM = null, $CheckOBFees = null, $NSCC = null, $FareInfoRules = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $NextResultReference, $SearchAirLeg, $SearchSpecificAirSegment, $AirSearchModifiers, $SplitTicketingSearch, $JourneyData);
      $this->SearchPassenger = $SearchPassenger;
      $this->AirPricingModifiers = $AirPricingModifiers;
      $this->Enumeration = $Enumeration;
      $this->AirExchangeModifiers = $AirExchangeModifiers;
      $this->FlexExploreModifiers = $FlexExploreModifiers;
      $this->PCC = $PCC;
      $this->FareRulesFilterCategory = $FareRulesFilterCategory;
      $this->FormOfPayment = $FormOfPayment;
      $this->EnablePointToPointSearch = $EnablePointToPointSearch;
      $this->EnablePointToPointAlternates = $EnablePointToPointAlternates;
      $this->MaxNumberOfExpertSolutions = $MaxNumberOfExpertSolutions;
      $this->SolutionResult = $SolutionResult;
      $this->PreferCompleteItinerary = $PreferCompleteItinerary;
      $this->MetaOptionIdentifier = $MetaOptionIdentifier;
      $this->ReturnUpsellFare = $ReturnUpsellFare;
      $this->IncludeFareInfoMessages = $IncludeFareInfoMessages;
      $this->ReturnBrandedFares = $ReturnBrandedFares;
      $this->MultiGDSSearch = $MultiGDSSearch;
      $this->ReturnMM = $ReturnMM;
      $this->CheckOBFees = $CheckOBFees;
      $this->NSCC = $NSCC;
      $this->FareInfoRules = $FareInfoRules;
    }

    /**
     * @return SearchPassenger
     */
    public function getSearchPassenger()
    {
      return $this->SearchPassenger;
    }

    /**
     * @param SearchPassenger $SearchPassenger
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setSearchPassenger($SearchPassenger)
    {
      $this->SearchPassenger = $SearchPassenger;
      return $this;
    }

    /**
     * @return AirPricingModifiers
     */
    public function getAirPricingModifiers()
    {
      return $this->AirPricingModifiers;
    }

    /**
     * @param AirPricingModifiers $AirPricingModifiers
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setAirPricingModifiers($AirPricingModifiers)
    {
      $this->AirPricingModifiers = $AirPricingModifiers;
      return $this;
    }

    /**
     * @return Enumeration
     */
    public function getEnumeration()
    {
      return $this->Enumeration;
    }

    /**
     * @param Enumeration $Enumeration
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setEnumeration($Enumeration)
    {
      $this->Enumeration = $Enumeration;
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
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setAirExchangeModifiers($AirExchangeModifiers)
    {
      $this->AirExchangeModifiers = $AirExchangeModifiers;
      return $this;
    }

    /**
     * @return FlexExploreModifiers
     */
    public function getFlexExploreModifiers()
    {
      return $this->FlexExploreModifiers;
    }

    /**
     * @param FlexExploreModifiers $FlexExploreModifiers
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setFlexExploreModifiers($FlexExploreModifiers)
    {
      $this->FlexExploreModifiers = $FlexExploreModifiers;
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
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setPCC($PCC)
    {
      $this->PCC = $PCC;
      return $this;
    }

    /**
     * @return FareRulesFilterCategory
     */
    public function getFareRulesFilterCategory()
    {
      return $this->FareRulesFilterCategory;
    }

    /**
     * @param FareRulesFilterCategory $FareRulesFilterCategory
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setFareRulesFilterCategory($FareRulesFilterCategory)
    {
      $this->FareRulesFilterCategory = $FareRulesFilterCategory;
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
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnablePointToPointSearch()
    {
      return $this->EnablePointToPointSearch;
    }

    /**
     * @param boolean $EnablePointToPointSearch
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setEnablePointToPointSearch($EnablePointToPointSearch)
    {
      $this->EnablePointToPointSearch = $EnablePointToPointSearch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnablePointToPointAlternates()
    {
      return $this->EnablePointToPointAlternates;
    }

    /**
     * @param boolean $EnablePointToPointAlternates
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setEnablePointToPointAlternates($EnablePointToPointAlternates)
    {
      $this->EnablePointToPointAlternates = $EnablePointToPointAlternates;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumberOfExpertSolutions()
    {
      return $this->MaxNumberOfExpertSolutions;
    }

    /**
     * @param int $MaxNumberOfExpertSolutions
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setMaxNumberOfExpertSolutions($MaxNumberOfExpertSolutions)
    {
      $this->MaxNumberOfExpertSolutions = $MaxNumberOfExpertSolutions;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSolutionResult()
    {
      return $this->SolutionResult;
    }

    /**
     * @param boolean $SolutionResult
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setSolutionResult($SolutionResult)
    {
      $this->SolutionResult = $SolutionResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferCompleteItinerary()
    {
      return $this->PreferCompleteItinerary;
    }

    /**
     * @param boolean $PreferCompleteItinerary
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setPreferCompleteItinerary($PreferCompleteItinerary)
    {
      $this->PreferCompleteItinerary = $PreferCompleteItinerary;
      return $this;
    }

    /**
     * @return anonymous1185
     */
    public function getMetaOptionIdentifier()
    {
      return $this->MetaOptionIdentifier;
    }

    /**
     * @param anonymous1185 $MetaOptionIdentifier
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setMetaOptionIdentifier($MetaOptionIdentifier)
    {
      $this->MetaOptionIdentifier = $MetaOptionIdentifier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnUpsellFare()
    {
      return $this->ReturnUpsellFare;
    }

    /**
     * @param boolean $ReturnUpsellFare
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setReturnUpsellFare($ReturnUpsellFare)
    {
      $this->ReturnUpsellFare = $ReturnUpsellFare;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeFareInfoMessages()
    {
      return $this->IncludeFareInfoMessages;
    }

    /**
     * @param boolean $IncludeFareInfoMessages
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setIncludeFareInfoMessages($IncludeFareInfoMessages)
    {
      $this->IncludeFareInfoMessages = $IncludeFareInfoMessages;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnBrandedFares()
    {
      return $this->ReturnBrandedFares;
    }

    /**
     * @param boolean $ReturnBrandedFares
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setReturnBrandedFares($ReturnBrandedFares)
    {
      $this->ReturnBrandedFares = $ReturnBrandedFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMultiGDSSearch()
    {
      return $this->MultiGDSSearch;
    }

    /**
     * @param boolean $MultiGDSSearch
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setMultiGDSSearch($MultiGDSSearch)
    {
      $this->MultiGDSSearch = $MultiGDSSearch;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnMM()
    {
      return $this->ReturnMM;
    }

    /**
     * @param boolean $ReturnMM
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setReturnMM($ReturnMM)
    {
      $this->ReturnMM = $ReturnMM;
      return $this;
    }

    /**
     * @return string
     */
    public function getCheckOBFees()
    {
      return $this->CheckOBFees;
    }

    /**
     * @param string $CheckOBFees
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setCheckOBFees($CheckOBFees)
    {
      $this->CheckOBFees = $CheckOBFees;
      return $this;
    }

    /**
     * @return anonymous1186
     */
    public function getNSCC()
    {
      return $this->NSCC;
    }

    /**
     * @param anonymous1186 $NSCC
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setNSCC($NSCC)
    {
      $this->NSCC = $NSCC;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFareInfoRules()
    {
      return $this->FareInfoRules;
    }

    /**
     * @param boolean $FareInfoRules
     * @return \FilippoToso\Travelport\Air\BaseLowFareSearchReq
     */
    public function setFareInfoRules($FareInfoRules)
    {
      $this->FareInfoRules = $FareInfoRules;
      return $this;
    }

}
