<?php

namespace FilippoToso\Travelport\GDSQueue;

class ExchangedTicketInfo
{

    /**
     * @var typeTicketNumber $Number
     */
    protected $Number = null;

    /**
     * @param typeTicketNumber $Number
     */
    public function __construct($Number = null)
    {
      $this->Number = $Number;
    }

    /**
     * @return typeTicketNumber
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param typeTicketNumber $Number
     * @return \FilippoToso\Travelport\GDSQueue\ExchangedTicketInfo
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
