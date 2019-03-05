<?php

namespace FilippoToso\Travelport\Air;

class AirRepriceRsp extends BaseRsp
{

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var FareRule $FareRule
     */
    protected $FareRule = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param AirPricingSolution $AirPricingSolution
     * @param FareRule $FareRule
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $AirPricingSolution = null, $FareRule = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->AirPricingSolution = $AirPricingSolution;
      $this->FareRule = $FareRule;
    }

    /**
     * @return AirPricingSolution
     */
    public function getAirPricingSolution()
    {
      return $this->AirPricingSolution;
    }

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @return \FilippoToso\Travelport\Air\AirRepriceRsp
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

    /**
     * @return FareRule
     */
    public function getFareRule()
    {
      return $this->FareRule;
    }

    /**
     * @param FareRule $FareRule
     * @return \FilippoToso\Travelport\Air\AirRepriceRsp
     */
    public function setFareRule($FareRule)
    {
      $this->FareRule = $FareRule;
      return $this;
    }

}
