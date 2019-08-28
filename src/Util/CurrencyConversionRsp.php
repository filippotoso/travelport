<?php

namespace FilippoToso\Travelport\Util;

class CurrencyConversionRsp extends BaseRsp
{

    /**
     * @var CurrencyConversion $CurrencyConversion
     */
    protected $CurrencyConversion = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param CurrencyConversion $CurrencyConversion
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $CurrencyConversion = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->CurrencyConversion = $CurrencyConversion;
    }

    /**
     * @return CurrencyConversion
     */
    public function getCurrencyConversion()
    {
      return $this->CurrencyConversion;
    }

    /**
     * @param CurrencyConversion $CurrencyConversion
     * @return \FilippoToso\Travelport\Util\CurrencyConversionRsp
     */
    public function setCurrencyConversion($CurrencyConversion)
    {
      $this->CurrencyConversion = $CurrencyConversion;
      return $this;
    }

}
