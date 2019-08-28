<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailCreateReservationRsp extends typeRailCreateReservationRsp
{

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param UniversalRecord $UniversalRecord
     * @param RailSolutionChangedInfo $RailSolutionChangedInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $UniversalRecord = null, $RailSolutionChangedInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $UniversalRecord, $RailSolutionChangedInfo);
    }

}
