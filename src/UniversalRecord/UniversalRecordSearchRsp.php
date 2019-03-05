<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalRecordSearchRsp extends BaseRsp
{

    /**
     * @var UniversalRecordSearchResult $UniversalRecordSearchResult
     */
    protected $UniversalRecordSearchResult = null;

    /**
     * @var typeMoreResults $MoreResults
     */
    protected $MoreResults = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param UniversalRecordSearchResult $UniversalRecordSearchResult
     * @param typeMoreResults $MoreResults
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $UniversalRecordSearchResult = null, $MoreResults = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->UniversalRecordSearchResult = $UniversalRecordSearchResult;
      $this->MoreResults = $MoreResults;
    }

    /**
     * @return UniversalRecordSearchResult
     */
    public function getUniversalRecordSearchResult()
    {
      return $this->UniversalRecordSearchResult;
    }

    /**
     * @param UniversalRecordSearchResult $UniversalRecordSearchResult
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchRsp
     */
    public function setUniversalRecordSearchResult($UniversalRecordSearchResult)
    {
      $this->UniversalRecordSearchResult = $UniversalRecordSearchResult;
      return $this;
    }

    /**
     * @return typeMoreResults
     */
    public function getMoreResults()
    {
      return $this->MoreResults;
    }

    /**
     * @param typeMoreResults $MoreResults
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalRecordSearchRsp
     */
    public function setMoreResults($MoreResults)
    {
      $this->MoreResults = $MoreResults;
      return $this;
    }

}
