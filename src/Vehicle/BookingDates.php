<?php

namespace FilippoToso\Travelport\Vehicle;

class BookingDates
{

    /**
     * @var typeDate $CheckInDate
     */
    protected $CheckInDate = null;

    /**
     * @var typeDate $CheckOutDate
     */
    protected $CheckOutDate = null;

    /**
     * @param typeDate $CheckInDate
     * @param typeDate $CheckOutDate
     */
    public function __construct($CheckInDate = null, $CheckOutDate = null)
    {
      $this->CheckInDate = $CheckInDate;
      $this->CheckOutDate = $CheckOutDate;
    }

    /**
     * @return typeDate
     */
    public function getCheckInDate()
    {
      return $this->CheckInDate;
    }

    /**
     * @param typeDate $CheckInDate
     * @return \FilippoToso\Travelport\Vehicle\BookingDates
     */
    public function setCheckInDate($CheckInDate)
    {
      $this->CheckInDate = $CheckInDate;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getCheckOutDate()
    {
      return $this->CheckOutDate;
    }

    /**
     * @param typeDate $CheckOutDate
     * @return \FilippoToso\Travelport\Vehicle\BookingDates
     */
    public function setCheckOutDate($CheckOutDate)
    {
      $this->CheckOutDate = $CheckOutDate;
      return $this;
    }

}
