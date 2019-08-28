<?php

namespace FilippoToso\Travelport\Air;

class AlternateLocationDistanceList
{

    /**
     * @var AlternateLocationDistance $AlternateLocationDistance
     */
    protected $AlternateLocationDistance = null;

    /**
     * @param AlternateLocationDistance $AlternateLocationDistance
     */
    public function __construct($AlternateLocationDistance = null)
    {
      $this->AlternateLocationDistance = $AlternateLocationDistance;
    }

    /**
     * @return AlternateLocationDistance
     */
    public function getAlternateLocationDistance()
    {
      return $this->AlternateLocationDistance;
    }

    /**
     * @param AlternateLocationDistance $AlternateLocationDistance
     * @return \FilippoToso\Travelport\Air\AlternateLocationDistanceList
     */
    public function setAlternateLocationDistance($AlternateLocationDistance)
    {
      $this->AlternateLocationDistance = $AlternateLocationDistance;
      return $this;
    }

}
