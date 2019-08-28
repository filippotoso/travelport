<?php

namespace FilippoToso\Travelport\UProfile;

class TravelInfo
{

    /**
     * @var anonymous279 $TripName
     */
    protected $TripName = null;

    /**
     * @var anonymous280 $TravelPurpose
     */
    protected $TravelPurpose = null;

    /**
     * @param anonymous279 $TripName
     * @param anonymous280 $TravelPurpose
     */
    public function __construct($TripName = null, $TravelPurpose = null)
    {
      $this->TripName = $TripName;
      $this->TravelPurpose = $TravelPurpose;
    }

    /**
     * @return anonymous279
     */
    public function getTripName()
    {
      return $this->TripName;
    }

    /**
     * @param anonymous279 $TripName
     * @return \FilippoToso\Travelport\UProfile\TravelInfo
     */
    public function setTripName($TripName)
    {
      $this->TripName = $TripName;
      return $this;
    }

    /**
     * @return anonymous280
     */
    public function getTravelPurpose()
    {
      return $this->TravelPurpose;
    }

    /**
     * @param anonymous280 $TravelPurpose
     * @return \FilippoToso\Travelport\UProfile\TravelInfo
     */
    public function setTravelPurpose($TravelPurpose)
    {
      $this->TravelPurpose = $TravelPurpose;
      return $this;
    }

}
