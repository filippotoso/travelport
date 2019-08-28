<?php

namespace FilippoToso\Travelport\Rail;

class UniversalModifyFailureInfo
{

    /**
     * @var UniversalModifyCommandError $UniversalModifyCommandError
     */
    protected $UniversalModifyCommandError = null;

    /**
     * @var AirSegmentSellFailureInfo $AirSegmentSellFailureInfo
     */
    protected $AirSegmentSellFailureInfo = null;

    /**
     * @param UniversalModifyCommandError $UniversalModifyCommandError
     * @param AirSegmentSellFailureInfo $AirSegmentSellFailureInfo
     */
    public function __construct($UniversalModifyCommandError = null, $AirSegmentSellFailureInfo = null)
    {
      $this->UniversalModifyCommandError = $UniversalModifyCommandError;
      $this->AirSegmentSellFailureInfo = $AirSegmentSellFailureInfo;
    }

    /**
     * @return UniversalModifyCommandError
     */
    public function getUniversalModifyCommandError()
    {
      return $this->UniversalModifyCommandError;
    }

    /**
     * @param UniversalModifyCommandError $UniversalModifyCommandError
     * @return \FilippoToso\Travelport\Rail\UniversalModifyFailureInfo
     */
    public function setUniversalModifyCommandError($UniversalModifyCommandError)
    {
      $this->UniversalModifyCommandError = $UniversalModifyCommandError;
      return $this;
    }

    /**
     * @return AirSegmentSellFailureInfo
     */
    public function getAirSegmentSellFailureInfo()
    {
      return $this->AirSegmentSellFailureInfo;
    }

    /**
     * @param AirSegmentSellFailureInfo $AirSegmentSellFailureInfo
     * @return \FilippoToso\Travelport\Rail\UniversalModifyFailureInfo
     */
    public function setAirSegmentSellFailureInfo($AirSegmentSellFailureInfo)
    {
      $this->AirSegmentSellFailureInfo = $AirSegmentSellFailureInfo;
      return $this;
    }

}
