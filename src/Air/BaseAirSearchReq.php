<?php

namespace FilippoToso\Travelport\Air;

class BaseAirSearchReq extends BaseCoreSearchReq
{

    /**
     * @var SearchAirLeg $SearchAirLeg
     */
    protected $SearchAirLeg = null;

    /**
     * @var SearchSpecificAirSegment $SearchSpecificAirSegment
     */
    protected $SearchSpecificAirSegment = null;

    /**
     * @var AirSearchModifiers $AirSearchModifiers
     */
    protected $AirSearchModifiers = null;

    /**
     * @var SplitTicketingSearch $SplitTicketingSearch
     */
    protected $SplitTicketingSearch = null;

    /**
     * @var JourneyData $JourneyData
     */
    protected $JourneyData = null;

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
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $NextResultReference = null, $SearchAirLeg = null, $SearchSpecificAirSegment = null, $AirSearchModifiers = null, $SplitTicketingSearch = null, $JourneyData = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $NextResultReference);
      $this->SearchAirLeg = $SearchAirLeg;
      $this->SearchSpecificAirSegment = $SearchSpecificAirSegment;
      $this->AirSearchModifiers = $AirSearchModifiers;
      $this->SplitTicketingSearch = $SplitTicketingSearch;
      $this->JourneyData = $JourneyData;
    }

    /**
     * @return SearchAirLeg
     */
    public function getSearchAirLeg()
    {
      return $this->SearchAirLeg;
    }

    /**
     * @param SearchAirLeg $SearchAirLeg
     * @return \FilippoToso\Travelport\Air\BaseAirSearchReq
     */
    public function setSearchAirLeg($SearchAirLeg)
    {
      $this->SearchAirLeg = $SearchAirLeg;
      return $this;
    }

    /**
     * @return SearchSpecificAirSegment
     */
    public function getSearchSpecificAirSegment()
    {
      return $this->SearchSpecificAirSegment;
    }

    /**
     * @param SearchSpecificAirSegment $SearchSpecificAirSegment
     * @return \FilippoToso\Travelport\Air\BaseAirSearchReq
     */
    public function setSearchSpecificAirSegment($SearchSpecificAirSegment)
    {
      $this->SearchSpecificAirSegment = $SearchSpecificAirSegment;
      return $this;
    }

    /**
     * @return AirSearchModifiers
     */
    public function getAirSearchModifiers()
    {
      return $this->AirSearchModifiers;
    }

    /**
     * @param AirSearchModifiers $AirSearchModifiers
     * @return \FilippoToso\Travelport\Air\BaseAirSearchReq
     */
    public function setAirSearchModifiers($AirSearchModifiers)
    {
      $this->AirSearchModifiers = $AirSearchModifiers;
      return $this;
    }

    /**
     * @return SplitTicketingSearch
     */
    public function getSplitTicketingSearch()
    {
      return $this->SplitTicketingSearch;
    }

    /**
     * @param SplitTicketingSearch $SplitTicketingSearch
     * @return \FilippoToso\Travelport\Air\BaseAirSearchReq
     */
    public function setSplitTicketingSearch($SplitTicketingSearch)
    {
      $this->SplitTicketingSearch = $SplitTicketingSearch;
      return $this;
    }

    /**
     * @return JourneyData
     */
    public function getJourneyData()
    {
      return $this->JourneyData;
    }

    /**
     * @param JourneyData $JourneyData
     * @return \FilippoToso\Travelport\Air\BaseAirSearchReq
     */
    public function setJourneyData($JourneyData)
    {
      $this->JourneyData = $JourneyData;
      return $this;
    }

}
