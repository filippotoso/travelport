<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileRetrieveHistoryRsp extends BaseRsp
{

    /**
     * @var ProfileHistory $ProfileHistory
     */
    protected $ProfileHistory = null;

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
     * @param ProfileHistory $ProfileHistory
     * @param typeMoreResults $MoreResults
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ProfileHistory = null, $MoreResults = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ProfileHistory = $ProfileHistory;
      $this->MoreResults = $MoreResults;
    }

    /**
     * @return ProfileHistory
     */
    public function getProfileHistory()
    {
      return $this->ProfileHistory;
    }

    /**
     * @param ProfileHistory $ProfileHistory
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveHistoryRsp
     */
    public function setProfileHistory($ProfileHistory)
    {
      $this->ProfileHistory = $ProfileHistory;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileRetrieveHistoryRsp
     */
    public function setMoreResults($MoreResults)
    {
      $this->MoreResults = $MoreResults;
      return $this;
    }

}
