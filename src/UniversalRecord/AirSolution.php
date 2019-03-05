<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirSolution
{

    /**
     * @var SearchTraveler $SearchTraveler
     */
    protected $SearchTraveler = null;

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var HostToken $HostToken
     */
    protected $HostToken = null;

    /**
     * @var FareBasis $FareBasis
     */
    protected $FareBasis = null;

    /**
     * @param SearchTraveler $SearchTraveler
     * @param typeBaseAirSegment $AirSegment
     * @param HostToken $HostToken
     * @param FareBasis $FareBasis
     */
    public function __construct($SearchTraveler = null, $AirSegment = null, $HostToken = null, $FareBasis = null)
    {
      $this->SearchTraveler = $SearchTraveler;
      $this->AirSegment = $AirSegment;
      $this->HostToken = $HostToken;
      $this->FareBasis = $FareBasis;
    }

    /**
     * @return SearchTraveler
     */
    public function getSearchTraveler()
    {
      return $this->SearchTraveler;
    }

    /**
     * @param SearchTraveler $SearchTraveler
     * @return \FilippoToso\Travelport\UniversalRecord\AirSolution
     */
    public function setSearchTraveler($SearchTraveler)
    {
      $this->SearchTraveler = $SearchTraveler;
      return $this;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirSolution
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirSolution
     */
    public function setHostToken($HostToken)
    {
      $this->HostToken = $HostToken;
      return $this;
    }

    /**
     * @return FareBasis
     */
    public function getFareBasis()
    {
      return $this->FareBasis;
    }

    /**
     * @param FareBasis $FareBasis
     * @return \FilippoToso\Travelport\UniversalRecord\AirSolution
     */
    public function setFareBasis($FareBasis)
    {
      $this->FareBasis = $FareBasis;
      return $this;
    }

}
