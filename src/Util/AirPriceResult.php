<?php

namespace FilippoToso\Travelport\Util;

class AirPriceResult
{

    /**
     * @var AirPricingSolution $AirPricingSolution
     */
    protected $AirPricingSolution = null;

    /**
     * @var FareRule $FareRule
     */
    protected $FareRule = null;

    /**
     * @var typeResultMessage $AirPriceError
     */
    protected $AirPriceError = null;

    /**
     * @var anonymous573 $CommandKey
     */
    protected $CommandKey = null;

    /**
     * @param AirPricingSolution $AirPricingSolution
     * @param FareRule $FareRule
     * @param anonymous573 $CommandKey
     */
    public function __construct($AirPricingSolution = null, $FareRule = null, $CommandKey = null)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      $this->FareRule = $FareRule;
      $this->CommandKey = $CommandKey;
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
     * @return \FilippoToso\Travelport\Util\AirPriceResult
     */
    public function setAirPricingSolution($AirPricingSolution)
    {
      $this->AirPricingSolution = $AirPricingSolution;
      return $this;
    }

    /**
     * @return FareRule
     */
    public function getFareRule()
    {
      return $this->FareRule;
    }

    /**
     * @param FareRule $FareRule
     * @return \FilippoToso\Travelport\Util\AirPriceResult
     */
    public function setFareRule($FareRule)
    {
      $this->FareRule = $FareRule;
      return $this;
    }

    /**
     * @return typeResultMessage
     */
    public function getAirPriceError()
    {
      return $this->AirPriceError;
    }

    /**
     * @param typeResultMessage $AirPriceError
     * @return \FilippoToso\Travelport\Util\AirPriceResult
     */
    public function setAirPriceError($AirPriceError)
    {
      $this->AirPriceError = $AirPriceError;
      return $this;
    }

    /**
     * @return anonymous573
     */
    public function getCommandKey()
    {
      return $this->CommandKey;
    }

    /**
     * @param anonymous573 $CommandKey
     * @return \FilippoToso\Travelport\Util\AirPriceResult
     */
    public function setCommandKey($CommandKey)
    {
      $this->CommandKey = $CommandKey;
      return $this;
    }

}
