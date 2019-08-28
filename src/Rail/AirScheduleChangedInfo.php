<?php

namespace FilippoToso\Travelport\Rail;

class AirScheduleChangedInfo
{

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @param AirPricingSolution $AirPricingSolution
     */
    public function __construct($AirPricingSolution = null)
    {
      $this->AirPricingSolution = $AirPricingSolution;
    }

    /**
     * @return AirPricingSolution
     */
    public function getAirPricingSolution()
    {
      return $this->AirPricingSolution;
    }

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @return \FilippoToso\Travelport\Rail\AirScheduleChangedInfo
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

}
