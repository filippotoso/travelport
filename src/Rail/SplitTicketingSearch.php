<?php

namespace FilippoToso\Travelport\Rail;

class SplitTicketingSearch
{

    /**
     * @var int $RoundTrip
     */
    protected $RoundTrip = null;

    /**
     * @param int $RoundTrip
     */
    public function __construct($RoundTrip = null)
    {
      $this->RoundTrip = $RoundTrip;
    }

    /**
     * @return int
     */
    public function getRoundTrip()
    {
      return $this->RoundTrip;
    }

    /**
     * @param int $RoundTrip
     * @return \FilippoToso\Travelport\Rail\SplitTicketingSearch
     */
    public function setRoundTrip($RoundTrip)
    {
      $this->RoundTrip = $RoundTrip;
      return $this;
    }

}
