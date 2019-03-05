<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordHistorySearchRsp extends BaseRsp
{

    /**
     * @var UniversalRecordHistorySearchResult $UniversalRecordHistorySearchResult
     */
    protected $UniversalRecordHistorySearchResult = null;

    /**
     * @var boolean $LastResult
     */
    protected $LastResult = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param UniversalRecordHistorySearchResult $UniversalRecordHistorySearchResult
     * @param boolean $LastResult
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $UniversalRecordHistorySearchResult = null, $LastResult = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->UniversalRecordHistorySearchResult = $UniversalRecordHistorySearchResult;
      $this->LastResult = $LastResult;
    }

    /**
     * @return UniversalRecordHistorySearchResult
     */
    public function getUniversalRecordHistorySearchResult()
    {
      return $this->UniversalRecordHistorySearchResult;
    }

    /**
     * @param UniversalRecordHistorySearchResult $UniversalRecordHistorySearchResult
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchRsp
     */
    public function setUniversalRecordHistorySearchResult($UniversalRecordHistorySearchResult)
    {
      $this->UniversalRecordHistorySearchResult = $UniversalRecordHistorySearchResult;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLastResult()
    {
      return $this->LastResult;
    }

    /**
     * @param boolean $LastResult
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordHistorySearchRsp
     */
    public function setLastResult($LastResult)
    {
      $this->LastResult = $LastResult;
      return $this;
    }

}
