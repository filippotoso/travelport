<?php

namespace FilippoToso\Travelport\Hotel;

class BaseHotelDetailsRsp extends BaseRsp
{

    /**
     * @var HotelProperty $HotelProperty
     */
    protected $HotelProperty = null;

    /**
     * @var HotelDetailItem $HotelDetailItem
     */
    protected $HotelDetailItem = null;

    /**
     * @var HotelRateDetail $HotelRateDetail
     */
    protected $HotelRateDetail = null;

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
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->HotelProperty = $HotelProperty;
      $this->HotelDetailItem = $HotelDetailItem;
      $this->HotelRateDetail = $HotelRateDetail;
    }

    /**
     * @return HotelProperty
     */
    public function getHotelProperty()
    {
      return $this->HotelProperty;
    }

    /**
     * @param HotelProperty $HotelProperty
     * @return \FilippoToso\Travelport\Hotel\BaseHotelDetailsRsp
     */
    public function setHotelProperty($HotelProperty)
    {
      $this->HotelProperty = $HotelProperty;
      return $this;
    }

    /**
     * @return HotelDetailItem
     */
    public function getHotelDetailItem()
    {
      return $this->HotelDetailItem;
    }

    /**
     * @param HotelDetailItem $HotelDetailItem
     * @return \FilippoToso\Travelport\Hotel\BaseHotelDetailsRsp
     */
    public function setHotelDetailItem($HotelDetailItem)
    {
      $this->HotelDetailItem = $HotelDetailItem;
      return $this;
    }

    /**
     * @return HotelRateDetail
     */
    public function getHotelRateDetail()
    {
      return $this->HotelRateDetail;
    }

    /**
     * @param HotelRateDetail $HotelRateDetail
     * @return \FilippoToso\Travelport\Hotel\BaseHotelDetailsRsp
     */
    public function setHotelRateDetail($HotelRateDetail)
    {
      $this->HotelRateDetail = $HotelRateDetail;
      return $this;
    }

}
