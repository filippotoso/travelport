<?php

namespace FilippoToso\Travelport\Rail;

class RailExchangeRsp extends typeRailReservationRsp
{

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param UniversalRecord $UniversalRecord
     */
    public function __construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $UniversalRecord)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $UniversalRecord);
    }

}
