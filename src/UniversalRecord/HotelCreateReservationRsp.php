<?php

namespace FilippoToso\Travelport\UniversalRecord;

class HotelCreateReservationRsp extends BaseRsp
{

    /**
     * @var UniversalRecord $UniversalRecord
     */
    protected $UniversalRecord = null;

    /**
     * @var HotelRateChangedInfo $HotelRateChangedInfo
     */
    protected $HotelRateChangedInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param UniversalRecord $UniversalRecord
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $UniversalRecord = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->UniversalRecord = $UniversalRecord;
    }

    /**
     * @return UniversalRecord
     */
    public function getUniversalRecord()
    {
      return $this->UniversalRecord;
    }

    /**
     * @param UniversalRecord $UniversalRecord
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationRsp
     */
    public function setUniversalRecord($UniversalRecord)
    {
      $this->UniversalRecord = $UniversalRecord;
      return $this;
    }

    /**
     * @return HotelRateChangedInfo
     */
    public function getHotelRateChangedInfo()
    {
      return $this->HotelRateChangedInfo;
    }

    /**
     * @param HotelRateChangedInfo $HotelRateChangedInfo
     * @return \FilippoToso\Travelport\UniversalRecord\HotelCreateReservationRsp
     */
    public function setHotelRateChangedInfo($HotelRateChangedInfo)
    {
      $this->HotelRateChangedInfo = $HotelRateChangedInfo;
      return $this;
    }

}
