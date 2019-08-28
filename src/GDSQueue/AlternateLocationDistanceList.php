<?php

namespace FilippoToso\Travelport\GDSQueue;

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
     * @return \FilippoToso\Travelport\GDSQueue\AlternateLocationDistanceList
     */
    public function setAlternateLocationDistance($AlternateLocationDistance)
    {
      $this->AlternateLocationDistance = $AlternateLocationDistance;
      return $this;
    }

}
