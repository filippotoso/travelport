<?php

namespace FilippoToso\Travelport\Air;

class FlightTimeTableRsp extends BaseSearchRsp
{

    /**
     * @var FlightTimeTableList $FlightTimeTableList
     */
    protected $FlightTimeTableList = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param NextResultReference $NextResultReference
     */
    public function __construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference);
    }

    /**
     * @return FlightTimeTableList
     */
    public function getFlightTimeTableList()
    {
      return $this->FlightTimeTableList;
    }

    /**
     * @param FlightTimeTableList $FlightTimeTableList
     * @return \FilippoToso\Travelport\Air\FlightTimeTableRsp
     */
    public function setFlightTimeTableList($FlightTimeTableList)
    {
      $this->FlightTimeTableList = $FlightTimeTableList;
      return $this;
    }

}
