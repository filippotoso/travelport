<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeMultiQuoteRsp extends BaseRsp
{

    /**
     * @var AirSegmentList $AirSegmentList
     */
    protected $AirSegmentList = null;

    /**
     * @var BrandList $BrandList
     */
    protected $BrandList = null;

    /**
     * @var AirExchangeMulitQuoteList $AirExchangeMulitQuoteList
     */
    protected $AirExchangeMulitQuoteList = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param AirSegmentList $AirSegmentList
     * @param BrandList $BrandList
     * @param AirExchangeMulitQuoteList $AirExchangeMulitQuoteList
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $AirSegmentList = null, $BrandList = null, $AirExchangeMulitQuoteList = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->AirSegmentList = $AirSegmentList;
      $this->BrandList = $BrandList;
      $this->AirExchangeMulitQuoteList = $AirExchangeMulitQuoteList;
    }

    /**
     * @return AirSegmentList
     */
    public function getAirSegmentList()
    {
      return $this->AirSegmentList;
    }

    /**
     * @param AirSegmentList $AirSegmentList
     * @return \FilippoToso\Travelport\Air\AirExchangeMultiQuoteRsp
     */
    public function setAirSegmentList($AirSegmentList)
    {
      $this->AirSegmentList = $AirSegmentList;
      return $this;
    }

    /**
     * @return BrandList
     */
    public function getBrandList()
    {
      return $this->BrandList;
    }

    /**
     * @param BrandList $BrandList
     * @return \FilippoToso\Travelport\Air\AirExchangeMultiQuoteRsp
     */
    public function setBrandList($BrandList)
    {
      $this->BrandList = $BrandList;
      return $this;
    }

    /**
     * @return AirExchangeMulitQuoteList
     */
    public function getAirExchangeMulitQuoteList()
    {
      return $this->AirExchangeMulitQuoteList;
    }

    /**
     * @param AirExchangeMulitQuoteList $AirExchangeMulitQuoteList
     * @return \FilippoToso\Travelport\Air\AirExchangeMultiQuoteRsp
     */
    public function setAirExchangeMulitQuoteList($AirExchangeMulitQuoteList)
    {
      $this->AirExchangeMulitQuoteList = $AirExchangeMulitQuoteList;
      return $this;
    }

}
