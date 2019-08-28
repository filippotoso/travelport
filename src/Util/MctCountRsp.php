<?php

namespace FilippoToso\Travelport\Util;

class MctCountRsp extends BaseRsp
{

    /**
     * @var MctCount $MctCount
     */
    protected $MctCount = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param MctCount $MctCount
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $MctCount = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->MctCount = $MctCount;
    }

    /**
     * @return MctCount
     */
    public function getMctCount()
    {
      return $this->MctCount;
    }

    /**
     * @param MctCount $MctCount
     * @return \FilippoToso\Travelport\Util\MctCountRsp
     */
    public function setMctCount($MctCount)
    {
      $this->MctCount = $MctCount;
      return $this;
    }

}
