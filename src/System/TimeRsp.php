<?php

namespace FilippoToso\Travelport\System;

class TimeRsp extends BaseRsp
{

    /**
     * @var SystemTime $SystemTime
     */
    protected $SystemTime = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param SystemTime $SystemTime
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $SystemTime = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->SystemTime = $SystemTime;
    }

    /**
     * @return SystemTime
     */
    public function getSystemTime()
    {
      return $this->SystemTime;
    }

    /**
     * @param SystemTime $SystemTime
     * @return \FilippoToso\Travelport\System\TimeRsp
     */
    public function setSystemTime($SystemTime)
    {
      $this->SystemTime = $SystemTime;
      return $this;
    }

}
