<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeEligibilityRsp extends BaseRsp
{

    /**
     * @var ExchangeEligibilityInfo $ExchangeEligibilityInfo
     */
    protected $ExchangeEligibilityInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param ExchangeEligibilityInfo $ExchangeEligibilityInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $ExchangeEligibilityInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->ExchangeEligibilityInfo = $ExchangeEligibilityInfo;
    }

    /**
     * @return ExchangeEligibilityInfo
     */
    public function getExchangeEligibilityInfo()
    {
      return $this->ExchangeEligibilityInfo;
    }

    /**
     * @param ExchangeEligibilityInfo $ExchangeEligibilityInfo
     * @return \FilippoToso\Travelport\Air\AirExchangeEligibilityRsp
     */
    public function setExchangeEligibilityInfo($ExchangeEligibilityInfo)
    {
      $this->ExchangeEligibilityInfo = $ExchangeEligibilityInfo;
      return $this;
    }

}
