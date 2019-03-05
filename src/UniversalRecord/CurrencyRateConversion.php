<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CurrencyRateConversion
{

    /**
     * @var float $RateConversion
     */
    protected $RateConversion = null;

    /**
     * @var typeCurrency $SourceCurrencyCode
     */
    protected $SourceCurrencyCode = null;

    /**
     * @var typeCurrency $RequestedCurrencyCode
     */
    protected $RequestedCurrencyCode = null;

    /**
     * @var int $DecimalPlaces
     */
    protected $DecimalPlaces = null;

    /**
     * @param float $RateConversion
     * @param typeCurrency $SourceCurrencyCode
     * @param typeCurrency $RequestedCurrencyCode
     * @param int $DecimalPlaces
     */
    public function __construct($RateConversion = null, $SourceCurrencyCode = null, $RequestedCurrencyCode = null, $DecimalPlaces = null)
    {
      $this->RateConversion = $RateConversion;
      $this->SourceCurrencyCode = $SourceCurrencyCode;
      $this->RequestedCurrencyCode = $RequestedCurrencyCode;
      $this->DecimalPlaces = $DecimalPlaces;
    }

    /**
     * @return float
     */
    public function getRateConversion()
    {
      return $this->RateConversion;
    }

    /**
     * @param float $RateConversion
     * @return \FilippoToso\Travelport\UniversalRecord\CurrencyRateConversion
     */
    public function setRateConversion($RateConversion)
    {
      $this->RateConversion = $RateConversion;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getSourceCurrencyCode()
    {
      return $this->SourceCurrencyCode;
    }

    /**
     * @param typeCurrency $SourceCurrencyCode
     * @return \FilippoToso\Travelport\UniversalRecord\CurrencyRateConversion
     */
    public function setSourceCurrencyCode($SourceCurrencyCode)
    {
      $this->SourceCurrencyCode = $SourceCurrencyCode;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getRequestedCurrencyCode()
    {
      return $this->RequestedCurrencyCode;
    }

    /**
     * @param typeCurrency $RequestedCurrencyCode
     * @return \FilippoToso\Travelport\UniversalRecord\CurrencyRateConversion
     */
    public function setRequestedCurrencyCode($RequestedCurrencyCode)
    {
      $this->RequestedCurrencyCode = $RequestedCurrencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getDecimalPlaces()
    {
      return $this->DecimalPlaces;
    }

    /**
     * @param int $DecimalPlaces
     * @return \FilippoToso\Travelport\UniversalRecord\CurrencyRateConversion
     */
    public function setDecimalPlaces($DecimalPlaces)
    {
      $this->DecimalPlaces = $DecimalPlaces;
      return $this;
    }

}
