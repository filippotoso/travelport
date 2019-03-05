<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordModifyRsp extends BaseRsp
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
     * @var UniversalModifyFailureInfo $UniversalModifyFailureInfo
     */
    protected $UniversalModifyFailureInfo = null;

    /**
     * @var string $QueueSessionToken
     */
    protected $QueueSessionToken = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param UniversalRecord $UniversalRecord
     * @param AirSolutionChangedInfo $AirSolutionChangedInfo
     * @param UniversalModifyFailureInfo $UniversalModifyFailureInfo
     * @param string $QueueSessionToken
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $UniversalRecord = null, $AirSolutionChangedInfo = null, $UniversalModifyFailureInfo = null, $QueueSessionToken = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->UniversalRecord = $UniversalRecord;
      $this->AirSolutionChangedInfo = $AirSolutionChangedInfo;
      $this->UniversalModifyFailureInfo = $UniversalModifyFailureInfo;
      $this->QueueSessionToken = $QueueSessionToken;
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyRsp
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyRsp
     */
    public function setAirSolutionChangedInfo($AirSolutionChangedInfo)
    {
      $this->AirSolutionChangedInfo = $AirSolutionChangedInfo;
      return $this;
    }

    /**
     * @return UniversalModifyFailureInfo
     */
    public function getUniversalModifyFailureInfo()
    {
      return $this->UniversalModifyFailureInfo;
    }

    /**
     * @param UniversalModifyFailureInfo $UniversalModifyFailureInfo
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyRsp
     */
    public function setUniversalModifyFailureInfo($UniversalModifyFailureInfo)
    {
      $this->UniversalModifyFailureInfo = $UniversalModifyFailureInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueueSessionToken()
    {
      return $this->QueueSessionToken;
    }

    /**
     * @param string $QueueSessionToken
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordModifyRsp
     */
    public function setQueueSessionToken($QueueSessionToken)
    {
      $this->QueueSessionToken = $QueueSessionToken;
      return $this;
    }

}
