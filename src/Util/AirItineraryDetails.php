<?php

namespace FilippoToso\Travelport\Util;

class AirItineraryDetails
{

    /**
     * @var AirSegmentDetails $AirSegmentDetails
     */
    protected $AirSegmentDetails = null;

    /**
     * @var PassengerDetails $PassengerDetails
     */
    protected $PassengerDetails = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param AirSegmentDetails $AirSegmentDetails
     * @param PassengerDetails $PassengerDetails
     * @param typeRef $Key
     */
    public function __construct($AirSegmentDetails = null, $PassengerDetails = null, $Key = null)
    {
      $this->AirSegmentDetails = $AirSegmentDetails;
      $this->PassengerDetails = $PassengerDetails;
      $this->Key = $Key;
    }

    /**
     * @return AirSegmentDetails
     */
    public function getAirSegmentDetails()
    {
      return $this->AirSegmentDetails;
    }

    /**
     * @param AirSegmentDetails $AirSegmentDetails
     * @return \FilippoToso\Travelport\Util\AirItineraryDetails
     */
    public function setAirSegmentDetails($AirSegmentDetails)
    {
      $this->AirSegmentDetails = $AirSegmentDetails;
      return $this;
    }

    /**
     * @return PassengerDetails
     */
    public function getPassengerDetails()
    {
      return $this->PassengerDetails;
    }

    /**
     * @param PassengerDetails $PassengerDetails
     * @return \FilippoToso\Travelport\Util\AirItineraryDetails
     */
    public function setPassengerDetails($PassengerDetails)
    {
      $this->PassengerDetails = $PassengerDetails;
      return $this;
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
     * @return \FilippoToso\Travelport\Util\AirItineraryDetails
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
