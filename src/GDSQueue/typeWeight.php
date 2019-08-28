<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeWeight
{

    /**
     * @var int $Value
     */
    protected $Value = null;

    /**
     * @var typeUnitWeight $Unit
     */
    protected $Unit = null;

    /**
     * @param int $Value
     * @param typeUnitWeight $Unit
     */
    public function __construct($Value = null, $Unit = null)
    {
      $this->Value = $Value;
      $this->Unit = $Unit;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param int $Value
     * @return \FilippoToso\Travelport\GDSQueue\typeWeight
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return typeUnitWeight
     */
    public function getUnit()
    {
      return $this->Unit;
    }

    /**
     * @param typeUnitWeight $Unit
     * @return \FilippoToso\Travelport\GDSQueue\typeWeight
     */
    public function setUnit($Unit)
    {
      $this->Unit = $Unit;
      return $this;
    }

}
