<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeVehicleSearchDistance
{

    /**
     * @var typeDistance $Units
     */
    protected $Units = null;

    /**
     * @var anonymous1101 $Direction
     */
    protected $Direction = null;

    /**
     * @var anonymous1102 $MinDistance
     */
    protected $MinDistance = null;

    /**
     * @var anonymous1103 $MaxDistance
     */
    protected $MaxDistance = null;

    /**
     * @param typeDistance $Units
     * @param anonymous1101 $Direction
     * @param anonymous1102 $MinDistance
     * @param anonymous1103 $MaxDistance
     */
    public function __construct($Units, $Direction, $MinDistance, $MaxDistance)
    {
      $this->Units = $Units;
      $this->Direction = $Direction;
      $this->MinDistance = $MinDistance;
      $this->MaxDistance = $MaxDistance;
    }

    /**
     * @return typeDistance
     */
    public function getUnits()
    {
      return $this->Units;
    }

    /**
     * @param typeDistance $Units
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleSearchDistance
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

    /**
     * @return anonymous1101
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous1101 $Direction
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleSearchDistance
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return anonymous1102
     */
    public function getMinDistance()
    {
      return $this->MinDistance;
    }

    /**
     * @param anonymous1102 $MinDistance
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleSearchDistance
     */
    public function setMinDistance($MinDistance)
    {
      $this->MinDistance = $MinDistance;
      return $this;
    }

    /**
     * @return anonymous1103
     */
    public function getMaxDistance()
    {
      return $this->MaxDistance;
    }

    /**
     * @param anonymous1103 $MaxDistance
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleSearchDistance
     */
    public function setMaxDistance($MaxDistance)
    {
      $this->MaxDistance = $MaxDistance;
      return $this;
    }

}
