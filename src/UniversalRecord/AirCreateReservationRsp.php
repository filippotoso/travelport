<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirCreateReservationRsp extends BaseRsp
{

    /**
     * @var UniversalRecord $UniversalRecord
     */
    protected $UniversalRecord = null;

    /**
     * @var AirSolutionChangedInfo $AirSolutionChangedInfo
     */
    protected $AirSolutionChangedInfo = null;

    /**
     * @var AirSegmentSellFailureInfo $AirSegmentSellFailureInfo
     */
    protected $AirSegmentSellFailureInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param UniversalRecord $UniversalRecord
     * @param AirSolutionChangedInfo $AirSolutionChangedInfo
     * @param AirSegmentSellFailureInfo $AirSegmentSellFailureInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $UniversalRecord = null, $AirSolutionChangedInfo = null, $AirSegmentSellFailureInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->UniversalRecord = $UniversalRecord;
      $this->AirSolutionChangedInfo = $AirSolutionChangedInfo;
      $this->AirSegmentSellFailureInfo = $AirSegmentSellFailureInfo;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationRsp
     */
    public function setUniversalRecord($UniversalRecord)
    {
      $this->UniversalRecord = $UniversalRecord;
      return $this;
    }

    /**
     * @return AirSolutionChangedInfo
     */
    public function getAirSolutionChangedInfo()
    {
      return $this->AirSolutionChangedInfo;
    }

    /**
     * @param AirSolutionChangedInfo $AirSolutionChangedInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationRsp
     */
    public function setAirSolutionChangedInfo($AirSolutionChangedInfo)
    {
      $this->AirSolutionChangedInfo = $AirSolutionChangedInfo;
      return $this;
    }

    /**
     * @return AirSegmentSellFailureInfo
     */
    public function getAirSegmentSellFailureInfo()
    {
      return $this->AirSegmentSellFailureInfo;
    }

    /**
     * @param AirSegmentSellFailureInfo $AirSegmentSellFailureInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirCreateReservationRsp
     */
    public function setAirSegmentSellFailureInfo($AirSegmentSellFailureInfo)
    {
      $this->AirSegmentSellFailureInfo = $AirSegmentSellFailureInfo;
      return $this;
    }

}
