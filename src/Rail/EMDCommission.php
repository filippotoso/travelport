<?php

namespace FilippoToso\Travelport\Rail;

class EMDCommission
{

    /**
     * @var typeAdjustmentType $Type
     */
    protected $Type = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @var typeCurrency $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @param typeAdjustmentType $Type
     * @param float $Value
     * @param typeCurrency $CurrencyCode
     */
    public function __construct($Type = null, $Value = null, $CurrencyCode = null)
    {
      $this->Type = $Type;
      $this->Value = $Value;
      $this->CurrencyCode = $CurrencyCode;
    }

    /**
     * @return typeAdjustmentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeAdjustmentType $Type
     * @return \FilippoToso\Travelport\Rail\EMDCommission
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \FilippoToso\Travelport\Rail\EMDCommission
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param typeCurrency $CurrencyCode
     * @return \FilippoToso\Travelport\Rail\EMDCommission
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

}
