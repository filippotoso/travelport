<?php

namespace FilippoToso\Travelport\Util;

class BrandedFareSearchRsp extends BaseRsp
{

    /**
     * @var FareFamily $FareFamily
     */
    protected $FareFamily = null;

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
     * @param FareFamily $FareFamily
     * @param typeMoreResults $MoreResults
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $FareFamily = null, $MoreResults = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->FareFamily = $FareFamily;
      $this->MoreResults = $MoreResults;
    }

    /**
     * @return FareFamily
     */
    public function getFareFamily()
    {
      return $this->FareFamily;
    }

    /**
     * @param FareFamily $FareFamily
     * @return \FilippoToso\Travelport\Util\BrandedFareSearchRsp
     */
    public function setFareFamily($FareFamily)
    {
      $this->FareFamily = $FareFamily;
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
     * @return \FilippoToso\Travelport\Util\BrandedFareSearchRsp
     */
    public function setMoreResults($MoreResults)
    {
      $this->MoreResults = $MoreResults;
      return $this;
    }

}
