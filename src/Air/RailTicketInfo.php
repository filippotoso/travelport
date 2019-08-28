<?php

namespace FilippoToso\Travelport\Air;

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
     * @var anonymous545 $Number
     */
    protected $Number = null;

    /**
     * @var anonymous546 $IssueLocation
     */
    protected $IssueLocation = null;

    /**
     * @var StringLength1to255 $TicketStatus
     */
    protected $TicketStatus = null;

    /**
     * @var anonymous547 $TicketFormType
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
     * @param anonymous545 $Number
     * @param anonymous546 $IssueLocation
     * @param StringLength1to255 $TicketStatus
     * @param anonymous547 $TicketFormType
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
     * @return \FilippoToso\Travelport\Air\RailTicketInfo
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
     * @return \FilippoToso\Travelport\Air\RailTicketInfo
     */
    public function setTicketAdvisory($TicketAdvisory)
    {
      $this->TicketAdvisory = $TicketAdvisory;
      return $this;
    }

    /**
     * @return anonymous545
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param anonymous545 $Number
     * @return \FilippoToso\Travelport\Air\RailTicketInfo
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return anonymous546
     */
    public function getIssueLocation()
    {
      return $this->IssueLocation;
    }

    /**
     * @param anonymous546 $IssueLocation
     * @return \FilippoToso\Travelport\Air\RailTicketInfo
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
     * @return \FilippoToso\Travelport\Air\RailTicketInfo
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

    /**
     * @return anonymous547
     */
    public function getTicketFormType()
    {
      return $this->TicketFormType;
    }

    /**
     * @param anonymous547 $TicketFormType
     * @return \FilippoToso\Travelport\Air\RailTicketInfo
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
     * @return \FilippoToso\Travelport\Air\RailTicketInfo
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
     * @return \FilippoToso\Travelport\Air\RailTicketInfo
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
     * @return \FilippoToso\Travelport\Air\RailTicketInfo
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
     * @return \FilippoToso\Travelport\Air\RailTicketInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
