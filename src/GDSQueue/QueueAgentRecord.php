<?php

namespace FilippoToso\Travelport\GDSQueue;

class QueueAgentRecord
{

    /**
     * @var typeLocatorCode $UniversalRecordLocatorCode
     */
    protected $UniversalRecordLocatorCode = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var string $QueueSessionToken
     */
    protected $QueueSessionToken = null;

    /**
     * @var string $QueueNumber
     */
    protected $QueueNumber = null;

    /**
     * @var typeDate $Lastupdated
     */
    protected $Lastupdated = null;

    /**
     * @var typeBranchCode $TargetBranch
     */
    protected $TargetBranch = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $DateRange
     */
    protected $DateRange = null;

    /**
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @param typePCC $PseudoCityCode
     * @param string $QueueSessionToken
     * @param string $QueueNumber
     * @param typeDate $Lastupdated
     * @param typeBranchCode $TargetBranch
     * @param string $Category
     * @param string $DateRange
     */
    public function __construct($UniversalRecordLocatorCode = null, $PseudoCityCode = null, $QueueSessionToken = null, $QueueNumber = null, $Lastupdated = null, $TargetBranch = null, $Category = null, $DateRange = null)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->QueueSessionToken = $QueueSessionToken;
      $this->QueueNumber = $QueueNumber;
      $this->Lastupdated = $Lastupdated;
      $this->TargetBranch = $TargetBranch;
      $this->Category = $Category;
      $this->DateRange = $DateRange;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalRecordLocatorCode()
    {
      return $this->UniversalRecordLocatorCode;
    }

    /**
     * @param typeLocatorCode $UniversalRecordLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\QueueAgentRecord
     */
    public function setUniversalRecordLocatorCode($UniversalRecordLocatorCode)
    {
      $this->UniversalRecordLocatorCode = $UniversalRecordLocatorCode;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\GDSQueue\QueueAgentRecord
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueueSessionToken()
    {
      return $this->QueueSessionToken;
    }

    /**
     * @param string $QueueSessionToken
     * @return \FilippoToso\Travelport\GDSQueue\QueueAgentRecord
     */
    public function setQueueSessionToken($QueueSessionToken)
    {
      $this->QueueSessionToken = $QueueSessionToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueueNumber()
    {
      return $this->QueueNumber;
    }

    /**
     * @param string $QueueNumber
     * @return \FilippoToso\Travelport\GDSQueue\QueueAgentRecord
     */
    public function setQueueNumber($QueueNumber)
    {
      $this->QueueNumber = $QueueNumber;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getLastupdated()
    {
      return $this->Lastupdated;
    }

    /**
     * @param typeDate $Lastupdated
     * @return \FilippoToso\Travelport\GDSQueue\QueueAgentRecord
     */
    public function setLastupdated($Lastupdated)
    {
      $this->Lastupdated = $Lastupdated;
      return $this;
    }

    /**
     * @return typeBranchCode
     */
    public function getTargetBranch()
    {
      return $this->TargetBranch;
    }

    /**
     * @param typeBranchCode $TargetBranch
     * @return \FilippoToso\Travelport\GDSQueue\QueueAgentRecord
     */
    public function setTargetBranch($TargetBranch)
    {
      $this->TargetBranch = $TargetBranch;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \FilippoToso\Travelport\GDSQueue\QueueAgentRecord
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateRange()
    {
      return $this->DateRange;
    }

    /**
     * @param string $DateRange
     * @return \FilippoToso\Travelport\GDSQueue\QueueAgentRecord
     */
    public function setDateRange($DateRange)
    {
      $this->DateRange = $DateRange;
      return $this;
    }

}
