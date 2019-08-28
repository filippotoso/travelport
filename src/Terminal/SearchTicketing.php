<?php

namespace FilippoToso\Travelport\Terminal;

class SearchTicketing
{

    /**
     * @var anonymous189 $TicketStatus
     */
    protected $TicketStatus = null;

    /**
     * @var anonymous190 $ReservationStatus
     */
    protected $ReservationStatus = null;

    /**
     * @var date $TicketDate
     */
    protected $TicketDate = null;

    /**
     * @param anonymous189 $TicketStatus
     * @param anonymous190 $ReservationStatus
     * @param date $TicketDate
     */
    public function __construct($TicketStatus = null, $ReservationStatus = null, $TicketDate = null)
    {
      $this->TicketStatus = $TicketStatus;
      $this->ReservationStatus = $ReservationStatus;
      $this->TicketDate = $TicketDate;
    }

    /**
     * @return anonymous189
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param anonymous189 $TicketStatus
     * @return \FilippoToso\Travelport\Terminal\SearchTicketing
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

    /**
     * @return anonymous190
     */
    public function getReservationStatus()
    {
      return $this->ReservationStatus;
    }

    /**
     * @param anonymous190 $ReservationStatus
     * @return \FilippoToso\Travelport\Terminal\SearchTicketing
     */
    public function setReservationStatus($ReservationStatus)
    {
      $this->ReservationStatus = $ReservationStatus;
      return $this;
    }

    /**
     * @return date
     */
    public function getTicketDate()
    {
      return $this->TicketDate;
    }

    /**
     * @param date $TicketDate
     * @return \FilippoToso\Travelport\Terminal\SearchTicketing
     */
    public function setTicketDate($TicketDate)
    {
      $this->TicketDate = $TicketDate;
      return $this;
    }

}
