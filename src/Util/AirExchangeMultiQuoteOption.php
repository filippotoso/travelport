<?php

namespace FilippoToso\Travelport\Util;

class AirExchangeMultiQuoteOption
{

    /**
     * @var AirSegmentData $AirSegmentData
     */
    protected $AirSegmentData = null;

    /**
     * @var AirExchangeBundleTotal $AirExchangeBundleTotal
     */
    protected $AirExchangeBundleTotal = null;

    /**
     * @var AirExchangeBundleList $AirExchangeBundleList
     */
    protected $AirExchangeBundleList = null;

    /**
     * @param AirSegmentData $AirSegmentData
     * @param AirExchangeBundleTotal $AirExchangeBundleTotal
     * @param AirExchangeBundleList $AirExchangeBundleList
     */
    public function __construct($AirSegmentData = null, $AirExchangeBundleTotal = null, $AirExchangeBundleList = null)
    {
      $this->AirSegmentData = $AirSegmentData;
      $this->AirExchangeBundleTotal = $AirExchangeBundleTotal;
      $this->AirExchangeBundleList = $AirExchangeBundleList;
    }

    /**
     * @return AirSegmentData
     */
    public function getAirSegmentData()
    {
      return $this->AirSegmentData;
    }

    /**
     * @param AirSegmentData $AirSegmentData
     * @return \FilippoToso\Travelport\Util\AirExchangeMultiQuoteOption
     */
    public function setAirSegmentData($AirSegmentData)
    {
      $this->AirSegmentData = $AirSegmentData;
      return $this;
    }

    /**
     * @return AirExchangeBundleTotal
     */
    public function getAirExchangeBundleTotal()
    {
      return $this->AirExchangeBundleTotal;
    }

    /**
     * @param AirExchangeBundleTotal $AirExchangeBundleTotal
     * @return \FilippoToso\Travelport\Util\AirExchangeMultiQuoteOption
     */
    public function setAirExchangeBundleTotal($AirExchangeBundleTotal)
    {
      $this->AirExchangeBundleTotal = $AirExchangeBundleTotal;
      return $this;
    }

    /**
     * @return AirExchangeBundleList
     */
    public function getAirExchangeBundleList()
    {
      return $this->AirExchangeBundleList;
    }

    /**
     * @param AirExchangeBundleList $AirExchangeBundleList
     * @return \FilippoToso\Travelport\Util\AirExchangeMultiQuoteOption
     */
    public function setAirExchangeBundleList($AirExchangeBundleList)
    {
      $this->AirExchangeBundleList = $AirExchangeBundleList;
      return $this;
    }

}
