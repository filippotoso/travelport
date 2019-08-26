<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirSegmentSpecialUpdate
{

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var anonymous1388 $Action
     */
    protected $Action = null;

    /**
     * @param typeBaseAirSegment $AirSegment
     * @param anonymous1388 $Action
     */
    public function __construct($AirSegment, $Action)
    {
      $this->AirSegment = $AirSegment;
      $this->Action = $Action;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirSegmentSpecialUpdate
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return anonymous1388
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param anonymous1388 $Action
     * @return \FilippoToso\Travelport\UniversalRecord\AirSegmentSpecialUpdate
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

}
