<?php

namespace FilippoToso\Travelport\GDSQueue;

class GdsNextOnQueueRsp extends BaseRsp
{

    /**
     * @var UniversalRecord $UniversalRecord
     */
    protected $UniversalRecord = null;

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
     * @param string $QueueSessionToken
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $UniversalRecord = null, $QueueSessionToken = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->UniversalRecord = $UniversalRecord;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsNextOnQueueRsp
     */
    public function setUniversalRecord($UniversalRecord)
    {
      $this->UniversalRecord = $UniversalRecord;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsNextOnQueueRsp
     */
    public function setQueueSessionToken($QueueSessionToken)
    {
      $this->QueueSessionToken = $QueueSessionToken;
      return $this;
    }

}
