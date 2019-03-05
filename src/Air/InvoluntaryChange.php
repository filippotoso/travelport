<?php

namespace FilippoToso\Travelport\Air;

class InvoluntaryChange
{

    /**
     * @var TicketEndorsement $TicketEndorsement
     */
    protected $TicketEndorsement = null;

    /**
     * @param TicketEndorsement $TicketEndorsement
     */
    public function __construct($TicketEndorsement = null)
    {
      $this->TicketEndorsement = $TicketEndorsement;
    }

    /**
     * @return TicketEndorsement
     */
    public function getTicketEndorsement()
    {
      return $this->TicketEndorsement;
    }

    /**
     * @param TicketEndorsement $TicketEndorsement
     * @return \FilippoToso\Travelport\Air\InvoluntaryChange
     */
    public function setTicketEndorsement($TicketEndorsement)
    {
      $this->TicketEndorsement = $TicketEndorsement;
      return $this;
    }

}
