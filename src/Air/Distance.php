<?php

namespace FilippoToso\Travelport\Air;

class Distance
{

    /**
     * @var anonymous69 $Units
     */
    protected $Units = null;

    /**
     * @var int $Value
     */
    protected $Value = null;

    /**
     * @var anonymous70 $Direction
     */
    protected $Direction = null;

    /**
     * @param anonymous69 $Units
     * @param int $Value
     * @param anonymous70 $Direction
     */
    public function __construct($Units = null, $Value = null, $Direction = null)
    {
      $this->Units = $Units;
      $this->Value = $Value;
      $this->Direction = $Direction;
    }

    /**
     * @return anonymous69
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param anonymous69 $Units
     * @return \FilippoToso\Travelport\Air\Distance
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\Distance
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return anonymous70
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous70 $Direction
     * @return \FilippoToso\Travelport\Air\Distance
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

}
