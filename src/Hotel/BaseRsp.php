<?php

namespace FilippoToso\Travelport\Hotel;

class BaseRsp
{

    /**
     * @var ResponseMessage $ResponseMessage
     */
    protected $ResponseMessage = null;

    /**
     * @var string $TraceId
     */
    protected $TraceId = null;

    /**
     * @var string $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @var int $ResponseTime
     */
    protected $ResponseTime = null;

    /**
     * @var string $CommandHistory
     */
    protected $CommandHistory = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null)
    {
      $this->ResponseMessage = $ResponseMessage;
      $this->TraceId = $TraceId;
      $this->TransactionId = $TransactionId;
      $this->ResponseTime = $ResponseTime;
      $this->CommandHistory = $CommandHistory;
    }

    /**
     * @return ResponseMessage
     */
    public function getResponseMessage()
    {
      return $this->ResponseMessage;
    }

    /**
     * @param ResponseMessage $ResponseMessage
     * @return \FilippoToso\Travelport\Hotel\BaseRsp
     */
    public function setResponseMessage($ResponseMessage)
    {
      $this->ResponseMessage = $ResponseMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getTraceId()
    {
      return $this->TraceId;
    }

    /**
     * @param string $TraceId
     * @return \FilippoToso\Travelport\Hotel\BaseRsp
     */
    public function setTraceId($TraceId)
    {
      $this->TraceId = $TraceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
      return $this->TransactionId;
    }

    /**
     * @param string $TransactionId
     * @return \FilippoToso\Travelport\Hotel\BaseRsp
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getResponseTime()
    {
      return $this->ResponseTime;
    }

    /**
     * @param int $ResponseTime
     * @return \FilippoToso\Travelport\Hotel\BaseRsp
     */
    public function setResponseTime($ResponseTime)
    {
      $this->ResponseTime = $ResponseTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommandHistory()
    {
      return $this->CommandHistory;
    }

    /**
     * @param string $CommandHistory
     * @return \FilippoToso\Travelport\Hotel\BaseRsp
     */
    public function setCommandHistory($CommandHistory)
    {
      $this->CommandHistory = $CommandHistory;
      return $this;
    }

}
