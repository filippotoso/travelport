<?php

namespace FilippoToso\Travelport\GDSQueue;

class TicketFailureInfo
{

    /**
     * @var AirPricingInfoRef $AirPricingInfoRef
     */
    protected $AirPricingInfoRef = null;

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @param Name $Name
     * @param int $Code
     * @param string $Message
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($AirPricingInfoRef, $Name, $Code, $Message, $BookingTravelerRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->Name = $Name;
      $this->Code = $Code;
      $this->Message = $Message;
      $this->BookingTravelerRef = $BookingTravelerRef;
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
     * @return \FilippoToso\Travelport\GDSQueue\TicketFailureInfo
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\GDSQueue\TicketFailureInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \FilippoToso\Travelport\GDSQueue\TicketFailureInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \FilippoToso\Travelport\GDSQueue\TicketFailureInfo
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\GDSQueue\TicketFailureInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
