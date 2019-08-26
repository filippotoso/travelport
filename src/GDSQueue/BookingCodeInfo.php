<?php

namespace FilippoToso\Travelport\GDSQueue;

class BookingCodeInfo
{

    /**
     * @var string $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var string $BookingCounts
     */
    protected $BookingCounts = null;

    /**
     * @param string $CabinClass
     * @param string $BookingCounts
     */
    public function __construct($CabinClass, $BookingCounts)
    {
      $this->CabinClass = $CabinClass;
      $this->BookingCounts = $BookingCounts;
    }

    /**
     * @return string
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param string $CabinClass
     * @return \FilippoToso\Travelport\GDSQueue\BookingCodeInfo
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingCounts()
    {
      return $this->BookingCounts;
    }

    /**
     * @param string $BookingCounts
     * @return \FilippoToso\Travelport\GDSQueue\BookingCodeInfo
     */
    public function setBookingCounts($BookingCounts)
    {
      $this->BookingCounts = $BookingCounts;
      return $this;
    }

}
