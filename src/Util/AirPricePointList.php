<?php

namespace FilippoToso\Travelport\Util;

class AirPricePointList
{

    /**
     * @var AirPricePoint $AirPricePoint
     */
    protected $AirPricePoint = null;

    /**
     * @param AirPricePoint $AirPricePoint
     */
    public function __construct($AirPricePoint = null)
    {
      $this->AirPricePoint = $AirPricePoint;
    }

    /**
     * @return AirPricePoint
     */
    public function getAirPricePoint()
    {
      return $this->AirPricePoint;
    }

    /**
     * @param AirPricePoint $AirPricePoint
     * @return \FilippoToso\Travelport\Util\AirPricePointList
     */
    public function setAirPricePoint($AirPricePoint)
    {
      $this->AirPricePoint = $AirPricePoint;
      return $this;
    }

}
