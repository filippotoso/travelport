<?php

namespace FilippoToso\Travelport\Air;

class EMDRetrieveRsp extends BaseRsp
{

    /**
     * @var EMDInfo $EMDInfo
     */
    protected $EMDInfo = null;

    /**
     * @var EMDSummaryInfo $EMDSummaryInfo
     */
    protected $EMDSummaryInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param EMDInfo $EMDInfo
     * @param EMDSummaryInfo $EMDSummaryInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $EMDInfo = null, $EMDSummaryInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->EMDInfo = $EMDInfo;
      $this->EMDSummaryInfo = $EMDSummaryInfo;
    }

    /**
     * @return EMDInfo
     */
    public function getEMDInfo()
    {
      return $this->EMDInfo;
    }

    /**
     * @param EMDInfo $EMDInfo
     * @return \FilippoToso\Travelport\Air\EMDRetrieveRsp
     */
    public function setEMDInfo($EMDInfo)
    {
      $this->EMDInfo = $EMDInfo;
      return $this;
    }

    /**
     * @return EMDSummaryInfo
     */
    public function getEMDSummaryInfo()
    {
      return $this->EMDSummaryInfo;
    }

    /**
     * @param EMDSummaryInfo $EMDSummaryInfo
     * @return \FilippoToso\Travelport\Air\EMDRetrieveRsp
     */
    public function setEMDSummaryInfo($EMDSummaryInfo)
    {
      $this->EMDSummaryInfo = $EMDSummaryInfo;
      return $this;
    }

}
