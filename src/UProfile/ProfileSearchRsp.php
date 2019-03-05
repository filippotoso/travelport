<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileSearchRsp extends BaseRsp
{

    /**
     * @var ProfileSummary $ProfileSummary
     */
    protected $ProfileSummary = null;

    /**
     * @var ProfileParentSearchSummary $ProfileParentSearchSummary
     */
    protected $ProfileParentSearchSummary = null;

    /**
     * @var StringLength1to128 $SearchToken
     */
    protected $SearchToken = null;

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
     * @param ProfileSummary $ProfileSummary
     * @param ProfileParentSearchSummary $ProfileParentSearchSummary
     * @param StringLength1to128 $SearchToken
     * @param typeMoreResults $MoreResults
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ProfileSummary = null, $ProfileParentSearchSummary = null, $SearchToken = null, $MoreResults = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ProfileSummary = $ProfileSummary;
      $this->ProfileParentSearchSummary = $ProfileParentSearchSummary;
      $this->SearchToken = $SearchToken;
      $this->MoreResults = $MoreResults;
    }

    /**
     * @return ProfileSummary
     */
    public function getProfileSummary()
    {
      return $this->ProfileSummary;
    }

    /**
     * @param ProfileSummary $ProfileSummary
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchRsp
     */
    public function setProfileSummary($ProfileSummary)
    {
      $this->ProfileSummary = $ProfileSummary;
      return $this;
    }

    /**
     * @return ProfileParentSearchSummary
     */
    public function getProfileParentSearchSummary()
    {
      return $this->ProfileParentSearchSummary;
    }

    /**
     * @param ProfileParentSearchSummary $ProfileParentSearchSummary
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchRsp
     */
    public function setProfileParentSearchSummary($ProfileParentSearchSummary)
    {
      $this->ProfileParentSearchSummary = $ProfileParentSearchSummary;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSearchToken()
    {
      return $this->SearchToken;
    }

    /**
     * @param StringLength1to128 $SearchToken
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchRsp
     */
    public function setSearchToken($SearchToken)
    {
      $this->SearchToken = $SearchToken;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileSearchRsp
     */
    public function setMoreResults($MoreResults)
    {
      $this->MoreResults = $MoreResults;
      return $this;
    }

}
