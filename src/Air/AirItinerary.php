<?php

namespace FilippoToso\Travelport\Air;

class AirItinerary
{

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var APISRequirements $APISRequirements
     */
    protected $APISRequirements = null;

    /**
     * @param typeBaseAirSegment $AirSegment
     * @param HostToken $HostToken
     * @param APISRequirements $APISRequirements
     */
    public function __construct($AirSegment = null, $HostToken = null, $APISRequirements = null)
    {
      $this->AirSegment = $AirSegment;
      $this->HostToken = $HostToken;
      $this->APISRequirements = $APISRequirements;
    }

    /**
     * @return typeBaseAirSegment
     */
    public function getAirSegment()
    {
      return $this->AirSegment;
    }

    /**
     * @param typeBaseAirSegment $AirSegment
     * @return \FilippoToso\Travelport\Air\AirItinerary
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return HostToken
     */
    public function getHostToken()
    {
      return $this->HostToken;
    }

    /**
     * @param HostToken $HostToken
     * @return \FilippoToso\Travelport\Air\AirItinerary
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return APISRequirements
     */
    public function getAPISRequirements()
    {
      return $this->APISRequirements;
    }

    /**
     * @param APISRequirements $APISRequirements
     * @return \FilippoToso\Travelport\Air\AirItinerary
     */
    public function setAPISRequirements($APISRequirements)
    {
      $this->APISRequirements = $APISRequirements;
      return $this;
    }

}
