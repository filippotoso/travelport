<?php

namespace FilippoToso\Travelport\Rail;

class AirPricingAdjustment
{

    /**
     * @var Adjustment $Adjustment
     */
    protected $Adjustment = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param Adjustment $Adjustment
     * @param typeRef $Key
     */
    public function __construct($Adjustment = null, $Key = null)
    {
      $this->Adjustment = $Adjustment;
      $this->Key = $Key;
    }

    /**
     * @return Adjustment
     */
    public function getAdjustment()
    {
      return $this->Adjustment;
    }

    /**
     * @param Adjustment $Adjustment
     * @return \FilippoToso\Travelport\Rail\AirPricingAdjustment
     */
    public function setAdjustment($Adjustment)
    {
      $this->Adjustment = $Adjustment;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Rail\AirPricingAdjustment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
