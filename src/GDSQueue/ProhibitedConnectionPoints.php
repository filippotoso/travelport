<?php

namespace FilippoToso\Travelport\GDSQueue;

class ProhibitedConnectionPoints
{

    /**
     * @var typeLocation $ConnectionPoint
     */
    protected $ConnectionPoint = null;

    /**
     * @param typeLocation $ConnectionPoint
     */
    public function __construct($ConnectionPoint)
    {
      $this->ConnectionPoint = $ConnectionPoint;
    }

    /**
     * @return typeLocation
     */
    public function getConnectionPoint()
    {
      return $this->ConnectionPoint;
    }

    /**
     * @param typeLocation $ConnectionPoint
     * @return \FilippoToso\Travelport\GDSQueue\ProhibitedConnectionPoints
     */
    public function setConnectionPoint($ConnectionPoint)
    {
      $this->ConnectionPoint = $ConnectionPoint;
      return $this;
    }

}
