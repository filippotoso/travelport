<?php

namespace FilippoToso\Travelport\GDSQueue;

class TicketValidity
{

    /**
     * @var date $NotValidBefore
     */
    protected $NotValidBefore = null;

    /**
     * @var date $NotValidAfter
     */
    protected $NotValidAfter = null;

    /**
     * @param date $NotValidBefore
     * @param date $NotValidAfter
     */
    public function __construct($NotValidBefore, $NotValidAfter)
    {
      $this->NotValidBefore = $NotValidBefore;
      $this->NotValidAfter = $NotValidAfter;
    }

    /**
     * @return date
     */
    public function getNotValidBefore()
    {
      return $this->NotValidBefore;
    }

    /**
     * @param date $NotValidBefore
     * @return \FilippoToso\Travelport\GDSQueue\TicketValidity
     */
    public function setNotValidBefore($NotValidBefore)
    {
      $this->NotValidBefore = $NotValidBefore;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidAfter()
    {
      return $this->NotValidAfter;
    }

    /**
     * @param date $NotValidAfter
     * @return \FilippoToso\Travelport\GDSQueue\TicketValidity
     */
    public function setNotValidAfter($NotValidAfter)
    {
      $this->NotValidAfter = $NotValidAfter;
      return $this;
    }

}
