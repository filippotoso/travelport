<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CO2Emission
{

    /**
     * @var typeRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var float $Value
     */
    protected $Value = null;

    /**
     * @param typeRef $AirSegmentRef
     * @param float $Value
     */
    public function __construct($AirSegmentRef = null, $Value = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->Value = $Value;
    }

    /**
     * @return typeRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param typeRef $AirSegmentRef
     * @return \FilippoToso\Travelport\UniversalRecord\CO2Emission
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param float $Value
     * @return \FilippoToso\Travelport\UniversalRecord\CO2Emission
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
