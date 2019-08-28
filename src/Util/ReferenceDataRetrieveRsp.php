<?php

namespace FilippoToso\Travelport\Util;

class ReferenceDataRetrieveRsp extends BaseRsp
{

    /**
     * @var ReferenceDataItem $ReferenceDataItem
     */
    protected $ReferenceDataItem = null;

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
     * @param ReferenceDataItem $ReferenceDataItem
     * @param typeMoreResults $MoreResults
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ReferenceDataItem = null, $MoreResults = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ReferenceDataItem = $ReferenceDataItem;
      $this->MoreResults = $MoreResults;
    }

    /**
     * @return ReferenceDataItem
     */
    public function getReferenceDataItem()
    {
      return $this->ReferenceDataItem;
    }

    /**
     * @param ReferenceDataItem $ReferenceDataItem
     * @return \FilippoToso\Travelport\Util\ReferenceDataRetrieveRsp
     */
    public function setReferenceDataItem($ReferenceDataItem)
    {
      $this->ReferenceDataItem = $ReferenceDataItem;
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
     * @return \FilippoToso\Travelport\Util\ReferenceDataRetrieveRsp
     */
    public function setMoreResults($MoreResults)
    {
      $this->MoreResults = $MoreResults;
      return $this;
    }

}
