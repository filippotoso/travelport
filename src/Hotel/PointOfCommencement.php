<?php

namespace FilippoToso\Travelport\Hotel;

class PointOfCommencement
{

    /**
     * @var typeIATACode $CityOrAirportCode
     */
    protected $CityOrAirportCode = null;

    /**
     * @var string $Time
     */
    protected $Time = null;

    /**
     * @param typeIATACode $CityOrAirportCode
     * @param string $Time
     */
    public function __construct($CityOrAirportCode = null, $Time = null)
    {
      $this->CityOrAirportCode = $CityOrAirportCode;
      $this->Time = $Time;
    }

    /**
     * @return typeIATACode
     */
    public function getCityOrAirportCode()
    {
      return $this->CityOrAirportCode;
    }

    /**
     * @param typeIATACode $CityOrAirportCode
     * @return \FilippoToso\Travelport\Hotel\PointOfCommencement
     */
    public function setCityOrAirportCode($CityOrAirportCode)
    {
      $this->CityOrAirportCode = $CityOrAirportCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param string $Time
     * @return \FilippoToso\Travelport\Hotel\PointOfCommencement
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

}
