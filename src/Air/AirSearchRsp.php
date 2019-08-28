<?php

namespace FilippoToso\Travelport\Air;

class AirSearchRsp extends BaseAvailabilitySearchRsp
{

    /**
     * @var FareNoteList $FareNoteList
     */
    protected $FareNoteList = null;

    /**
     * @var ExpertSolutionList $ExpertSolutionList
     */
    protected $ExpertSolutionList = null;

    /**
     * @var RouteList $RouteList
     */
    protected $RouteList = null;

    /**
     * @var AlternateRouteList $AlternateRouteList
     */
    protected $AlternateRouteList = null;

    /**
     * @var AlternateLocationDistanceList $AlternateLocationDistanceList
     */
    protected $AlternateLocationDistanceList = null;

    /**
     * @var FareInfoMessage $FareInfoMessage
     */
    protected $FareInfoMessage = null;

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var AirPricePointList $AirPricePointList
     */
    protected $AirPricePointList = null;

    /**
     * @var RailSegmentList $RailSegmentList
     */
    protected $RailSegmentList = null;

    /**
     * @var RailJourneyList $RailJourneyList
     */
    protected $RailJourneyList = null;

    /**
     * @var RailFareNoteList $RailFareNoteList
     */
    protected $RailFareNoteList = null;

    /**
     * @var RailFareIDList $RailFareIDList
     */
    protected $RailFareIDList = null;

    /**
     * @var RailFareList $RailFareList
     */
    protected $RailFareList = null;

    /**
     * @var RailPricingSolution $RailPricingSolution
     */
    protected $RailPricingSolution = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param NextResultReference $NextResultReference
     * @param FlightDetailsList $FlightDetailsList
     * @param AirSegmentList $AirSegmentList
     * @param FareInfoList $FareInfoList
     * @param FareRemarkList $FareRemarkList
     * @param AirItinerarySolution $AirItinerarySolution
     * @param HostTokenList $HostTokenList
     * @param APISRequirementsList $APISRequirementsList
     * @param typeDistance $DistanceUnits
     * @param FareNoteList $FareNoteList
     * @param ExpertSolutionList $ExpertSolutionList
     * @param RouteList $RouteList
     * @param AlternateRouteList $AlternateRouteList
     * @param AlternateLocationDistanceList $AlternateLocationDistanceList
     * @param FareInfoMessage $FareInfoMessage
     * @param AirPricingSolution $AirPricingSolution
     * @param AirPricePointList $AirPricePointList
     * @param RailSegmentList $RailSegmentList
     * @param RailJourneyList $RailJourneyList
     * @param RailFareNoteList $RailFareNoteList
     * @param RailFareIDList $RailFareIDList
     * @param RailFareList $RailFareList
     * @param RailPricingSolution $RailPricingSolution
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $FlightDetailsList = null, $AirSegmentList = null, $FareInfoList = null, $FareRemarkList = null, $AirItinerarySolution = null, $HostTokenList = null, $APISRequirementsList = null, $DistanceUnits = null, $FareNoteList = null, $ExpertSolutionList = null, $RouteList = null, $AlternateRouteList = null, $AlternateLocationDistanceList = null, $FareInfoMessage = null, $AirPricingSolution = null, $AirPricePointList = null, $RailSegmentList = null, $RailJourneyList = null, $RailFareNoteList = null, $RailFareIDList = null, $RailFareList = null, $RailPricingSolution = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference, $FlightDetailsList, $AirSegmentList, $FareInfoList, $FareRemarkList, $AirItinerarySolution, $HostTokenList, $APISRequirementsList, $DistanceUnits);
      $this->FareNoteList = $FareNoteList;
      $this->ExpertSolutionList = $ExpertSolutionList;
      $this->RouteList = $RouteList;
      $this->AlternateRouteList = $AlternateRouteList;
      $this->AlternateLocationDistanceList = $AlternateLocationDistanceList;
      $this->FareInfoMessage = $FareInfoMessage;
      $this->AirPricingSolution = $AirPricingSolution;
      $this->AirPricePointList = $AirPricePointList;
      $this->RailSegmentList = $RailSegmentList;
      $this->RailJourneyList = $RailJourneyList;
      $this->RailFareNoteList = $RailFareNoteList;
      $this->RailFareIDList = $RailFareIDList;
      $this->RailFareList = $RailFareList;
      $this->RailPricingSolution = $RailPricingSolution;
    }

    /**
     * @return FareNoteList
     */
    public function getFareNoteList()
    {
      return $this->FareNoteList;
    }

    /**
     * @param FareNoteList $FareNoteList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setFareNoteList($FareNoteList)
    {
      $this->FareNoteList = $FareNoteList;
      return $this;
    }

    /**
     * @return ExpertSolutionList
     */
    public function getExpertSolutionList()
    {
      return $this->ExpertSolutionList;
    }

    /**
     * @param ExpertSolutionList $ExpertSolutionList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setExpertSolutionList($ExpertSolutionList)
    {
      $this->ExpertSolutionList = $ExpertSolutionList;
      return $this;
    }

    /**
     * @return RouteList
     */
    public function getRouteList()
    {
      return $this->RouteList;
    }

    /**
     * @param RouteList $RouteList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setRouteList($RouteList)
    {
      $this->RouteList = $RouteList;
      return $this;
    }

    /**
     * @return AlternateRouteList
     */
    public function getAlternateRouteList()
    {
      return $this->AlternateRouteList;
    }

    /**
     * @param AlternateRouteList $AlternateRouteList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setAlternateRouteList($AlternateRouteList)
    {
      $this->AlternateRouteList = $AlternateRouteList;
      return $this;
    }

    /**
     * @return AlternateLocationDistanceList
     */
    public function getAlternateLocationDistanceList()
    {
      return $this->AlternateLocationDistanceList;
    }

    /**
     * @param AlternateLocationDistanceList $AlternateLocationDistanceList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setAlternateLocationDistanceList($AlternateLocationDistanceList)
    {
      $this->AlternateLocationDistanceList = $AlternateLocationDistanceList;
      return $this;
    }

    /**
     * @return FareInfoMessage
     */
    public function getFareInfoMessage()
    {
      return $this->FareInfoMessage;
    }

    /**
     * @param FareInfoMessage $FareInfoMessage
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setFareInfoMessage($FareInfoMessage)
    {
      $this->FareInfoMessage = $FareInfoMessage;
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
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

    /**
     * @return AirPricePointList
     */
    public function getAirPricePointList()
    {
      return $this->AirPricePointList;
    }

    /**
     * @param AirPricePointList $AirPricePointList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setAirPricePointList($AirPricePointList)
    {
      $this->AirPricePointList = $AirPricePointList;
      return $this;
    }

    /**
     * @return RailSegmentList
     */
    public function getRailSegmentList()
    {
      return $this->RailSegmentList;
    }

    /**
     * @param RailSegmentList $RailSegmentList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setRailSegmentList($RailSegmentList)
    {
      $this->RailSegmentList = $RailSegmentList;
      return $this;
    }

    /**
     * @return RailJourneyList
     */
    public function getRailJourneyList()
    {
      return $this->RailJourneyList;
    }

    /**
     * @param RailJourneyList $RailJourneyList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setRailJourneyList($RailJourneyList)
    {
      $this->RailJourneyList = $RailJourneyList;
      return $this;
    }

    /**
     * @return RailFareNoteList
     */
    public function getRailFareNoteList()
    {
      return $this->RailFareNoteList;
    }

    /**
     * @param RailFareNoteList $RailFareNoteList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setRailFareNoteList($RailFareNoteList)
    {
      $this->RailFareNoteList = $RailFareNoteList;
      return $this;
    }

    /**
     * @return RailFareIDList
     */
    public function getRailFareIDList()
    {
      return $this->RailFareIDList;
    }

    /**
     * @param RailFareIDList $RailFareIDList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setRailFareIDList($RailFareIDList)
    {
      $this->RailFareIDList = $RailFareIDList;
      return $this;
    }

    /**
     * @return RailFareList
     */
    public function getRailFareList()
    {
      return $this->RailFareList;
    }

    /**
     * @param RailFareList $RailFareList
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setRailFareList($RailFareList)
    {
      $this->RailFareList = $RailFareList;
      return $this;
    }

    /**
     * @return RailPricingSolution
     */
    public function getRailPricingSolution()
    {
      return $this->RailPricingSolution;
    }

    /**
     * @param RailPricingSolution $RailPricingSolution
     * @return \FilippoToso\Travelport\Air\AirSearchRsp
     */
    public function setRailPricingSolution($RailPricingSolution)
    {
      $this->RailPricingSolution = $RailPricingSolution;
      return $this;
    }

}
