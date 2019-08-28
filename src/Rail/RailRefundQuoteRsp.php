<?php

namespace FilippoToso\Travelport\Rail;

class RailRefundQuoteRsp extends BaseRsp
{

    /**
     * @var RailRefundInfo $RailRefundInfo
     */
    protected $RailRefundInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param RailRefundInfo $RailRefundInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $RailRefundInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->RailRefundInfo = $RailRefundInfo;
    }

    /**
     * @return RailRefundInfo
     */
    public function getRailRefundInfo()
    {
      return $this->RailRefundInfo;
    }

    /**
     * @param RailRefundInfo $RailRefundInfo
     * @return \FilippoToso\Travelport\Rail\RailRefundQuoteRsp
     */
    public function setRailRefundInfo($RailRefundInfo)
    {
      $this->RailRefundInfo = $RailRefundInfo;
      return $this;
    }

}
