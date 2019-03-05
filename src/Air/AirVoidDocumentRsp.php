<?php

namespace FilippoToso\Travelport\Air;

class AirVoidDocumentRsp extends BaseRsp
{

    /**
     * @var ETR $ETR
     */
    protected $ETR = null;

    /**
     * @var VoidResultInfo $VoidResultInfo
     */
    protected $VoidResultInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param ETR $ETR
     * @param VoidResultInfo $VoidResultInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ETR = null, $VoidResultInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ETR = $ETR;
      $this->VoidResultInfo = $VoidResultInfo;
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
     * @return \FilippoToso\Travelport\Air\AirVoidDocumentRsp
     */
    public function setETR($ETR)
    {
      $this->ETR = $ETR;
      return $this;
    }

    /**
     * @return VoidResultInfo
     */
    public function getVoidResultInfo()
    {
      return $this->VoidResultInfo;
    }

    /**
     * @param VoidResultInfo $VoidResultInfo
     * @return \FilippoToso\Travelport\Air\AirVoidDocumentRsp
     */
    public function setVoidResultInfo($VoidResultInfo)
    {
      $this->VoidResultInfo = $VoidResultInfo;
      return $this;
    }

}
