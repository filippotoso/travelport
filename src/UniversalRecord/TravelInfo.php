<?php

namespace FilippoToso\Travelport\UniversalRecord;

class TravelInfo
{

    /**
     * @var anonymous292 $TripName
     */
    protected $TripName = null;

    /**
     * @var anonymous293 $TravelPurpose
     */
    protected $TravelPurpose = null;

    /**
     * @param anonymous292 $TripName
     * @param anonymous293 $TravelPurpose
     */
    public function __construct($TripName = null, $TravelPurpose = null)
    {
      $this->TripName = $TripName;
      $this->TravelPurpose = $TravelPurpose;
    }

    /**
     * @return anonymous292
     */
    public function getTripName()
    {
      return $this->TripName;
    }

    /**
     * @param anonymous292 $TripName
     * @return \FilippoToso\Travelport\UniversalRecord\TravelInfo
     */
    public function setTripName($TripName)
    {
      $this->TripName = $TripName;
      return $this;
    }

    /**
     * @return anonymous293
     */
    public function getTravelPurpose()
    {
      return $this->TravelPurpose;
    }

    /**
     * @param anonymous293 $TravelPurpose
     * @return \FilippoToso\Travelport\UniversalRecord\TravelInfo
     */
    public function setTravelPurpose($TravelPurpose)
    {
      $this->TravelPurpose = $TravelPurpose;
      return $this;
    }

}
