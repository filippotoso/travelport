<?php

namespace FilippoToso\Travelport\Air;

class AirFareRulesRsp extends BaseRsp
{

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
     * @param FareRule $FareRule
     */
    public function __construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $FareRule)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->FareRule = $FareRule;
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
     * @return \FilippoToso\Travelport\Air\AirFareRulesRsp
     */
    public function setFareRule($FareRule)
    {
      $this->FareRule = $FareRule;
      return $this;
    }

}
