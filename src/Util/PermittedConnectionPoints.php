<?php

namespace FilippoToso\Travelport\Util;

class PermittedConnectionPoints
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
     * @return \FilippoToso\Travelport\Util\PermittedConnectionPoints
     */
    public function setConnectionPoint($ConnectionPoint)
    {
      $this->ConnectionPoint = $ConnectionPoint;
      return $this;
    }

}
