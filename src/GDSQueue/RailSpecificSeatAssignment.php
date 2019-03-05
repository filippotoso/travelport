<?php

namespace FilippoToso\Travelport\GDSQueue;

class RailSpecificSeatAssignment
{

    /**
     * @var string $CoachLabel
     */
    protected $CoachLabel = null;

    /**
     * @var string $PlaceLabel
     */
    protected $PlaceLabel = null;

    /**
     * @var string $Assignment
     */
    protected $Assignment = null;

    /**
     * @var typeRef $RailSegmentRef
     */
    protected $RailSegmentRef = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param string $CoachLabel
     * @param string $PlaceLabel
     * @param string $Assignment
     * @param typeRef $RailSegmentRef
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($CoachLabel = null, $PlaceLabel = null, $Assignment = null, $RailSegmentRef = null, $BookingTravelerRef = null)
    {
      $this->CoachLabel = $CoachLabel;
      $this->PlaceLabel = $PlaceLabel;
      $this->Assignment = $Assignment;
      $this->RailSegmentRef = $RailSegmentRef;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return string
     */
    public function getCoachLabel()
    {
      return $this->CoachLabel;
    }

    /**
     * @param string $CoachLabel
     * @return \FilippoToso\Travelport\GDSQueue\RailSpecificSeatAssignment
     */
    public function setCoachLabel($CoachLabel)
    {
      $this->CoachLabel = $CoachLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlaceLabel()
    {
      return $this->PlaceLabel;
    }

    /**
     * @param string $PlaceLabel
     * @return \FilippoToso\Travelport\GDSQueue\RailSpecificSeatAssignment
     */
    public function setPlaceLabel($PlaceLabel)
    {
      $this->PlaceLabel = $PlaceLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getAssignment()
    {
      return $this->Assignment;
    }

    /**
     * @param string $Assignment
     * @return \FilippoToso\Travelport\GDSQueue\RailSpecificSeatAssignment
     */
    public function setAssignment($Assignment)
    {
      $this->Assignment = $Assignment;
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
     * @return \FilippoToso\Travelport\GDSQueue\RailSpecificSeatAssignment
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
     * @return \FilippoToso\Travelport\GDSQueue\RailSpecificSeatAssignment
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
