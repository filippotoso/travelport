<?php

namespace FilippoToso\Travelport\Air;

class FlightDetailsRsp extends BaseRsp
{

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var CO2Emissions $CO2Emissions
     */
    protected $CO2Emissions = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param typeBaseAirSegment $AirSegment
     * @param CO2Emissions $CO2Emissions
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $AirSegment = null, $CO2Emissions = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->AirSegment = $AirSegment;
      $this->CO2Emissions = $CO2Emissions;
    }

    /**
     * @return typeBaseAirSegment
     */
    public function getAirSegment()
    {
      return $this->AirSegment;
    }

    /**
     * @param typeBaseAirSegment $AirSegment
     * @return \FilippoToso\Travelport\Air\FlightDetailsRsp
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return CO2Emissions
     */
    public function getCO2Emissions()
    {
      return $this->CO2Emissions;
    }

    /**
     * @param CO2Emissions $CO2Emissions
     * @return \FilippoToso\Travelport\Air\FlightDetailsRsp
     */
    public function setCO2Emissions($CO2Emissions)
    {
      $this->CO2Emissions = $CO2Emissions;
      return $this;
    }

}
