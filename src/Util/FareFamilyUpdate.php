<?php

namespace FilippoToso\Travelport\Util;

class FareFamilyUpdate
{

    /**
     * @var FareFamily $FareFamily
     */
    protected $FareFamily = null;

    /**
     * @param FareFamily $FareFamily
     */
    public function __construct($FareFamily = null)
    {
      $this->FareFamily = $FareFamily;
    }

    /**
     * @return FareFamily
     */
    public function getFareFamily()
    {
      return $this->FareFamily;
    }

    /**
     * @param FareFamily $FareFamily
     * @return \FilippoToso\Travelport\Util\FareFamilyUpdate
     */
    public function setFareFamily($FareFamily)
    {
      $this->FareFamily = $FareFamily;
      return $this;
    }

}
