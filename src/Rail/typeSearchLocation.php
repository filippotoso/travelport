<?php

namespace FilippoToso\Travelport\Rail;

class typeSearchLocation
{

    /**
     * @var Airport $Airport
     */
    protected $Airport = null;

    /**
     * @var City $City
     */
    protected $City = null;

    /**
     * @var CityOrAirport $CityOrAirport
     */
    protected $CityOrAirport = null;

    /**
     * @var CoordinateLocation $CoordinateLocation
     */
    protected $CoordinateLocation = null;

    /**
     * @var RailLocation $RailLocation
     */
    protected $RailLocation = null;

    /**
     * @var Distance $Distance
     */
    protected $Distance = null;

    /**
     * @param Airport $Airport
     * @param City $City
     * @param CityOrAirport $CityOrAirport
     * @param CoordinateLocation $CoordinateLocation
     * @param RailLocation $RailLocation
     * @param Distance $Distance
     */
    public function __construct($Airport = null, $City = null, $CityOrAirport = null, $CoordinateLocation = null, $RailLocation = null, $Distance = null)
    {
      $this->Airport = $Airport;
      $this->City = $City;
      $this->CityOrAirport = $CityOrAirport;
      $this->CoordinateLocation = $CoordinateLocation;
      $this->RailLocation = $RailLocation;
      $this->Distance = $Distance;
    }

    /**
     * @return Airport
     */
    public function getAirport()
    {
      return $this->Airport;
    }

    /**
     * @param Airport $Airport
     * @return \FilippoToso\Travelport\Rail\typeSearchLocation
     */
    public function setAirport($Airport)
    {
      $this->Airport = $Airport;
      return $this;
    }

    /**
     * @return City
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param City $City
     * @return \FilippoToso\Travelport\Rail\typeSearchLocation
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return CityOrAirport
     */
    public function getCityOrAirport()
    {
      return $this->CityOrAirport;
    }

    /**
     * @param CityOrAirport $CityOrAirport
     * @return \FilippoToso\Travelport\Rail\typeSearchLocation
     */
    public function setCityOrAirport($CityOrAirport)
    {
      $this->CityOrAirport = $CityOrAirport;
      return $this;
    }

    /**
     * @return CoordinateLocation
     */
    public function getCoordinateLocation()
    {
      return $this->CoordinateLocation;
    }

    /**
     * @param CoordinateLocation $CoordinateLocation
     * @return \FilippoToso\Travelport\Rail\typeSearchLocation
     */
    public function setCoordinateLocation($CoordinateLocation)
    {
      $this->CoordinateLocation = $CoordinateLocation;
      return $this;
    }

    /**
     * @return RailLocation
     */
    public function getRailLocation()
    {
      return $this->RailLocation;
    }

    /**
     * @param RailLocation $RailLocation
     * @return \FilippoToso\Travelport\Rail\typeSearchLocation
     */
    public function setRailLocation($RailLocation)
    {
      $this->RailLocation = $RailLocation;
      return $this;
    }

    /**
     * @return Distance
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param Distance $Distance
     * @return \FilippoToso\Travelport\Rail\typeSearchLocation
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

}
