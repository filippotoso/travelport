<?php

namespace FilippoToso\Travelport\System;

class SystemInfoRsp extends BaseRsp
{

    /**
     * @var SystemInfo $SystemInfo
     */
    protected $SystemInfo = null;

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
     * @param SystemInfo $SystemInfo
     * @param SystemTime $SystemTime
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $SystemInfo = null, $SystemTime = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->SystemInfo = $SystemInfo;
      $this->SystemTime = $SystemTime;
    }

    /**
     * @return SystemInfo
     */
    public function getSystemInfo()
    {
      return $this->SystemInfo;
    }

    /**
     * @param SystemInfo $SystemInfo
     * @return \FilippoToso\Travelport\System\SystemInfoRsp
     */
    public function setSystemInfo($SystemInfo)
    {
      $this->SystemInfo = $SystemInfo;
      return $this;
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
     * @return \FilippoToso\Travelport\System\SystemInfoRsp
     */
    public function setSystemTime($SystemTime)
    {
      $this->SystemTime = $SystemTime;
      return $this;
    }

}
