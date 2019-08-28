<?php

namespace FilippoToso\Travelport\Util;

class typeUnitOfMeasure
{

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @var string $Unit
     */
    protected $Unit = null;

    /**
     * @param float $Value
     * @param string $Unit
     */
    public function __construct($Value = null, $Unit = null)
    {
      $this->Value = $Value;
      $this->Unit = $Unit;
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
     * @return \FilippoToso\Travelport\Util\typeUnitOfMeasure
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
      return $this->Unit;
    }

    /**
     * @param string $Unit
     * @return \FilippoToso\Travelport\Util\typeUnitOfMeasure
     */
    public function setUnit($Unit)
    {
      $this->Unit = $Unit;
      return $this;
    }

}
