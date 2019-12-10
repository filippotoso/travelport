<?php

namespace FilippoToso\Travelport\Rail;

class AirSegmentSpecialUpdate
{

    /**
     * @var typeBaseAirSegment $AirSegment
     */
    protected $AirSegment = null;

    /**
     * @var anonymous1387 $Action
     */
    protected $Action = null;

    /**
     * @param typeBaseAirSegment $AirSegment
     * @param anonymous1387 $Action
     */
    public function __construct($AirSegment = null, $Action = null)
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
     * @return \FilippoToso\Travelport\Rail\AirSegmentSpecialUpdate
     */
    public function setAirSegment($AirSegment)
    {
      $this->AirSegment = $AirSegment;
      return $this;
    }

    /**
     * @return anonymous1387
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param anonymous1387 $Action
     * @return \FilippoToso\Travelport\Rail\AirSegmentSpecialUpdate
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

}
