<?php

namespace FilippoToso\Travelport\Air;

class AirPriceRsp extends BaseAirPriceRsp
{

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param AirItinerary $AirItinerary
     * @param AirPriceResult $AirPriceResult
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $AirItinerary = null, $AirPriceResult = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $AirItinerary, $AirPriceResult);
    }

}
