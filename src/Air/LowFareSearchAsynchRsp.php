<?php

namespace FilippoToso\Travelport\Air;

class LowFareSearchAsynchRsp extends AirSearchRsp
{

    /**
     * @var BaseAsyncProviderSpecificResponse $AsyncProviderSpecificResponse
     */
    protected $AsyncProviderSpecificResponse = null;

    /**
     * @var BrandList $BrandList
     */
    protected $BrandList = null;

    /**
     * @var typeLowFareSearchId $SearchId
     */
    protected $SearchId = null;

    /**
     * @var typeCurrency $CurrencyType
     */
    protected $CurrencyType = null;

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
     * @param BaseAsyncProviderSpecificResponse $AsyncProviderSpecificResponse
     * @param BrandList $BrandList
     * @param typeLowFareSearchId $SearchId
     * @param typeCurrency $CurrencyType
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $FlightDetailsList = null, $AirSegmentList = null, $FareInfoList = null, $FareRemarkList = null, $AirItinerarySolution = null, $HostTokenList = null, $APISRequirementsList = null, $DistanceUnits = null, $FareNoteList = null, $ExpertSolutionList = null, $RouteList = null, $AlternateRouteList = null, $AlternateLocationDistanceList = null, $FareInfoMessage = null, $AirPricingSolution = null, $AirPricePointList = null, $RailSegmentList = null, $RailJourneyList = null, $RailFareNoteList = null, $RailFareIDList = null, $RailFareList = null, $RailPricingSolution = null, $AsyncProviderSpecificResponse = null, $BrandList = null, $SearchId = null, $CurrencyType = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference, $FlightDetailsList, $AirSegmentList, $FareInfoList, $FareRemarkList, $AirItinerarySolution, $HostTokenList, $APISRequirementsList, $DistanceUnits, $FareNoteList, $ExpertSolutionList, $RouteList, $AlternateRouteList, $AlternateLocationDistanceList, $FareInfoMessage, $AirPricingSolution, $AirPricePointList, $RailSegmentList, $RailJourneyList, $RailFareNoteList, $RailFareIDList, $RailFareList, $RailPricingSolution);
      $this->AsyncProviderSpecificResponse = $AsyncProviderSpecificResponse;
      $this->BrandList = $BrandList;
      $this->SearchId = $SearchId;
      $this->CurrencyType = $CurrencyType;
    }

    /**
     * @return BaseAsyncProviderSpecificResponse
     */
    public function getAsyncProviderSpecificResponse()
    {
      return $this->AsyncProviderSpecificResponse;
    }

    /**
     * @param BaseAsyncProviderSpecificResponse $AsyncProviderSpecificResponse
     * @return \FilippoToso\Travelport\Air\LowFareSearchAsynchRsp
     */
    public function setAsyncProviderSpecificResponse($AsyncProviderSpecificResponse)
    {
      $this->AsyncProviderSpecificResponse = $AsyncProviderSpecificResponse;
      return $this;
    }

    /**
     * @return BrandList
     */
    public function getBrandList()
    {
      return $this->BrandList;
    }

    /**
     * @param BrandList $BrandList
     * @return \FilippoToso\Travelport\Air\LowFareSearchAsynchRsp
     */
    public function setBrandList($BrandList)
    {
      $this->BrandList = $BrandList;
      return $this;
    }

    /**
     * @return typeLowFareSearchId
     */
    public function getSearchId()
    {
      return $this->SearchId;
    }

    /**
     * @param typeLowFareSearchId $SearchId
     * @return \FilippoToso\Travelport\Air\LowFareSearchAsynchRsp
     */
    public function setSearchId($SearchId)
    {
      $this->SearchId = $SearchId;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrencyType()
    {
      return $this->CurrencyType;
    }

    /**
     * @param typeCurrency $CurrencyType
     * @return \FilippoToso\Travelport\Air\LowFareSearchAsynchRsp
     */
    public function setCurrencyType($CurrencyType)
    {
      $this->CurrencyType = $CurrencyType;
      return $this;
    }

}
