<?php

namespace FilippoToso\Travelport\GDSQueue;

class GdsQueueCountRsp extends BaseRsp
{

    /**
     * @var QueueInfo $QueueInfo
     */
    protected $QueueInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param QueueInfo $QueueInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $QueueInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->QueueInfo = $QueueInfo;
    }

    /**
     * @return QueueInfo
     */
    public function getQueueInfo()
    {
      return $this->QueueInfo;
    }

    /**
     * @param QueueInfo $QueueInfo
     * @return \FilippoToso\Travelport\GDSQueue\GdsQueueCountRsp
     */
    public function setQueueInfo($QueueInfo)
    {
      $this->QueueInfo = $QueueInfo;
      return $this;
    }

}
