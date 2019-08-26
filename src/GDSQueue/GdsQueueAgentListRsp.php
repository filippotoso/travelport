<?php

namespace FilippoToso\Travelport\GDSQueue;

class GdsQueueAgentListRsp extends BaseRsp
{

    /**
     * @var QueueAgentRecord $QueueAgentRecord
     */
    protected $QueueAgentRecord = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param QueueAgentRecord $QueueAgentRecord
     */
    public function __construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $QueueAgentRecord)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->QueueAgentRecord = $QueueAgentRecord;
    }

    /**
     * @return QueueAgentRecord
     */
    public function getQueueAgentRecord()
    {
      return $this->QueueAgentRecord;
    }

    /**
     * @param QueueAgentRecord $QueueAgentRecord
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueAgentListRsp
     */
    public function setQueueAgentRecord($QueueAgentRecord)
    {
      $this->QueueAgentRecord = $QueueAgentRecord;
      return $this;
    }

}
