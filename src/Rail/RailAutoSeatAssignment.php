<?php

namespace FilippoToso\Travelport\Rail;

class RailAutoSeatAssignment
{

    /**
     * @var anonymous1334 $SeatType
     */
    protected $SeatType = null;

    /**
     * @var anonymous1335 $SeatValue
     */
    protected $SeatValue = null;

    /**
     * @var typeRef $RailSegmentRef
     */
    protected $RailSegmentRef = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param anonymous1334 $SeatType
     * @param anonymous1335 $SeatValue
     * @param typeRef $RailSegmentRef
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($SeatType = null, $SeatValue = null, $RailSegmentRef = null, $BookingTravelerRef = null)
    {
      $this->SeatType = $SeatType;
      $this->SeatValue = $SeatValue;
      $this->RailSegmentRef = $RailSegmentRef;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return anonymous1334
     */
    public function getSeatType()
    {
      return $this->SeatType;
    }

    /**
     * @param anonymous1334 $SeatType
     * @return \FilippoToso\Travelport\Rail\RailAutoSeatAssignment
     */
    public function setSeatType($SeatType)
    {
      $this->SeatType = $SeatType;
      return $this;
    }

    /**
     * @return anonymous1335
     */
    public function getSeatValue()
    {
      return $this->SeatValue;
    }

    /**
     * @param anonymous1335 $SeatValue
     * @return \FilippoToso\Travelport\Rail\RailAutoSeatAssignment
     */
    public function setSeatValue($SeatValue)
    {
      $this->SeatValue = $SeatValue;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getRailSegmentRef()
    {
      return $this->RailSegmentRef;
    }

    /**
     * @param typeRef $RailSegmentRef
     * @return \FilippoToso\Travelport\Rail\RailAutoSeatAssignment
     */
    public function setRailSegmentRef($RailSegmentRef)
    {
      $this->RailSegmentRef = $RailSegmentRef;
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
     * @return \FilippoToso\Travelport\Rail\RailAutoSeatAssignment
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
