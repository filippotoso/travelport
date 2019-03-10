<?php

namespace FilippoToso\Travelport\Air;

class ConjunctedTicketInfo
{

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
     * @var anonymous858 $TicketingAgentSignOn
     */
    protected $TicketingAgentSignOn = null;

    /**
     * @var typeTicketStatus $Status
     */
    protected $Status = null;

    /**
     * @param string $Number
     * @param typeIATA $IATANumber
     * @param \DateTime $TicketIssueDate
     * @param anonymous858 $TicketingAgentSignOn
     * @param typeTicketStatus $Status
     */
    public function __construct($Number = null, $IATANumber = null, \DateTime $TicketIssueDate = null, $TicketingAgentSignOn = null, $Status = null)
    {
      $this->Number = $Number;
      $this->IATANumber = $IATANumber;
      $this->TicketIssueDate = $TicketIssueDate ? $TicketIssueDate->format(\DateTime::ATOM) : null;
      $this->TicketingAgentSignOn = $TicketingAgentSignOn;
      $this->Status = $Status;
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
     * @return \FilippoToso\Travelport\Air\ConjunctedTicketInfo
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
     * @return \FilippoToso\Travelport\Air\ConjunctedTicketInfo
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
     * @return \FilippoToso\Travelport\Air\ConjunctedTicketInfo
     */
    public function setTicketIssueDate(\DateTime $TicketIssueDate)
    {
      $this->TicketIssueDate = $TicketIssueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return anonymous858
     */
    public function getTicketingAgentSignOn()
    {
      return $this->TicketingAgentSignOn;
    }

    /**
     * @param anonymous858 $TicketingAgentSignOn
     * @return \FilippoToso\Travelport\Air\ConjunctedTicketInfo
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
     * @return \FilippoToso\Travelport\Air\ConjunctedTicketInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
