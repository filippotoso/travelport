<?php

namespace FilippoToso\Travelport\UniversalRecord;

class SavedTripSearchRsp extends BaseRsp
{

    /**
     * @var SavedTripSearchResult $SavedTripSearchResult
     */
    protected $SavedTripSearchResult = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param SavedTripSearchResult $SavedTripSearchResult
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $SavedTripSearchResult = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->SavedTripSearchResult = $SavedTripSearchResult;
    }

    /**
     * @return SavedTripSearchResult
     */
    public function getSavedTripSearchResult()
    {
      return $this->SavedTripSearchResult;
    }

    /**
     * @param SavedTripSearchResult $SavedTripSearchResult
     * @return \FilippoToso\Travelport\UniversalRecord\SavedTripSearchRsp
     */
    public function setSavedTripSearchResult($SavedTripSearchResult)
    {
      $this->SavedTripSearchResult = $SavedTripSearchResult;
      return $this;
    }

}
