<?php

namespace FilippoToso\Travelport\GDSQueue;

class GdsEnterQueueRsp extends BaseRsp
{

    /**
     * @var UniversalRecord $UniversalRecord
     */
    protected $UniversalRecord = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

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
     * @param string $Title
     * @param string $QueueSessionToken
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $UniversalRecord = null, $Title = null, $QueueSessionToken = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->UniversalRecord = $UniversalRecord;
      $this->Title = $Title;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsEnterQueueRsp
     */
    public function setUniversalRecord($UniversalRecord)
    {
      $this->UniversalRecord = $UniversalRecord;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \FilippoToso\Travelport\GDSQueue\GdsEnterQueueRsp
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
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
     * @return \FilippoToso\Travelport\GDSQueue\GdsEnterQueueRsp
     */
    public function setQueueSessionToken($QueueSessionToken)
    {
      $this->QueueSessionToken = $QueueSessionToken;
      return $this;
    }

}
