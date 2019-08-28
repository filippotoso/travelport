<?php

namespace FilippoToso\Travelport\Util;

class typeFlightNumberRange
{

    /**
     * @var typeFlightNumber $FlightNumberRangeStart
     */
    protected $FlightNumberRangeStart = null;

    /**
     * @var typeFlightNumber $FlightNumberRangeEnd
     */
    protected $FlightNumberRangeEnd = null;

    /**
     * @param typeFlightNumber $FlightNumberRangeStart
     * @param typeFlightNumber $FlightNumberRangeEnd
     */
    public function __construct($FlightNumberRangeStart = null, $FlightNumberRangeEnd = null)
    {
      $this->FlightNumberRangeStart = $FlightNumberRangeStart;
      $this->FlightNumberRangeEnd = $FlightNumberRangeEnd;
    }

    /**
     * @return typeFlightNumber
     */
    public function getFlightNumberRangeStart()
    {
      return $this->FlightNumberRangeStart;
    }

    /**
     * @param typeFlightNumber $FlightNumberRangeStart
     * @return \FilippoToso\Travelport\Util\typeFlightNumberRange
     */
    public function setFlightNumberRangeStart($FlightNumberRangeStart)
    {
      $this->FlightNumberRangeStart = $FlightNumberRangeStart;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getFlightNumberRangeEnd()
    {
      return $this->FlightNumberRangeEnd;
    }

    /**
     * @param typeFlightNumber $FlightNumberRangeEnd
     * @return \FilippoToso\Travelport\Util\typeFlightNumberRange
     */
    public function setFlightNumberRangeEnd($FlightNumberRangeEnd)
    {
      $this->FlightNumberRangeEnd = $FlightNumberRangeEnd;
      return $this;
    }

}
