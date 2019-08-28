<?php

namespace FilippoToso\Travelport\Air;

class AirRefundRsp extends BaseRsp
{

    /**
     * @var ETR $ETR
     */
    protected $ETR = null;

    /**
     * @var TCR $TCR
     */
    protected $TCR = null;

    /**
     * @var typeTicketFailureInfo[] $RefundFailureInfo
     */
    protected $RefundFailureInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param ETR $ETR
     * @param TCR $TCR
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ETR = null, $TCR = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ETR = $ETR;
      $this->TCR = $TCR;
    }

    /**
     * @return ETR
     */
    public function getETR()
    {
      return $this->ETR;
    }

    /**
     * @param ETR $ETR
     * @return \FilippoToso\Travelport\Air\AirRefundRsp
     */
    public function setETR($ETR)
    {
      $this->ETR = $ETR;
      return $this;
    }

    /**
     * @return TCR
     */
    public function getTCR()
    {
      return $this->TCR;
    }

    /**
     * @param TCR $TCR
     * @return \FilippoToso\Travelport\Air\AirRefundRsp
     */
    public function setTCR($TCR)
    {
      $this->TCR = $TCR;
      return $this;
    }

    /**
     * @return typeTicketFailureInfo[]
     */
    public function getRefundFailureInfo()
    {
      return $this->RefundFailureInfo;
    }

    /**
     * @param typeTicketFailureInfo[] $RefundFailureInfo
     * @return \FilippoToso\Travelport\Air\AirRefundRsp
     */
    public function setRefundFailureInfo(array $RefundFailureInfo = null)
    {
      $this->RefundFailureInfo = $RefundFailureInfo;
      return $this;
    }

}
