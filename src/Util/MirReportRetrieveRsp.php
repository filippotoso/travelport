<?php

namespace FilippoToso\Travelport\Util;

class MirReportRetrieveRsp extends BaseRsp
{

    /**
     * @var string $Report
     */
    protected $Report = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param string $Report
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $Report = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->Report = $Report;
    }

    /**
     * @return string
     */
    public function getReport()
    {
      return $this->Report;
    }

    /**
     * @param string $Report
     * @return \FilippoToso\Travelport\Util\MirReportRetrieveRsp
     */
    public function setReport($Report)
    {
      $this->Report = $Report;
      return $this;
    }

}
