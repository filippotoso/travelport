<?php

namespace FilippoToso\Travelport\GDSQueue;

class RailUpdate
{

    /**
     * @var BookingAction $BookingAction
     */
    protected $BookingAction = null;

    /**
     * @var typeLocatorCode $ReservationLocatorCode
     */
    protected $ReservationLocatorCode = null;

    /**
     * @param BookingAction $BookingAction
     * @param typeLocatorCode $ReservationLocatorCode
     */
    public function __construct($BookingAction = null, $ReservationLocatorCode = null)
    {
      $this->BookingAction = $BookingAction;
      $this->ReservationLocatorCode = $ReservationLocatorCode;
    }

    /**
     * @return BookingAction
     */
    public function getBookingAction()
    {
      return $this->BookingAction;
    }

    /**
     * @param BookingAction $BookingAction
     * @return \FilippoToso\Travelport\GDSQueue\RailUpdate
     */
    public function setBookingAction($BookingAction)
    {
      $this->BookingAction = $BookingAction;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getReservationLocatorCode()
    {
      return $this->ReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $ReservationLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\RailUpdate
     */
    public function setReservationLocatorCode($ReservationLocatorCode)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      return $this;
    }

}
