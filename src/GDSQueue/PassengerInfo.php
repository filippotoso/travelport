<?php

namespace FilippoToso\Travelport\GDSQueue;

class PassengerInfo
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typePTC $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @param Name $Name
     * @param typeRef $BookingTravelerRef
     * @param typePTC $PassengerType
     */
    public function __construct($Name, $BookingTravelerRef, $PassengerType)
    {
      $this->Name = $Name;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->PassengerType = $PassengerType;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassengerInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassengerInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param typePTC $PassengerType
     * @return \FilippoToso\Travelport\GDSQueue\PassengerInfo
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

}
