<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeTicketingRsp extends BaseRsp
{

    /**
     * @var AirSolutionChangedInfo $AirSolutionChangedInfo
     */
    protected $AirSolutionChangedInfo = null;

    /**
     * @var ETR $ETR
     */
    protected $ETR = null;

    /**
     * @var TicketFailureInfo $TicketFailureInfo
     */
    protected $TicketFailureInfo = null;

    /**
     * @var DetailedBillingInformation $DetailedBillingInformation
     */
    protected $DetailedBillingInformation = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param AirSolutionChangedInfo $AirSolutionChangedInfo
     * @param ETR $ETR
     * @param TicketFailureInfo $TicketFailureInfo
     * @param DetailedBillingInformation $DetailedBillingInformation
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $AirSolutionChangedInfo = null, $ETR = null, $TicketFailureInfo = null, $DetailedBillingInformation = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->AirSolutionChangedInfo = $AirSolutionChangedInfo;
      $this->ETR = $ETR;
      $this->TicketFailureInfo = $TicketFailureInfo;
      $this->DetailedBillingInformation = $DetailedBillingInformation;
    }

    /**
     * @return AirSolutionChangedInfo
     */
    public function getAirSolutionChangedInfo()
    {
      return $this->AirSolutionChangedInfo;
    }

    /**
     * @param AirSolutionChangedInfo $AirSolutionChangedInfo
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingRsp
     */
    public function setAirSolutionChangedInfo($AirSolutionChangedInfo)
    {
      $this->AirSolutionChangedInfo = $AirSolutionChangedInfo;
      return $this;
    }

    /**
     * @return ETR
     */
    public function getETR()
    {
      return $this->ETR;
    }

    /**
     * @param ETR $ETR
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingRsp
     */
    public function setETR($ETR)
    {
      $this->ETR = $ETR;
      return $this;
    }

    /**
     * @return TicketFailureInfo
     */
    public function getTicketFailureInfo()
    {
      return $this->TicketFailureInfo;
    }

    /**
     * @param TicketFailureInfo $TicketFailureInfo
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingRsp
     */
    public function setTicketFailureInfo($TicketFailureInfo)
    {
      $this->TicketFailureInfo = $TicketFailureInfo;
      return $this;
    }

    /**
     * @return DetailedBillingInformation
     */
    public function getDetailedBillingInformation()
    {
      return $this->DetailedBillingInformation;
    }

    /**
     * @param DetailedBillingInformation $DetailedBillingInformation
     * @return \FilippoToso\Travelport\Air\AirExchangeTicketingRsp
     */
    public function setDetailedBillingInformation($DetailedBillingInformation)
    {
      $this->DetailedBillingInformation = $DetailedBillingInformation;
      return $this;
    }

}
