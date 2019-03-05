<?php

namespace FilippoToso\Travelport\UniversalRecord;

class UniversalModifyErrorInfo extends typeErrorInfo
{

    /**
     * @var UniversalModifyCommandError $UniversalModifyCommandError
     */
    protected $UniversalModifyCommandError = null;

    /**
     * @var AirSegmentError $AirSegmentError
     */
    protected $AirSegmentError = null;

    /**
     * @param string $Code
     * @param string $Service
     * @param string $Type
     * @param string $Description
     * @param string $TransactionId
     * @param Auxdata $Auxdata
     * @param UniversalModifyCommandError $UniversalModifyCommandError
     * @param AirSegmentError $AirSegmentError
     */
    public function __construct($Code = null, $Service = null, $Type = null, $Description = null, $TransactionId = null, $Auxdata = null, $UniversalModifyCommandError = null, $AirSegmentError = null)
    {
      parent::__construct($Code, $Service, $Type, $Description, $TransactionId, $Auxdata);
      $this->UniversalModifyCommandError = $UniversalModifyCommandError;
      $this->AirSegmentError = $AirSegmentError;
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
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalModifyErrorInfo
     */
    public function setUniversalModifyCommandError($UniversalModifyCommandError)
    {
      $this->UniversalModifyCommandError = $UniversalModifyCommandError;
      return $this;
    }

    /**
     * @return AirSegmentError
     */
    public function getAirSegmentError()
    {
      return $this->AirSegmentError;
    }

    /**
     * @param AirSegmentError $AirSegmentError
     * @return \FilippoToso\Travelport\UniversalRecord\UniversalModifyErrorInfo
     */
    public function setAirSegmentError($AirSegmentError)
    {
      $this->AirSegmentError = $AirSegmentError;
      return $this;
    }

}
