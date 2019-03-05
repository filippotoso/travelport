<?php

namespace FilippoToso\Travelport\System;

class PingRsp extends BaseRsp
{

    /**
     * @var Payload $Payload
     */
    protected $Payload = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param Payload $Payload
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $Payload = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->Payload = $Payload;
    }

    /**
     * @return Payload
     */
    public function getPayload()
    {
      return $this->Payload;
    }

    /**
     * @param Payload $Payload
     * @return \FilippoToso\Travelport\System\PingRsp
     */
    public function setPayload($Payload)
    {
      $this->Payload = $Payload;
      return $this;
    }

}
