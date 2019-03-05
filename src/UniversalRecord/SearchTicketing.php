<?php

namespace FilippoToso\Travelport\UniversalRecord;

class SearchTicketing
{

    /**
     * @var anonymous202 $TicketStatus
     */
    protected $TicketStatus = null;

    /**
     * @var anonymous203 $ReservationStatus
     */
    protected $ReservationStatus = null;

    /**
     * @var date $TicketDate
     */
    protected $TicketDate = null;

    /**
     * @param anonymous202 $TicketStatus
     * @param anonymous203 $ReservationStatus
     * @param date $TicketDate
     */
    public function __construct($TicketStatus = null, $ReservationStatus = null, $TicketDate = null)
    {
      $this->TicketStatus = $TicketStatus;
      $this->ReservationStatus = $ReservationStatus;
      $this->TicketDate = $TicketDate;
    }

    /**
     * @return anonymous202
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param anonymous202 $TicketStatus
     * @return \FilippoToso\Travelport\UniversalRecord\SearchTicketing
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

    /**
     * @return anonymous203
     */
    public function getReservationStatus()
    {
      return $this->ReservationStatus;
    }

    /**
     * @param anonymous203 $ReservationStatus
     * @return \FilippoToso\Travelport\UniversalRecord\SearchTicketing
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
     * @return \FilippoToso\Travelport\UniversalRecord\SearchTicketing
     */
    public function setTicketDate($TicketDate)
    {
      $this->TicketDate = $TicketDate;
      return $this;
    }

}
