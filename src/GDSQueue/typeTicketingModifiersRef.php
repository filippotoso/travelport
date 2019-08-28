<?php

namespace FilippoToso\Travelport\GDSQueue;

class typeTicketingModifiersRef
{

    /**
     * @var AirPricingInfoRef $AirPricingInfoRef
     */
    protected $AirPricingInfoRef = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @param typeRef $Key
     */
    public function __construct($AirPricingInfoRef = null, $Key = null)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->Key = $Key;
    }

    /**
     * @return AirPricingInfoRef
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @return \FilippoToso\Travelport\GDSQueue\typeTicketingModifiersRef
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
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
     * @return \FilippoToso\Travelport\GDSQueue\typeTicketingModifiersRef
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
