<?php

namespace FilippoToso\Travelport\Hotel;

class HotelMediaLinksRsp extends BaseRsp
{

    /**
     * @var HotelPropertyWithMediaItems $HotelPropertyWithMediaItems
     */
    protected $HotelPropertyWithMediaItems = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param HotelPropertyWithMediaItems $HotelPropertyWithMediaItems
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $HotelPropertyWithMediaItems = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->HotelPropertyWithMediaItems = $HotelPropertyWithMediaItems;
    }

    /**
     * @return HotelPropertyWithMediaItems
     */
    public function getHotelPropertyWithMediaItems()
    {
      return $this->HotelPropertyWithMediaItems;
    }

    /**
     * @param HotelPropertyWithMediaItems $HotelPropertyWithMediaItems
     * @return \FilippoToso\Travelport\Hotel\HotelMediaLinksRsp
     */
    public function setHotelPropertyWithMediaItems($HotelPropertyWithMediaItems)
    {
      $this->HotelPropertyWithMediaItems = $HotelPropertyWithMediaItems;
      return $this;
    }

}
