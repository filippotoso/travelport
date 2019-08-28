<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeVehicleSearchDistance
{

    /**
     * @var typeDistance $Units
     */
    protected $Units = null;

    /**
     * @var anonymous561 $Direction
     */
    protected $Direction = null;

    /**
     * @var anonymous562 $MinDistance
     */
    protected $MinDistance = null;

    /**
     * @var anonymous563 $MaxDistance
     */
    protected $MaxDistance = null;

    /**
     * @param typeDistance $Units
     * @param anonymous561 $Direction
     * @param anonymous562 $MinDistance
     * @param anonymous563 $MaxDistance
     */
    public function __construct($Units = null, $Direction = null, $MinDistance = null, $MaxDistance = null)
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
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleSearchDistance
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

    /**
     * @return anonymous561
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous561 $Direction
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleSearchDistance
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return anonymous562
     */
    public function getMinDistance()
    {
      return $this->MinDistance;
    }

    /**
     * @param anonymous562 $MinDistance
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleSearchDistance
     */
    public function setMinDistance($MinDistance)
    {
      $this->MinDistance = $MinDistance;
      return $this;
    }

    /**
     * @return anonymous563
     */
    public function getMaxDistance()
    {
      return $this->MaxDistance;
    }

    /**
     * @param anonymous563 $MaxDistance
     * @return \FilippoToso\Travelport\GDSQueue\typeVehicleSearchDistance
     */
    public function setMaxDistance($MaxDistance)
    {
      $this->MaxDistance = $MaxDistance;
      return $this;
    }

}
