<?php

namespace FilippoToso\Travelport\Rail;

class typeApplicableSegment
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeRef $AirItineraryDetailsRef
     */
    protected $AirItineraryDetailsRef = null;

    /**
     * @var string $BookingCounts
     */
    protected $BookingCounts = null;

    /**
     * @param typeRef $Key
     * @param typeRef $AirItineraryDetailsRef
     * @param string $BookingCounts
     */
    public function __construct($Key = null, $AirItineraryDetailsRef = null, $BookingCounts = null)
    {
      $this->Key = $Key;
      $this->AirItineraryDetailsRef = $AirItineraryDetailsRef;
      $this->BookingCounts = $BookingCounts;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Rail\typeApplicableSegment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirItineraryDetailsRef()
    {
      return $this->AirItineraryDetailsRef;
    }

    /**
     * @param typeRef $AirItineraryDetailsRef
     * @return \FilippoToso\Travelport\Rail\typeApplicableSegment
     */
    public function setAirItineraryDetailsRef($AirItineraryDetailsRef)
    {
      $this->AirItineraryDetailsRef = $AirItineraryDetailsRef;
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
     * @return \FilippoToso\Travelport\Rail\typeApplicableSegment
     */
    public function setBookingCounts($BookingCounts)
    {
      $this->BookingCounts = $BookingCounts;
      return $this;
    }

}
