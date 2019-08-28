<?php

namespace FilippoToso\Travelport\Rail;

class TravelInfo
{

    /**
     * @var anonymous289 $TripName
     */
    protected $TripName = null;

    /**
     * @var anonymous290 $TravelPurpose
     */
    protected $TravelPurpose = null;

    /**
     * @param anonymous289 $TripName
     * @param anonymous290 $TravelPurpose
     */
    public function __construct($TripName = null, $TravelPurpose = null)
    {
      $this->TripName = $TripName;
      $this->TravelPurpose = $TravelPurpose;
    }

    /**
     * @return anonymous289
     */
    public function getTripName()
    {
      return $this->TripName;
    }

    /**
     * @param anonymous289 $TripName
     * @return \FilippoToso\Travelport\Rail\TravelInfo
     */
    public function setTripName($TripName)
    {
      $this->TripName = $TripName;
      return $this;
    }

    /**
     * @return anonymous290
     */
    public function getTravelPurpose()
    {
      return $this->TravelPurpose;
    }

    /**
     * @param anonymous290 $TravelPurpose
     * @return \FilippoToso\Travelport\Rail\TravelInfo
     */
    public function setTravelPurpose($TravelPurpose)
    {
      $this->TravelPurpose = $TravelPurpose;
      return $this;
    }

}
