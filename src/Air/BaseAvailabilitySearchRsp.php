<?php

namespace FilippoToso\Travelport\Air;

class BaseAvailabilitySearchRsp extends BaseSearchRsp
{

    /**
     * @var FlightDetailsList $FlightDetailsList
     */
    protected $FlightDetailsList = null;

    /**
     * @var AirSegmentList $AirSegmentList
     */
    protected $AirSegmentList = null;

    /**
     * @var FareInfoList $FareInfoList
     */
    protected $FareInfoList = null;

    /**
     * @var FareRemarkList $FareRemarkList
     */
    protected $FareRemarkList = null;

    /**
     * @var AirItinerarySolution $AirItinerarySolution
     */
    protected $AirItinerarySolution = null;

    /**
     * @var HostTokenList $HostTokenList
     */
    protected $HostTokenList = null;

    /**
     * @var APISRequirementsList $APISRequirementsList
     */
    protected $APISRequirementsList = null;

    /**
     * @var typeDistance $DistanceUnits
     */
    protected $DistanceUnits = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param NextResultReference $NextResultReference
     * @param FlightDetailsList $FlightDetailsList
     * @param AirSegmentList $AirSegmentList
     * @param FareInfoList $FareInfoList
     * @param FareRemarkList $FareRemarkList
     * @param AirItinerarySolution $AirItinerarySolution
     * @param HostTokenList $HostTokenList
     * @param APISRequirementsList $APISRequirementsList
     * @param typeDistance $DistanceUnits
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $NextResultReference = null, $FlightDetailsList = null, $AirSegmentList = null, $FareInfoList = null, $FareRemarkList = null, $AirItinerarySolution = null, $HostTokenList = null, $APISRequirementsList = null, $DistanceUnits = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory, $NextResultReference);
      $this->FlightDetailsList = $FlightDetailsList;
      $this->AirSegmentList = $AirSegmentList;
      $this->FareInfoList = $FareInfoList;
      $this->FareRemarkList = $FareRemarkList;
      $this->AirItinerarySolution = $AirItinerarySolution;
      $this->HostTokenList = $HostTokenList;
      $this->APISRequirementsList = $APISRequirementsList;
      $this->DistanceUnits = $DistanceUnits;
    }

    /**
     * @return FlightDetailsList
     */
    public function getFlightDetailsList()
    {
      return $this->FlightDetailsList;
    }

    /**
     * @param FlightDetailsList $FlightDetailsList
     * @return \FilippoToso\Travelport\Air\BaseAvailabilitySearchRsp
     */
    public function setFlightDetailsList($FlightDetailsList)
    {
      $this->FlightDetailsList = $FlightDetailsList;
      return $this;
    }

    /**
     * @return AirSegmentList
     */
    public function getAirSegmentList()
    {
      return $this->AirSegmentList;
    }

    /**
     * @param AirSegmentList $AirSegmentList
     * @return \FilippoToso\Travelport\Air\BaseAvailabilitySearchRsp
     */
    public function setAirSegmentList($AirSegmentList)
    {
      $this->AirSegmentList = $AirSegmentList;
      return $this;
    }

    /**
     * @return FareInfoList
     */
    public function getFareInfoList()
    {
      return $this->FareInfoList;
    }

    /**
     * @param FareInfoList $FareInfoList
     * @return \FilippoToso\Travelport\Air\BaseAvailabilitySearchRsp
     */
    public function setFareInfoList($FareInfoList)
    {
      $this->FareInfoList = $FareInfoList;
      return $this;
    }

    /**
     * @return FareRemarkList
     */
    public function getFareRemarkList()
    {
      return $this->FareRemarkList;
    }

    /**
     * @param FareRemarkList $FareRemarkList
     * @return \FilippoToso\Travelport\Air\BaseAvailabilitySearchRsp
     */
    public function setFareRemarkList($FareRemarkList)
    {
      $this->FareRemarkList = $FareRemarkList;
      return $this;
    }

    /**
     * @return AirItinerarySolution
     */
    public function getAirItinerarySolution()
    {
      return $this->AirItinerarySolution;
    }

    /**
     * @param AirItinerarySolution $AirItinerarySolution
     * @return \FilippoToso\Travelport\Air\BaseAvailabilitySearchRsp
     */
    public function setAirItinerarySolution($AirItinerarySolution)
    {
      $this->AirItinerarySolution = $AirItinerarySolution;
      return $this;
    }

    /**
     * @return HostTokenList
     */
    public function getHostTokenList()
    {
      return $this->HostTokenList;
    }

    /**
     * @param HostTokenList $HostTokenList
     * @return \FilippoToso\Travelport\Air\BaseAvailabilitySearchRsp
     */
    public function setHostTokenList($HostTokenList)
    {
      $this->HostTokenList = $HostTokenList;
      return $this;
    }

    /**
     * @return APISRequirementsList
     */
    public function getAPISRequirementsList()
    {
      return $this->APISRequirementsList;
    }

    /**
     * @param APISRequirementsList $APISRequirementsList
     * @return \FilippoToso\Travelport\Air\BaseAvailabilitySearchRsp
     */
    public function setAPISRequirementsList($APISRequirementsList)
    {
      $this->APISRequirementsList = $APISRequirementsList;
      return $this;
    }

    /**
     * @return typeDistance
     */
    public function getDistanceUnits()
    {
      return $this->DistanceUnits;
    }

    /**
     * @param typeDistance $DistanceUnits
     * @return \FilippoToso\Travelport\Air\BaseAvailabilitySearchRsp
     */
    public function setDistanceUnits($DistanceUnits)
    {
      $this->DistanceUnits = $DistanceUnits;
      return $this;
    }

}
