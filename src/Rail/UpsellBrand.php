<?php

namespace FilippoToso\Travelport\Rail;

class UpsellBrand
{

    /**
     * @var string $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @var string $FareInfoRef
     */
    protected $FareInfoRef = null;

    /**
     * @param string $FareBasis
     * @param string $FareInfoRef
     */
    public function __construct($FareBasis = null, $FareInfoRef = null)
    {
      $this->FareBasis = $FareBasis;
      $this->FareInfoRef = $FareInfoRef;
    }

    /**
     * @return string
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param string $FareBasis
     * @return \FilippoToso\Travelport\Rail\UpsellBrand
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param string $FareInfoRef
     * @return \FilippoToso\Travelport\Rail\UpsellBrand
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
