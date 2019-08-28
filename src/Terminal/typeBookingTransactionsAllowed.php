<?php

namespace FilippoToso\Travelport\Terminal;

class typeBookingTransactionsAllowed
{

    /**
     * @var boolean $BookingEnabled
     */
    protected $BookingEnabled = null;

    /**
     * @param boolean $BookingEnabled
     */
    public function __construct($BookingEnabled = null)
    {
      $this->BookingEnabled = $BookingEnabled;
    }

    /**
     * @return boolean
     */
    public function getBookingEnabled()
    {
      return $this->BookingEnabled;
    }

    /**
     * @param boolean $BookingEnabled
     * @return \FilippoToso\Travelport\Terminal\typeBookingTransactionsAllowed
     */
    public function setBookingEnabled($BookingEnabled)
    {
      $this->BookingEnabled = $BookingEnabled;
      return $this;
    }

}
