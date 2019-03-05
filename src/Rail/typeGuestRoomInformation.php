<?php

namespace FilippoToso\Travelport\Rail;

class typeGuestRoomInformation extends typeGuestChildInformation
{

    /**
     * @var int $Adults
     */
    protected $Adults = null;

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var Child[] $Child
     */
    protected $Child = null;

    /**
     * @param int $Age
     * @param int $Adults
     * @param BookingTravelerRef $BookingTravelerRef
     */
    public function __construct($Age = null, $Adults = null, $BookingTravelerRef = null)
    {
      parent::__construct($Age);
      $this->Adults = $Adults;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return int
     */
    public function getAdults()
    {
      return $this->Adults;
    }

    /**
     * @param int $Adults
     * @return \FilippoToso\Travelport\Rail\typeGuestRoomInformation
     */
    public function setAdults($Adults)
    {
      $this->Adults = $Adults;
      return $this;
    }

    /**
     * @return BookingTravelerRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\Rail\typeGuestRoomInformation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return Child[]
     */
    public function getChild()
    {
      return $this->Child;
    }

    /**
     * @param Child[] $Child
     * @return \FilippoToso\Travelport\Rail\typeGuestRoomInformation
     */
    public function setChild(array $Child = null)
    {
      $this->Child = $Child;
      return $this;
    }

}
