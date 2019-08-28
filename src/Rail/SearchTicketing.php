<?php

namespace FilippoToso\Travelport\Rail;

class SearchTicketing
{

    /**
     * @var anonymous199 $TicketStatus
     */
    protected $TicketStatus = null;

    /**
     * @var anonymous200 $ReservationStatus
     */
    protected $ReservationStatus = null;

    /**
     * @var date $TicketDate
     */
    protected $TicketDate = null;

    /**
     * @param anonymous199 $TicketStatus
     * @param anonymous200 $ReservationStatus
     * @param date $TicketDate
     */
    public function __construct($TicketStatus = null, $ReservationStatus = null, $TicketDate = null)
    {
      $this->TicketStatus = $TicketStatus;
      $this->ReservationStatus = $ReservationStatus;
      $this->TicketDate = $TicketDate;
    }

    /**
     * @return anonymous199
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param anonymous199 $TicketStatus
     * @return \FilippoToso\Travelport\Rail\SearchTicketing
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

    /**
     * @return anonymous200
     */
    public function getReservationStatus()
    {
      return $this->ReservationStatus;
    }

    /**
     * @param anonymous200 $ReservationStatus
     * @return \FilippoToso\Travelport\Rail\SearchTicketing
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
     * @return \FilippoToso\Travelport\Rail\SearchTicketing
     */
    public function setTicketDate($TicketDate)
    {
      $this->TicketDate = $TicketDate;
      return $this;
    }

}
