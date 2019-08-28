<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirSolutionChangedInfo
{

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var anonymous574 $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @param anonymous574 $ReasonCode
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirSolutionChangedInfo
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

    /**
     * @return anonymous574
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param anonymous574 $ReasonCode
     * @return \FilippoToso\Travelport\UniversalRecord\AirSolutionChangedInfo
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

}
