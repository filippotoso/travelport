<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileChildSearchRsp extends BaseRsp
{

    /**
     * @var ProfileChildSummary $ProfileChildSummary
     */
    protected $ProfileChildSummary = null;

    /**
     * @var typeMoreResults $MoreResults
     */
    protected $MoreResults = null;

    /**
     * @var int $NumberOfChildren
     */
    protected $NumberOfChildren = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param ProfileChildSummary $ProfileChildSummary
     * @param typeMoreResults $MoreResults
     * @param int $NumberOfChildren
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ProfileChildSummary = null, $MoreResults = null, $NumberOfChildren = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ProfileChildSummary = $ProfileChildSummary;
      $this->MoreResults = $MoreResults;
      $this->NumberOfChildren = $NumberOfChildren;
    }

    /**
     * @return ProfileChildSummary
     */
    public function getProfileChildSummary()
    {
      return $this->ProfileChildSummary;
    }

    /**
     * @param ProfileChildSummary $ProfileChildSummary
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchRsp
     */
    public function setProfileChildSummary($ProfileChildSummary)
    {
      $this->ProfileChildSummary = $ProfileChildSummary;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchRsp
     */
    public function setMoreResults($MoreResults)
    {
      $this->MoreResults = $MoreResults;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfChildren()
    {
      return $this->NumberOfChildren;
    }

    /**
     * @param int $NumberOfChildren
     * @return \FilippoToso\Travelport\UProfile\ProfileChildSearchRsp
     */
    public function setNumberOfChildren($NumberOfChildren)
    {
      $this->NumberOfChildren = $NumberOfChildren;
      return $this;
    }

}
