<?php

namespace FilippoToso\Travelport\Rail;

class RailRefundRsp extends BaseRsp
{

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var MCO $MCO
     */
    protected $MCO = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param Payment $Payment
     * @param MCO $MCO
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $Payment = null, $MCO = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->Payment = $Payment;
      $this->MCO = $MCO;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \FilippoToso\Travelport\Rail\RailRefundRsp
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return MCO
     */
    public function getMCO()
    {
      return $this->MCO;
    }

    /**
     * @param MCO $MCO
     * @return \FilippoToso\Travelport\Rail\RailRefundRsp
     */
    public function setMCO($MCO)
    {
      $this->MCO = $MCO;
      return $this;
    }

}
