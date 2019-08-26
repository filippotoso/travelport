<?php

namespace FilippoToso\Travelport\UniversalRecord;

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
    public function __construct($UniversalModifyCommandError, $AirSegmentSellFailureInfo)
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalModifyFailureInfo
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalModifyFailureInfo
     */
    public function setAirSegmentSellFailureInfo($AirSegmentSellFailureInfo)
    {
      $this->AirSegmentSellFailureInfo = $AirSegmentSellFailureInfo;
      return $this;
    }

}
