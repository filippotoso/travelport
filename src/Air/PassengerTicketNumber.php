<?php

namespace FilippoToso\Travelport\Air;

class PassengerTicketNumber
{

    /**
     * @var typePassengerTicketNumber $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param typePassengerTicketNumber $TicketNumber
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($TicketNumber, $BookingTravelerRef)
    {
      $this->TicketNumber = $TicketNumber;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return typePassengerTicketNumber
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param typePassengerTicketNumber $TicketNumber
     * @return \FilippoToso\Travelport\Air\PassengerTicketNumber
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
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
     * @return \FilippoToso\Travelport\Air\PassengerTicketNumber
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
