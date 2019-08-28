<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordRetrieveRsp extends BaseRsp
{

    /**
     * @var UniversalRecord $UniversalRecord
     */
    protected $UniversalRecord = null;

    /**
     * @var boolean $Updated
     */
    protected $Updated = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param UniversalRecord $UniversalRecord
     * @param boolean $Updated
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $UniversalRecord = null, $Updated = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->UniversalRecord = $UniversalRecord;
      $this->Updated = $Updated;
    }

    /**
     * @return UniversalRecord
     */
    public function getUniversalRecord()
    {
      return $this->UniversalRecord;
    }

    /**
     * @param UniversalRecord $UniversalRecord
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordRetrieveRsp
     */
    public function setUniversalRecord($UniversalRecord)
    {
      $this->UniversalRecord = $UniversalRecord;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUpdated()
    {
      return $this->Updated;
    }

    /**
     * @param boolean $Updated
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordRetrieveRsp
     */
    public function setUpdated($Updated)
    {
      $this->Updated = $Updated;
      return $this;
    }

}
