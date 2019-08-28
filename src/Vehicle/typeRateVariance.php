<?php

namespace FilippoToso\Travelport\Vehicle;

class typeRateVariance
{

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @var string $Apply
     */
    protected $Apply = null;

    /**
     * @param string $Type
     * @param float $Value
     * @param string $Apply
     */
    public function __construct($Type = null, $Value = null, $Apply = null)
    {
      $this->Type = $Type;
      $this->Value = $Value;
      $this->Apply = $Apply;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Vehicle\typeRateVariance
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
     * @return \FilippoToso\Travelport\Vehicle\typeRateVariance
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getApply()
    {
      return $this->Apply;
    }

    /**
     * @param string $Apply
     * @return \FilippoToso\Travelport\Vehicle\typeRateVariance
     */
    public function setApply($Apply)
    {
      $this->Apply = $Apply;
      return $this;
    }

}
