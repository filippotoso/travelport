<?php

namespace FilippoToso\Travelport\Air;

class AirPrePayRsp extends BaseRsp
{

    /**
     * @var PrePayProfileInfo $PrePayProfileInfo
     */
    protected $PrePayProfileInfo = null;

    /**
     * @var typeMaxResults $MaxResults
     */
    protected $MaxResults = null;

    /**
     * @var boolean $MoreIndicator
     */
    protected $MoreIndicator = null;

    /**
     * @var string $MoreDataStartIndex
     */
    protected $MoreDataStartIndex = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param PrePayProfileInfo $PrePayProfileInfo
     * @param typeMaxResults $MaxResults
     * @param boolean $MoreIndicator
     * @param string $MoreDataStartIndex
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $PrePayProfileInfo = null, $MaxResults = null, $MoreIndicator = null, $MoreDataStartIndex = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->PrePayProfileInfo = $PrePayProfileInfo;
      $this->MaxResults = $MaxResults;
      $this->MoreIndicator = $MoreIndicator;
      $this->MoreDataStartIndex = $MoreDataStartIndex;
    }

    /**
     * @return PrePayProfileInfo
     */
    public function getPrePayProfileInfo()
    {
      return $this->PrePayProfileInfo;
    }

    /**
     * @param PrePayProfileInfo $PrePayProfileInfo
     * @return \FilippoToso\Travelport\Air\AirPrePayRsp
     */
    public function setPrePayProfileInfo($PrePayProfileInfo)
    {
      $this->PrePayProfileInfo = $PrePayProfileInfo;
      return $this;
    }

    /**
     * @return typeMaxResults
     */
    public function getMaxResults()
    {
      return $this->MaxResults;
    }

    /**
     * @param typeMaxResults $MaxResults
     * @return \FilippoToso\Travelport\Air\AirPrePayRsp
     */
    public function setMaxResults($MaxResults)
    {
      $this->MaxResults = $MaxResults;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoreIndicator()
    {
      return $this->MoreIndicator;
    }

    /**
     * @param boolean $MoreIndicator
     * @return \FilippoToso\Travelport\Air\AirPrePayRsp
     */
    public function setMoreIndicator($MoreIndicator)
    {
      $this->MoreIndicator = $MoreIndicator;
      return $this;
    }

    /**
     * @return string
     */
    public function getMoreDataStartIndex()
    {
      return $this->MoreDataStartIndex;
    }

    /**
     * @param string $MoreDataStartIndex
     * @return \FilippoToso\Travelport\Air\AirPrePayRsp
     */
    public function setMoreDataStartIndex($MoreDataStartIndex)
    {
      $this->MoreDataStartIndex = $MoreDataStartIndex;
      return $this;
    }

}
