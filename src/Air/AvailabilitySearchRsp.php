<?php

namespace FilippoToso\Travelport\Air;

class AvailabilitySearchRsp extends BaseAvailabilitySearchRsp
{

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
     */
    public function __construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference, $FlightDetailsList, $AirSegmentList, $FareInfoList, $FareRemarkList, $AirItinerarySolution, $HostTokenList, $APISRequirementsList, $DistanceUnits)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference, $FlightDetailsList, $AirSegmentList, $FareInfoList, $FareRemarkList, $AirItinerarySolution, $HostTokenList, $APISRequirementsList, $DistanceUnits);
    }

}
