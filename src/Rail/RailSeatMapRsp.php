<?php

namespace FilippoToso\Travelport\Rail;

class RailSeatMapRsp extends BaseRsp
{

    /**
     * @var Coach $Coach
     */
    protected $Coach = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param Coach $Coach
     */
    public function __construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $Coach)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->Coach = $Coach;
    }

    /**
     * @return Coach
     */
    public function getCoach()
    {
      return $this->Coach;
    }

    /**
     * @param Coach $Coach
     * @return \FilippoToso\Travelport\Rail\RailSeatMapRsp
     */
    public function setCoach($Coach)
    {
      $this->Coach = $Coach;
      return $this;
    }

}
