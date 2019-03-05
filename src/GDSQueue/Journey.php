<?php

namespace FilippoToso\Travelport\GDSQueue;

class Journey
{

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var duration $TravelTime
     */
    protected $TravelTime = null;

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @param duration $TravelTime
     */
    public function __construct($AirSegmentRef = null, $TravelTime = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->TravelTime = $TravelTime;
    }

    /**
     * @return AirSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\Journey
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTravelTime()
    {
      return $this->TravelTime;
    }

    /**
     * @param duration $TravelTime
     * @return \FilippoToso\Travelport\GDSQueue\Journey
     */
    public function setTravelTime($TravelTime)
    {
      $this->TravelTime = $TravelTime;
      return $this;
    }

}
