<?php

namespace FilippoToso\Travelport\Air;

class AirSearchReq extends BaseSearchReq
{

    /**
     * @var PointOfCommencement $PointOfCommencement
     */
    protected $PointOfCommencement = null;

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
     * @param OverridePCC $OverridePCC
     * @param boolean $RetrieveProviderReservationDetails
     * @param NextResultReference $NextResultReference
     * @param PointOfCommencement $PointOfCommencement
     * @param SearchAirLeg $SearchAirLeg
     * @param SearchSpecificAirSegment $SearchSpecificAirSegment
     * @param AirSearchModifiers $AirSearchModifiers
     * @param JourneyData $JourneyData
     */
    public function __construct($BillingPointOfSaleInfo = null, $AgentIDOverride = null, $TerminalSessionInfo = null, $TraceId = null, $TokenId = null, $AuthorizedBy = null, $TargetBranch = null, $OverrideLogging = null, $LanguageCode = null, $OverridePCC = null, $RetrieveProviderReservationDetails = null, $NextResultReference = null, $PointOfCommencement = null, $SearchAirLeg = null, $SearchSpecificAirSegment = null, $AirSearchModifiers = null, $JourneyData = null)
    {
      parent::__construct($BillingPointOfSaleInfo, $AgentIDOverride, $TerminalSessionInfo, $TraceId, $TokenId, $AuthorizedBy, $TargetBranch, $OverrideLogging, $LanguageCode, $OverridePCC, $RetrieveProviderReservationDetails, $NextResultReference);
      $this->PointOfCommencement = $PointOfCommencement;
      $this->SearchAirLeg = $SearchAirLeg;
      $this->SearchSpecificAirSegment = $SearchSpecificAirSegment;
      $this->AirSearchModifiers = $AirSearchModifiers;
      $this->JourneyData = $JourneyData;
    }

    /**
     * @return PointOfCommencement
     */
    public function getPointOfCommencement()
    {
      return $this->PointOfCommencement;
    }

    /**
     * @param PointOfCommencement $PointOfCommencement
     * @return \FilippoToso\Travelport\Air\AirSearchReq
     */
    public function setPointOfCommencement($PointOfCommencement)
    {
      $this->PointOfCommencement = $PointOfCommencement;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\AirSearchReq
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
     * @return \FilippoToso\Travelport\Air\AirSearchReq
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
     * @return \FilippoToso\Travelport\Air\AirSearchReq
     */
    public function setAirSearchModifiers($AirSearchModifiers)
    {
      $this->AirSearchModifiers = $AirSearchModifiers;
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
     * @return \FilippoToso\Travelport\Air\AirSearchReq
     */
    public function setJourneyData($JourneyData)
    {
      $this->JourneyData = $JourneyData;
      return $this;
    }

}
