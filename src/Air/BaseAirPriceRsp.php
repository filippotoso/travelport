<?php

namespace FilippoToso\Travelport\Air;

class BaseAirPriceRsp extends BaseRsp
{

    /**
     * @var AirItinerary $AirItinerary
     */
    protected $AirItinerary = null;

    /**
     * @var AirPriceResult $AirPriceResult
     */
    protected $AirPriceResult = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param AirItinerary $AirItinerary
     * @param AirPriceResult $AirPriceResult
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $AirItinerary = null, $AirPriceResult = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->AirItinerary = $AirItinerary;
      $this->AirPriceResult = $AirPriceResult;
    }

    /**
     * @return AirItinerary
     */
    public function getAirItinerary()
    {
      return $this->AirItinerary;
    }

    /**
     * @param AirItinerary $AirItinerary
     * @return \FilippoToso\Travelport\Air\BaseAirPriceRsp
     */
    public function setAirItinerary($AirItinerary)
    {
      $this->AirItinerary = $AirItinerary;
      return $this;
    }

    /**
     * @return AirPriceResult
     */
    public function getAirPriceResult()
    {
      return $this->AirPriceResult;
    }

    /**
     * @param AirPriceResult $AirPriceResult
     * @return \FilippoToso\Travelport\Air\BaseAirPriceRsp
     */
    public function setAirPriceResult($AirPriceResult)
    {
      $this->AirPriceResult = $AirPriceResult;
      return $this;
    }

}
