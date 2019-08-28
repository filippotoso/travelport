<?php

namespace FilippoToso\Travelport\Air;

class AirSolutionChangedInfo
{

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var anonymous640 $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @param anonymous640 $ReasonCode
     */
    public function __construct($AirPricingSolution = null, $ReasonCode = null)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      $this->ReasonCode = $ReasonCode;
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
     * @return \FilippoToso\Travelport\Air\AirSolutionChangedInfo
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

    /**
     * @return anonymous640
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param anonymous640 $ReasonCode
     * @return \FilippoToso\Travelport\Air\AirSolutionChangedInfo
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

}
