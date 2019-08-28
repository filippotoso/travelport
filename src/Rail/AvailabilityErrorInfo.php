<?php

namespace FilippoToso\Travelport\Rail;

class AvailabilityErrorInfo extends typeErrorInfo
{

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
     * @param AirSegmentError $AirSegmentError
     */
    public function __construct($Code = null, $Service = null, $Type = null, $Description = null, $TransactionId = null, $Auxdata = null, $AirSegmentError = null)
    {
      parent::__construct($Code, $Service, $Type, $Description, $TransactionId, $Auxdata);
      $this->AirSegmentError = $AirSegmentError;
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
     * @return \FilippoToso\Travelport\Rail\AvailabilityErrorInfo
     */
    public function setAirSegmentError($AirSegmentError)
    {
      $this->AirSegmentError = $AirSegmentError;
      return $this;
    }

}
