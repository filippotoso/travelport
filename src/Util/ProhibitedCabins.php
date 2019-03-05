<?php

namespace FilippoToso\Travelport\Util;

class ProhibitedCabins
{

    /**
     * @var CabinClass $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @param CabinClass $CabinClass
     */
    public function __construct($CabinClass = null)
    {
      $this->CabinClass = $CabinClass;
    }

    /**
     * @return CabinClass
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param CabinClass $CabinClass
     * @return \FilippoToso\Travelport\Util\ProhibitedCabins
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

}
