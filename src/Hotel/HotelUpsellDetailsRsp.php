<?php

namespace FilippoToso\Travelport\Hotel;

class HotelUpsellDetailsRsp extends BaseHotelDetailsRsp
{

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param HotelProperty $HotelProperty
     * @param HotelDetailItem $HotelDetailItem
     * @param HotelRateDetail $HotelRateDetail
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $HotelProperty = null, $HotelDetailItem = null, $HotelRateDetail = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $HotelProperty, $HotelDetailItem, $HotelRateDetail);
    }

}
