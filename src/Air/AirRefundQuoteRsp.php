<?php

namespace FilippoToso\Travelport\Air;

class AirRefundQuoteRsp extends BaseRsp
{

    /**
     * @var AirRefundBundle $AirRefundBundle
     */
    protected $AirRefundBundle = null;

    /**
     * @var TCRRefundBundle $TCRRefundBundle
     */
    protected $TCRRefundBundle = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param AirRefundBundle $AirRefundBundle
     * @param TCRRefundBundle $TCRRefundBundle
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $AirRefundBundle = null, $TCRRefundBundle = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->AirRefundBundle = $AirRefundBundle;
      $this->TCRRefundBundle = $TCRRefundBundle;
    }

    /**
     * @return AirRefundBundle
     */
    public function getAirRefundBundle()
    {
      return $this->AirRefundBundle;
    }

    /**
     * @param AirRefundBundle $AirRefundBundle
     * @return \FilippoToso\Travelport\Air\AirRefundQuoteRsp
     */
    public function setAirRefundBundle($AirRefundBundle)
    {
      $this->AirRefundBundle = $AirRefundBundle;
      return $this;
    }

    /**
     * @return TCRRefundBundle
     */
    public function getTCRRefundBundle()
    {
      return $this->TCRRefundBundle;
    }

    /**
     * @param TCRRefundBundle $TCRRefundBundle
     * @return \FilippoToso\Travelport\Air\AirRefundQuoteRsp
     */
    public function setTCRRefundBundle($TCRRefundBundle)
    {
      $this->TCRRefundBundle = $TCRRefundBundle;
      return $this;
    }

}
