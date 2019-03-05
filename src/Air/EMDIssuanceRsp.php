<?php

namespace FilippoToso\Travelport\Air;

class EMDIssuanceRsp extends BaseRsp
{

    /**
     * @var EMDSummaryInfo $EMDSummaryInfo
     */
    protected $EMDSummaryInfo = null;

    /**
     * @var EMDInfo $EMDInfo
     */
    protected $EMDInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param EMDSummaryInfo $EMDSummaryInfo
     * @param EMDInfo $EMDInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $EMDSummaryInfo = null, $EMDInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->EMDSummaryInfo = $EMDSummaryInfo;
      $this->EMDInfo = $EMDInfo;
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
     * @return \FilippoToso\Travelport\Air\EMDIssuanceRsp
     */
    public function setEMDSummaryInfo($EMDSummaryInfo)
    {
      $this->EMDSummaryInfo = $EMDSummaryInfo;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\EMDIssuanceRsp
     */
    public function setEMDInfo($EMDInfo)
    {
      $this->EMDInfo = $EMDInfo;
      return $this;
    }

}
