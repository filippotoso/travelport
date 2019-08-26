<?php

namespace FilippoToso\Travelport\GDSQueue;

class RailAutoSeatAssignment
{

    /**
     * @var anonymous1332 $SeatType
     */
    protected $SeatType = null;

    /**
     * @var anonymous1333 $SeatValue
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
     * @param anonymous1332 $SeatType
     * @param anonymous1333 $SeatValue
     * @param typeRef $RailSegmentRef
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($SeatType, $SeatValue, $RailSegmentRef, $BookingTravelerRef)
    {
      $this->SeatType = $SeatType;
      $this->SeatValue = $SeatValue;
      $this->RailSegmentRef = $RailSegmentRef;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return anonymous1332
     */
    public function getSeatType()
    {
      return $this->SeatType;
    }

    /**
     * @param anonymous1332 $SeatType
     * @return \FilippoToso\Travelport\GDSQueue\RailAutoSeatAssignment
     */
    public function setSeatType($SeatType)
    {
      $this->SeatType = $SeatType;
      return $this;
    }

    /**
     * @return anonymous1333
     */
    public function getSeatValue()
    {
      return $this->SeatValue;
    }

    /**
     * @param anonymous1333 $SeatValue
     * @return \FilippoToso\Travelport\GDSQueue\RailAutoSeatAssignment
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
     * @return \FilippoToso\Travelport\GDSQueue\RailAutoSeatAssignment
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
     * @return \FilippoToso\Travelport\GDSQueue\RailAutoSeatAssignment
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
