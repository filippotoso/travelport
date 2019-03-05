<?php

namespace FilippoToso\Travelport\Util;

class CalculateTaxRsp extends BaseRsp
{

    /**
     * @var CalculateTaxResult $CalculateTaxResult
     */
    protected $CalculateTaxResult = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param CalculateTaxResult $CalculateTaxResult
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $CalculateTaxResult = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->CalculateTaxResult = $CalculateTaxResult;
    }

    /**
     * @return CalculateTaxResult
     */
    public function getCalculateTaxResult()
    {
      return $this->CalculateTaxResult;
    }

    /**
     * @param CalculateTaxResult $CalculateTaxResult
     * @return \FilippoToso\Travelport\Util\CalculateTaxRsp
     */
    public function setCalculateTaxResult($CalculateTaxResult)
    {
      $this->CalculateTaxResult = $CalculateTaxResult;
      return $this;
    }

}
