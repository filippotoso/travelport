<?php

namespace FilippoToso\Travelport\Air;

class FlightInformationRsp extends BaseRsp
{

    /**
     * @var FlightInfo $FlightInfo
     */
    protected $FlightInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param FlightInfo $FlightInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $FlightInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->FlightInfo = $FlightInfo;
    }

    /**
     * @return FlightInfo
     */
    public function getFlightInfo()
    {
      return $this->FlightInfo;
    }

    /**
     * @param FlightInfo $FlightInfo
     * @return \FilippoToso\Travelport\Air\FlightInformationRsp
     */
    public function setFlightInfo($FlightInfo)
    {
      $this->FlightInfo = $FlightInfo;
      return $this;
    }

}
