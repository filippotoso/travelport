<?php

namespace FilippoToso\Travelport\Util;

class TicketInfo
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var ConjunctedTicketInfo $ConjunctedTicketInfo
     */
    protected $ConjunctedTicketInfo = null;

    /**
     * @var ExchangedTicketInfo $ExchangedTicketInfo
     */
    protected $ExchangedTicketInfo = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var typeIATA $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @var \DateTime $TicketIssueDate
     */
    protected $TicketIssueDate = null;

    /**
     * @var anonymous776 $TicketingAgentSignOn
     */
    protected $TicketingAgentSignOn = null;

    /**
     * @var typeTicketStatus $Status
     */
    protected $Status = null;

    /**
     * @var boolean $BulkTicket
     */
    protected $BulkTicket = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeRef $AirPricingInfoRef
     */
    protected $AirPricingInfoRef = null;

    /**
     * @param Name $Name
     * @param ConjunctedTicketInfo $ConjunctedTicketInfo
     * @param ExchangedTicketInfo $ExchangedTicketInfo
     * @param string $Number
     * @param typeIATA $IATANumber
     * @param \DateTime $TicketIssueDate
     * @param anonymous776 $TicketingAgentSignOn
     * @param typeTicketStatus $Status
     * @param boolean $BulkTicket
     * @param typeRef $BookingTravelerRef
     * @param typeRef $AirPricingInfoRef
     */
    public function __construct($Name = null, $ConjunctedTicketInfo = null, $ExchangedTicketInfo = null, $Number = null, $IATANumber = null, \DateTime $TicketIssueDate = null, $TicketingAgentSignOn = null, $Status = null, $BulkTicket = null, $BookingTravelerRef = null, $AirPricingInfoRef = null)
    {
      $this->Name = $Name;
      $this->ConjunctedTicketInfo = $ConjunctedTicketInfo;
      $this->ExchangedTicketInfo = $ExchangedTicketInfo;
      $this->Number = $Number;
      $this->IATANumber = $IATANumber;
      $this->TicketIssueDate = $TicketIssueDate ? $TicketIssueDate->format(\DateTime::ATOM) : null;
      $this->TicketingAgentSignOn = $TicketingAgentSignOn;
      $this->Status = $Status;
      $this->BulkTicket = $BulkTicket;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->AirPricingInfoRef = $AirPricingInfoRef;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ConjunctedTicketInfo
     */
    public function getConjunctedTicketInfo()
    {
      return $this->ConjunctedTicketInfo;
    }

    /**
     * @param ConjunctedTicketInfo $ConjunctedTicketInfo
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setConjunctedTicketInfo($ConjunctedTicketInfo)
    {
      $this->ConjunctedTicketInfo = $ConjunctedTicketInfo;
      return $this;
    }

    /**
     * @return ExchangedTicketInfo
     */
    public function getExchangedTicketInfo()
    {
      return $this->ExchangedTicketInfo;
    }

    /**
     * @param ExchangedTicketInfo $ExchangedTicketInfo
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setExchangedTicketInfo($ExchangedTicketInfo)
    {
      $this->ExchangedTicketInfo = $ExchangedTicketInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return typeIATA
     */
    public function getIATANumber()
    {
      return $this->IATANumber;
    }

    /**
     * @param typeIATA $IATANumber
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTicketIssueDate()
    {
      if ($this->TicketIssueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TicketIssueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TicketIssueDate
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setTicketIssueDate(\DateTime $TicketIssueDate)
    {
      $this->TicketIssueDate = $TicketIssueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return anonymous776
     */
    public function getTicketingAgentSignOn()
    {
      return $this->TicketingAgentSignOn;
    }

    /**
     * @param anonymous776 $TicketingAgentSignOn
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setTicketingAgentSignOn($TicketingAgentSignOn)
    {
      $this->TicketingAgentSignOn = $TicketingAgentSignOn;
      return $this;
    }

    /**
     * @return typeTicketStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeTicketStatus $Status
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBulkTicket()
    {
      return $this->BulkTicket;
    }

    /**
     * @param boolean $BulkTicket
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setBulkTicket($BulkTicket)
    {
      $this->BulkTicket = $BulkTicket;
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
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param typeRef $AirPricingInfoRef
     * @return \FilippoToso\Travelport\Util\TicketInfo
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

}
