<?php

namespace FilippoToso\Travelport\Rail;

class Fare
{

    /**
     * @var boolean $FareSpecific
     */
    protected $FareSpecific = null;

    /**
     * @var boolean $MultipleFareIndicator
     */
    protected $MultipleFareIndicator = null;

    /**
     * @var StringLength1to8 $RateCode
     */
    protected $RateCode = null;

    /**
     * @param boolean $FareSpecific
     * @param boolean $MultipleFareIndicator
     * @param StringLength1to8 $RateCode
     */
    public function __construct($FareSpecific = null, $MultipleFareIndicator = null, $RateCode = null)
    {
      $this->FareSpecific = $FareSpecific;
      $this->MultipleFareIndicator = $MultipleFareIndicator;
      $this->RateCode = $RateCode;
    }

    /**
     * @return boolean
     */
    public function getFareSpecific()
    {
      return $this->FareSpecific;
    }

    /**
     * @param boolean $FareSpecific
     * @return \FilippoToso\Travelport\Rail\Fare
     */
    public function setFareSpecific($FareSpecific)
    {
      $this->FareSpecific = $FareSpecific;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMultipleFareIndicator()
    {
      return $this->MultipleFareIndicator;
    }

    /**
     * @param boolean $MultipleFareIndicator
     * @return \FilippoToso\Travelport\Rail\Fare
     */
    public function setMultipleFareIndicator($MultipleFareIndicator)
    {
      $this->MultipleFareIndicator = $MultipleFareIndicator;
      return $this;
    }

    /**
     * @return StringLength1to8
     */
    public function getRateCode()
    {
      return $this->RateCode;
    }

    /**
     * @param StringLength1to8 $RateCode
     * @return \FilippoToso\Travelport\Rail\Fare
     */
    public function setRateCode($RateCode)
    {
      $this->RateCode = $RateCode;
      return $this;
    }

}
