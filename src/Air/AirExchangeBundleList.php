<?php

namespace FilippoToso\Travelport\Air;

class AirExchangeBundleList
{

    /**
     * @var AirExchangeBundle $AirExchangeBundle
     */
    protected $AirExchangeBundle = null;

    /**
     * @param AirExchangeBundle $AirExchangeBundle
     */
    public function __construct($AirExchangeBundle = null)
    {
      $this->AirExchangeBundle = $AirExchangeBundle;
    }

    /**
     * @return AirExchangeBundle
     */
    public function getAirExchangeBundle()
    {
      return $this->AirExchangeBundle;
    }

    /**
     * @param AirExchangeBundle $AirExchangeBundle
     * @return \FilippoToso\Travelport\Air\AirExchangeBundleList
     */
    public function setAirExchangeBundle($AirExchangeBundle)
    {
      $this->AirExchangeBundle = $AirExchangeBundle;
      return $this;
    }

}
