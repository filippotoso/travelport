<?php

namespace FilippoToso\Travelport\Rail;

class SearchAgent
{

    /**
     * @var string $BranchId
     */
    protected $BranchId = null;

    /**
     * @var string $CreatedByAgent
     */
    protected $CreatedByAgent = null;

    /**
     * @var string $ModifiedByAgent
     */
    protected $ModifiedByAgent = null;

    /**
     * @var string $TicketedByAgent
     */
    protected $TicketedByAgent = null;

    /**
     * @param string $BranchId
     * @param string $CreatedByAgent
     * @param string $ModifiedByAgent
     * @param string $TicketedByAgent
     */
    public function __construct($BranchId = null, $CreatedByAgent = null, $ModifiedByAgent = null, $TicketedByAgent = null)
    {
      $this->BranchId = $BranchId;
      $this->CreatedByAgent = $CreatedByAgent;
      $this->ModifiedByAgent = $ModifiedByAgent;
      $this->TicketedByAgent = $TicketedByAgent;
    }

    /**
     * @return string
     */
    public function getBranchId()
    {
      return $this->BranchId;
    }

    /**
     * @param string $BranchId
     * @return \FilippoToso\Travelport\Rail\SearchAgent
     */
    public function setBranchId($BranchId)
    {
      $this->BranchId = $BranchId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatedByAgent()
    {
      return $this->CreatedByAgent;
    }

    /**
     * @param string $CreatedByAgent
     * @return \FilippoToso\Travelport\Rail\SearchAgent
     */
    public function setCreatedByAgent($CreatedByAgent)
    {
      $this->CreatedByAgent = $CreatedByAgent;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedByAgent()
    {
      return $this->ModifiedByAgent;
    }

    /**
     * @param string $ModifiedByAgent
     * @return \FilippoToso\Travelport\Rail\SearchAgent
     */
    public function setModifiedByAgent($ModifiedByAgent)
    {
      $this->ModifiedByAgent = $ModifiedByAgent;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketedByAgent()
    {
      return $this->TicketedByAgent;
    }

    /**
     * @param string $TicketedByAgent
     * @return \FilippoToso\Travelport\Rail\SearchAgent
     */
    public function setTicketedByAgent($TicketedByAgent)
    {
      $this->TicketedByAgent = $TicketedByAgent;
      return $this;
    }

}
