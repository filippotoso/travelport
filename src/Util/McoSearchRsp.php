<?php

namespace FilippoToso\Travelport\Util;

class McoSearchRsp extends BaseRsp
{

    /**
     * @var McoSearchResult $McoSearchResult
     */
    protected $McoSearchResult = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param McoSearchResult $McoSearchResult
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $McoSearchResult = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->McoSearchResult = $McoSearchResult;
    }

    /**
     * @return McoSearchResult
     */
    public function getMcoSearchResult()
    {
      return $this->McoSearchResult;
    }

    /**
     * @param McoSearchResult $McoSearchResult
     * @return \FilippoToso\Travelport\Util\McoSearchRsp
     */
    public function setMcoSearchResult($McoSearchResult)
    {
      $this->McoSearchResult = $McoSearchResult;
      return $this;
    }

}
