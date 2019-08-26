<?php

namespace FilippoToso\Travelport\GDSQueue;

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
    public function __construct($AirPricingInfoRef, $TicketingModifiers)
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
     * @return \FilippoToso\Travelport\GDSQueue\AirPricingTicketingModifiers
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
     * @return \FilippoToso\Travelport\GDSQueue\AirPricingTicketingModifiers
     */
    public function setTicketingModifiers($TicketingModifiers)
    {
      $this->TicketingModifiers = $TicketingModifiers;
      return $this;
    }

}
