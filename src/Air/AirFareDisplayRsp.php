<?php

namespace FilippoToso\Travelport\Air;

class AirFareDisplayRsp extends BaseRsp
{

    /**
     * @var FareDisplay $FareDisplay
     */
    protected $FareDisplay = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param FareDisplay $FareDisplay
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $FareDisplay = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->FareDisplay = $FareDisplay;
    }

    /**
     * @return FareDisplay
     */
    public function getFareDisplay()
    {
      return $this->FareDisplay;
    }

    /**
     * @param FareDisplay $FareDisplay
     * @return \FilippoToso\Travelport\Air\AirFareDisplayRsp
     */
    public function setFareDisplay($FareDisplay)
    {
      $this->FareDisplay = $FareDisplay;
      return $this;
    }

}
