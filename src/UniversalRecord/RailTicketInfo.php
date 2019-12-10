<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailTicketInfo
{

    /**
     * @var RailJourneyRef $RailJourneyRef
     */
    protected $RailJourneyRef = null;

    /**
     * @var TicketAdvisory $TicketAdvisory
     */
    protected $TicketAdvisory = null;

    /**
     * @var anonymous1273 $Number
     */
    protected $Number = null;

    /**
     * @var anonymous1274 $IssueLocation
     */
    protected $IssueLocation = null;

    /**
     * @var StringLength1to255 $TicketStatus
     */
    protected $TicketStatus = null;

    /**
     * @var anonymous1275 $TicketFormType
     */
    protected $TicketFormType = null;

    /**
     * @var StringLength1to255 $TrafficType
     */
    protected $TrafficType = null;

    /**
     * @var \DateTime $IssuedDate
     */
    protected $IssuedDate = null;

    /**
     * @var StringLength1to255 $TicketType
     */
    protected $TicketType = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param RailJourneyRef $RailJourneyRef
     * @param TicketAdvisory $TicketAdvisory
     * @param anonymous1273 $Number
     * @param anonymous1274 $IssueLocation
     * @param StringLength1to255 $TicketStatus
     * @param anonymous1275 $TicketFormType
     * @param StringLength1to255 $TrafficType
     * @param \DateTime $IssuedDate
     * @param StringLength1to255 $TicketType
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($RailJourneyRef = null, $TicketAdvisory = null, $Number = null, $IssueLocation = null, $TicketStatus = null, $TicketFormType = null, $TrafficType = null, \DateTime $IssuedDate = null, $TicketType = null, $BookingTravelerRef = null)
    {
      $this->RailJourneyRef = $RailJourneyRef;
      $this->TicketAdvisory = $TicketAdvisory;
      $this->Number = $Number;
      $this->IssueLocation = $IssueLocation;
      $this->TicketStatus = $TicketStatus;
      $this->TicketFormType = $TicketFormType;
      $this->TrafficType = $TrafficType;
      $this->IssuedDate = $IssuedDate ? $IssuedDate->format(\DateTime::ATOM) : null;
      $this->TicketType = $TicketType;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return RailJourneyRef
     */
    public function getRailJourneyRef()
    {
      return $this->RailJourneyRef;
    }

    /**
     * @param RailJourneyRef $RailJourneyRef
     * @return \FilippoToso\Travelport\UniversalRecord\RailTicketInfo
     */
    public function setRailJourneyRef($RailJourneyRef)
    {
      $this->RailJourneyRef = $RailJourneyRef;
      return $this;
    }

    /**
     * @return TicketAdvisory
     */
    public function getTicketAdvisory()
    {
      return $this->TicketAdvisory;
    }

    /**
     * @param TicketAdvisory $TicketAdvisory
     * @return \FilippoToso\Travelport\UniversalRecord\RailTicketInfo
     */
    public function setTicketAdvisory($TicketAdvisory)
    {
      $this->TicketAdvisory = $TicketAdvisory;
      return $this;
    }

    /**
     * @return anonymous1273
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param anonymous1273 $Number
     * @return \FilippoToso\Travelport\UniversalRecord\RailTicketInfo
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return anonymous1274
     */
    public function getIssueLocation()
    {
      return $this->IssueLocation;
    }

    /**
     * @param anonymous1274 $IssueLocation
     * @return \FilippoToso\Travelport\UniversalRecord\RailTicketInfo
     */
    public function setIssueLocation($IssueLocation)
    {
      $this->IssueLocation = $IssueLocation;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param StringLength1to255 $TicketStatus
     * @return \FilippoToso\Travelport\UniversalRecord\RailTicketInfo
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

    /**
     * @return anonymous1275
     */
    public function getTicketFormType()
    {
      return $this->TicketFormType;
    }

    /**
     * @param anonymous1275 $TicketFormType
     * @return \FilippoToso\Travelport\UniversalRecord\RailTicketInfo
     */
    public function setTicketFormType($TicketFormType)
    {
      $this->TicketFormType = $TicketFormType;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getTrafficType()
    {
      return $this->TrafficType;
    }

    /**
     * @param StringLength1to255 $TrafficType
     * @return \FilippoToso\Travelport\UniversalRecord\RailTicketInfo
     */
    public function setTrafficType($TrafficType)
    {
      $this->TrafficType = $TrafficType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIssuedDate()
    {
      if ($this->IssuedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IssuedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IssuedDate
     * @return \FilippoToso\Travelport\UniversalRecord\RailTicketInfo
     */
    public function setIssuedDate(\DateTime $IssuedDate)
    {
      $this->IssuedDate = $IssuedDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getTicketType()
    {
      return $this->TicketType;
    }

    /**
     * @param StringLength1to255 $TicketType
     * @return \FilippoToso\Travelport\UniversalRecord\RailTicketInfo
     */
    public function setTicketType($TicketType)
    {
      $this->TicketType = $TicketType;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\RailTicketInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
