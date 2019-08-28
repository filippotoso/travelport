<?php

namespace FilippoToso\Travelport\Vehicle;

class typeVehicleSearchDistance
{

    /**
     * @var typeDistance $Units
     */
    protected $Units = null;

    /**
     * @var anonymous564 $Direction
     */
    protected $Direction = null;

    /**
     * @var anonymous565 $MinDistance
     */
    protected $MinDistance = null;

    /**
     * @var anonymous566 $MaxDistance
     */
    protected $MaxDistance = null;

    /**
     * @param typeDistance $Units
     * @param anonymous564 $Direction
     * @param anonymous565 $MinDistance
     * @param anonymous566 $MaxDistance
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
     * @return \FilippoToso\Travelport\Vehicle\typeVehicleSearchDistance
     */
    public function setUnits($Units)
    {
      $this->Units = $Units;
      return $this;
    }

    /**
     * @return anonymous564
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param anonymous564 $Direction
     * @return \FilippoToso\Travelport\Vehicle\typeVehicleSearchDistance
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return anonymous565
     */
    public function getMinDistance()
    {
      return $this->MinDistance;
    }

    /**
     * @param anonymous565 $MinDistance
     * @return \FilippoToso\Travelport\Vehicle\typeVehicleSearchDistance
     */
    public function setMinDistance($MinDistance)
    {
      $this->MinDistance = $MinDistance;
      return $this;
    }

    /**
     * @return anonymous566
     */
    public function getMaxDistance()
    {
      return $this->MaxDistance;
    }

    /**
     * @param anonymous566 $MaxDistance
     * @return \FilippoToso\Travelport\Vehicle\typeVehicleSearchDistance
     */
    public function setMaxDistance($MaxDistance)
    {
      $this->MaxDistance = $MaxDistance;
      return $this;
    }

}
