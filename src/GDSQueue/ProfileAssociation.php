<?php

namespace FilippoToso\Travelport\GDSQueue;

class ProfileAssociation
{

    /**
     * @var typeRef $TravelerID
     */
    protected $TravelerID = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param typeRef $TravelerID
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($TravelerID, $BookingTravelerRef)
    {
      $this->TravelerID = $TravelerID;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return typeRef
     */
    public function getTravelerID()
    {
      return $this->TravelerID;
    }

    /**
     * @param typeRef $TravelerID
     * @return \FilippoToso\Travelport\GDSQueue\ProfileAssociation
     */
    public function setTravelerID($TravelerID)
    {
      $this->TravelerID = $TravelerID;
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
     * @return \FilippoToso\Travelport\GDSQueue\ProfileAssociation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
