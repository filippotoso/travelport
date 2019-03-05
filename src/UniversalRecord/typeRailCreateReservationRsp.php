<?php

namespace FilippoToso\Travelport\UniversalRecord;

abstract class typeRailCreateReservationRsp extends BaseRsp
{

    /**
     * @var UniversalRecord $UniversalRecord
     */
    protected $UniversalRecord = null;

    /**
     * @var RailSolutionChangedInfo $RailSolutionChangedInfo
     */
    protected $RailSolutionChangedInfo = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param UniversalRecord $UniversalRecord
     * @param RailSolutionChangedInfo $RailSolutionChangedInfo
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $UniversalRecord = null, $RailSolutionChangedInfo = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->UniversalRecord = $UniversalRecord;
      $this->RailSolutionChangedInfo = $RailSolutionChangedInfo;
    }

    /**
     * @return UniversalRecord
     */
    public function getUniversalRecord()
    {
      return $this->UniversalRecord;
    }

    /**
     * @param UniversalRecord $UniversalRecord
     * @return \FilippoToso\Travelport\UniversalRecord\typeRailCreateReservationRsp
     */
    public function setUniversalRecord($UniversalRecord)
    {
      $this->UniversalRecord = $UniversalRecord;
      return $this;
    }

    /**
     * @return RailSolutionChangedInfo
     */
    public function getRailSolutionChangedInfo()
    {
      return $this->RailSolutionChangedInfo;
    }

    /**
     * @param RailSolutionChangedInfo $RailSolutionChangedInfo
     * @return \FilippoToso\Travelport\UniversalRecord\typeRailCreateReservationRsp
     */
    public function setRailSolutionChangedInfo($RailSolutionChangedInfo)
    {
      $this->RailSolutionChangedInfo = $RailSolutionChangedInfo;
      return $this;
    }

}
