<?php

namespace FilippoToso\Travelport\Util;

class AirPricingTicketingModifiers
{

    /**
     * @var AirPricingInfoRef $AirPricingInfoRef
     */
    protected $AirPricingInfoRef = null;

    /**
     * @var TicketingModifiers $TicketingModifiers
     */
    protected $TicketingModifiers = null;

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @param TicketingModifiers $TicketingModifiers
     */
    public function __construct($AirPricingInfoRef = null, $TicketingModifiers = null)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->TicketingModifiers = $TicketingModifiers;
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
     * @return \FilippoToso\Travelport\Util\AirPricingTicketingModifiers
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

    /**
     * @return TicketingModifiers
     */
    public function getTicketingModifiers()
    {
      return $this->TicketingModifiers;
    }

    /**
     * @param TicketingModifiers $TicketingModifiers
     * @return \FilippoToso\Travelport\Util\AirPricingTicketingModifiers
     */
    public function setTicketingModifiers($TicketingModifiers)
    {
      $this->TicketingModifiers = $TicketingModifiers;
      return $this;
    }

}
