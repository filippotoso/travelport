<?php

namespace FilippoToso\Travelport\System;

class Distance
{

    /**
     * @var anonymous59 $Units
     */
    protected $Units = null;

    /**
     * @var int $Value
     */
    protected $Value = null;

    /**
     * @var anonymous60 $Direction
     */
    protected $Direction = null;

    /**
     * @param anonymous59 $Units
     * @param int $Value
     * @param anonymous60 $Direction
     */
    public function __construct($Units = null, $Value = null, $Direction = null)
    {
      $this->Units = $Units;
      $this->Value = $Value;
      $this->Direction = $Direction;
    }

    /**
     * @return anonymous59
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param anonymous59 $Units
     * @return \FilippoToso\Travelport\System\Distance
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
     * @return \FilippoToso\Travelport\System\Distance
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return anonymous60
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous60 $Direction
     * @return \FilippoToso\Travelport\System\Distance
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

}
