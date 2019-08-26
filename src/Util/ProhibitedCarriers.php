<?php

namespace FilippoToso\Travelport\Util;

class ProhibitedCarriers
{

    /**
     * @var Carrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @param Carrier $Carrier
     */
    public function __construct($Carrier)
    {
      $this->Carrier = $Carrier;
    }

    /**
     * @return Carrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param Carrier $Carrier
     * @return \FilippoToso\Travelport\Util\ProhibitedCarriers
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

}
