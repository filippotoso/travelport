<?php

namespace FilippoToso\Travelport\Rail;

class AutoSeatAssignment
{

    /**
     * @var typeRef $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @var boolean $Smoking
     */
    protected $Smoking = null;

    /**
     * @var typeReqSeat $SeatType
     */
    protected $SeatType = null;

    /**
     * @var boolean $Group
     */
    protected $Group = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param typeRef $SegmentRef
     * @param boolean $Smoking
     * @param typeReqSeat $SeatType
     * @param boolean $Group
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($SegmentRef = null, $Smoking = null, $SeatType = null, $Group = null, $BookingTravelerRef = null)
    {
      $this->SegmentRef = $SegmentRef;
      $this->Smoking = $Smoking;
      $this->SeatType = $SeatType;
      $this->Group = $Group;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \FilippoToso\Travelport\Rail\AutoSeatAssignment
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSmoking()
    {
      return $this->Smoking;
    }

    /**
     * @param boolean $Smoking
     * @return \FilippoToso\Travelport\Rail\AutoSeatAssignment
     */
    public function setSmoking($Smoking)
    {
      $this->Smoking = $Smoking;
      return $this;
    }

    /**
     * @return typeReqSeat
     */
    public function getSeatType()
    {
      return $this->SeatType;
    }

    /**
     * @param typeReqSeat $SeatType
     * @return \FilippoToso\Travelport\Rail\AutoSeatAssignment
     */
    public function setSeatType($SeatType)
    {
      $this->SeatType = $SeatType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGroup()
    {
      return $this->Group;
    }

    /**
     * @param boolean $Group
     * @return \FilippoToso\Travelport\Rail\AutoSeatAssignment
     */
    public function setGroup($Group)
    {
      $this->Group = $Group;
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
     * @return \FilippoToso\Travelport\Rail\AutoSeatAssignment
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
