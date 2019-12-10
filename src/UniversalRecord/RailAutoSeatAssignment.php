<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailAutoSeatAssignment
{

    /**
     * @var anonymous1328 $SeatType
     */
    protected $SeatType = null;

    /**
     * @var anonymous1329 $SeatValue
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
     * @param anonymous1328 $SeatType
     * @param anonymous1329 $SeatValue
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
     * @return anonymous1328
     */
    public function getSeatType()
    {
      return $this->SeatType;
    }

    /**
     * @param anonymous1328 $SeatType
     * @return \FilippoToso\Travelport\UniversalRecord\RailAutoSeatAssignment
     */
    public function setSeatType($SeatType)
    {
      $this->SeatType = $SeatType;
      return $this;
    }

    /**
     * @return anonymous1329
     */
    public function getSeatValue()
    {
      return $this->SeatValue;
    }

    /**
     * @param anonymous1329 $SeatValue
     * @return \FilippoToso\Travelport\UniversalRecord\RailAutoSeatAssignment
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailAutoSeatAssignment
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailAutoSeatAssignment
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
