<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeErrorInfo
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Service
     */
    protected $Service = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $TransactionId
     */
    protected $TransactionId = null;

    /**
     * @var string $TraceId
     */
    protected $TraceId = null;

    /**
     * @var string $CommandHistory
     */
    protected $CommandHistory = null;

    /**
     * @var Auxdata $Auxdata
     */
    protected $Auxdata = null;

    /**
     * @var string $StackTrace
     */
    protected $StackTrace = null;

    /**
     * @param string $Code
     * @param string $Service
     * @param string $Type
     * @param string $Description
     * @param string $TransactionId
     * @param Auxdata $Auxdata
     */
    public function __construct($Code = null, $Service = null, $Type = null, $Description = null, $TransactionId = null, $Auxdata = null)
    {
      $this->Code = $Code;
      $this->Service = $Service;
      $this->Type = $Type;
      $this->Description = $Description;
      $this->TransactionId = $TransactionId;
      $this->Auxdata = $Auxdata;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\UniversalRecord\typeErrorInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getService()
    {
      return $this->Service;
    }

    /**
     * @param string $Service
     * @return \FilippoToso\Travelport\UniversalRecord\typeErrorInfo
     */
    public function setService($Service)
    {
      $this->Service = $Service;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\UniversalRecord\typeErrorInfo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\UniversalRecord\typeErrorInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeErrorInfo
     */
    public function setTransactionId($TransactionId)
    {
      $this->TransactionId = $TransactionId;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeErrorInfo
     */
    public function setTraceId($TraceId)
    {
      $this->TraceId = $TraceId;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeErrorInfo
     */
    public function setCommandHistory($CommandHistory)
    {
      $this->CommandHistory = $CommandHistory;
      return $this;
    }

    /**
     * @return Auxdata
     */
    public function getAuxdata()
    {
      return $this->Auxdata;
    }

    /**
     * @param Auxdata $Auxdata
     * @return \FilippoToso\Travelport\UniversalRecord\typeErrorInfo
     */
    public function setAuxdata($Auxdata)
    {
      $this->Auxdata = $Auxdata;
      return $this;
    }

    /**
     * @return string
     */
    public function getStackTrace()
    {
      return $this->StackTrace;
    }

    /**
     * @param string $StackTrace
     * @return \FilippoToso\Travelport\UniversalRecord\typeErrorInfo
     */
    public function setStackTrace($StackTrace)
    {
      $this->StackTrace = $StackTrace;
      return $this;
    }

}
