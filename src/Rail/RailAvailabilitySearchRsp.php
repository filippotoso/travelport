<?php

namespace FilippoToso\Travelport\Rail;

class RailAvailabilitySearchRsp extends BaseRsp
{

    /**
     * @var RailSegmentList $RailSegmentList
     */
    protected $RailSegmentList = null;

    /**
     * @var RailJourneyList $RailJourneyList
     */
    protected $RailJourneyList = null;

    /**
     * @var RailPricingSolution $RailPricingSolution
     */
    protected $RailPricingSolution = null;

    /**
     * @var RailFareNoteList $RailFareNoteList
     */
    protected $RailFareNoteList = null;

    /**
     * @var RailFareIDList $RailFareIDList
     */
    protected $RailFareIDList = null;

    /**
     * @var RailFareList $RailFareList
     */
    protected $RailFareList = null;

    /**
     * @var HostTokenList $HostTokenList
     */
    protected $HostTokenList = null;

    /**
     * @var typeResponseType $ResponseType
     */
    protected $ResponseType = null;

    /**
     * @param ResponseMessage $ResponseMessage
     * @param string $TraceId
     * @param string $TransactionId
     * @param int $ResponseTime
     * @param string $CommandHistory
     * @param RailSegmentList $RailSegmentList
     * @param RailJourneyList $RailJourneyList
     * @param RailPricingSolution $RailPricingSolution
     * @param RailFareNoteList $RailFareNoteList
     * @param RailFareIDList $RailFareIDList
     * @param RailFareList $RailFareList
     * @param HostTokenList $HostTokenList
     * @param typeResponseType $ResponseType
     */
    public function __construct($ResponseMessage = null, $TraceId = null, $TransactionId = null, $ResponseTime = null, $CommandHistory = null, $RailSegmentList = null, $RailJourneyList = null, $RailPricingSolution = null, $RailFareNoteList = null, $RailFareIDList = null, $RailFareList = null, $HostTokenList = null, $ResponseType = null)
    {
      parent::__construct($ResponseMessage, $TraceId, $TransactionId, $ResponseTime, $CommandHistory);
      $this->RailSegmentList = $RailSegmentList;
      $this->RailJourneyList = $RailJourneyList;
      $this->RailPricingSolution = $RailPricingSolution;
      $this->RailFareNoteList = $RailFareNoteList;
      $this->RailFareIDList = $RailFareIDList;
      $this->RailFareList = $RailFareList;
      $this->HostTokenList = $HostTokenList;
      $this->ResponseType = $ResponseType;
    }

    /**
     * @return RailSegmentList
     */
    public function getRailSegmentList()
    {
      return $this->RailSegmentList;
    }

    /**
     * @param RailSegmentList $RailSegmentList
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchRsp
     */
    public function setRailSegmentList($RailSegmentList)
    {
      $this->RailSegmentList = $RailSegmentList;
      return $this;
    }

    /**
     * @return RailJourneyList
     */
    public function getRailJourneyList()
    {
      return $this->RailJourneyList;
    }

    /**
     * @param RailJourneyList $RailJourneyList
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchRsp
     */
    public function setRailJourneyList($RailJourneyList)
    {
      $this->RailJourneyList = $RailJourneyList;
      return $this;
    }

    /**
     * @return RailPricingSolution
     */
    public function getRailPricingSolution()
    {
      return $this->RailPricingSolution;
    }

    /**
     * @param RailPricingSolution $RailPricingSolution
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchRsp
     */
    public function setRailPricingSolution($RailPricingSolution)
    {
      $this->RailPricingSolution = $RailPricingSolution;
      return $this;
    }

    /**
     * @return RailFareNoteList
     */
    public function getRailFareNoteList()
    {
      return $this->RailFareNoteList;
    }

    /**
     * @param RailFareNoteList $RailFareNoteList
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchRsp
     */
    public function setRailFareNoteList($RailFareNoteList)
    {
      $this->RailFareNoteList = $RailFareNoteList;
      return $this;
    }

    /**
     * @return RailFareIDList
     */
    public function getRailFareIDList()
    {
      return $this->RailFareIDList;
    }

    /**
     * @param RailFareIDList $RailFareIDList
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchRsp
     */
    public function setRailFareIDList($RailFareIDList)
    {
      $this->RailFareIDList = $RailFareIDList;
      return $this;
    }

    /**
     * @return RailFareList
     */
    public function getRailFareList()
    {
      return $this->RailFareList;
    }

    /**
     * @param RailFareList $RailFareList
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchRsp
     */
    public function setRailFareList($RailFareList)
    {
      $this->RailFareList = $RailFareList;
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
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchRsp
     */
    public function setHostTokenList($HostTokenList)
    {
      $this->HostTokenList = $HostTokenList;
      return $this;
    }

    /**
     * @return typeResponseType
     */
    public function getResponseType()
    {
      return $this->ResponseType;
    }

    /**
     * @param typeResponseType $ResponseType
     * @return \FilippoToso\Travelport\Rail\RailAvailabilitySearchRsp
     */
    public function setResponseType($ResponseType)
    {
      $this->ResponseType = $ResponseType;
      return $this;
    }

}
