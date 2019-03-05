<?php

namespace FilippoToso\Travelport\Rail;

class FareRestrictionDaysOfWeek
{

    /**
     * @var typeFareDirectionality $Direction
     */
    protected $Direction = null;

    /**
     * @var typeFareTripType $TripType
     */
    protected $TripType = null;

    /**
     * @var boolean $Monday
     */
    protected $Monday = null;

    /**
     * @var boolean $Tuesday
     */
    protected $Tuesday = null;

    /**
     * @var boolean $Wednesday
     */
    protected $Wednesday = null;

    /**
     * @var boolean $Thursday
     */
    protected $Thursday = null;

    /**
     * @var boolean $Friday
     */
    protected $Friday = null;

    /**
     * @var boolean $Saturday
     */
    protected $Saturday = null;

    /**
     * @var boolean $Sunday
     */
    protected $Sunday = null;

    /**
     * @param typeFareDirectionality $Direction
     * @param typeFareTripType $TripType
     * @param boolean $Monday
     * @param boolean $Tuesday
     * @param boolean $Wednesday
     * @param boolean $Thursday
     * @param boolean $Friday
     * @param boolean $Saturday
     * @param boolean $Sunday
     */
    public function __construct($Direction = null, $TripType = null, $Monday = null, $Tuesday = null, $Wednesday = null, $Thursday = null, $Friday = null, $Saturday = null, $Sunday = null)
    {
      $this->Direction = $Direction;
      $this->TripType = $TripType;
      $this->Monday = $Monday;
      $this->Tuesday = $Tuesday;
      $this->Wednesday = $Wednesday;
      $this->Thursday = $Thursday;
      $this->Friday = $Friday;
      $this->Saturday = $Saturday;
      $this->Sunday = $Sunday;
    }

    /**
     * @return typeFareDirectionality
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param typeFareDirectionality $Direction
     * @return \FilippoToso\Travelport\Rail\FareRestrictionDaysOfWeek
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return typeFareTripType
     */
    public function getTripType()
    {
      return $this->TripType;
    }

    /**
     * @param typeFareTripType $TripType
     * @return \FilippoToso\Travelport\Rail\FareRestrictionDaysOfWeek
     */
    public function setTripType($TripType)
    {
      $this->TripType = $TripType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMonday()
    {
      return $this->Monday;
    }

    /**
     * @param boolean $Monday
     * @return \FilippoToso\Travelport\Rail\FareRestrictionDaysOfWeek
     */
    public function setMonday($Monday)
    {
      $this->Monday = $Monday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTuesday()
    {
      return $this->Tuesday;
    }

    /**
     * @param boolean $Tuesday
     * @return \FilippoToso\Travelport\Rail\FareRestrictionDaysOfWeek
     */
    public function setTuesday($Tuesday)
    {
      $this->Tuesday = $Tuesday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWednesday()
    {
      return $this->Wednesday;
    }

    /**
     * @param boolean $Wednesday
     * @return \FilippoToso\Travelport\Rail\FareRestrictionDaysOfWeek
     */
    public function setWednesday($Wednesday)
    {
      $this->Wednesday = $Wednesday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getThursday()
    {
      return $this->Thursday;
    }

    /**
     * @param boolean $Thursday
     * @return \FilippoToso\Travelport\Rail\FareRestrictionDaysOfWeek
     */
    public function setThursday($Thursday)
    {
      $this->Thursday = $Thursday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFriday()
    {
      return $this->Friday;
    }

    /**
     * @param boolean $Friday
     * @return \FilippoToso\Travelport\Rail\FareRestrictionDaysOfWeek
     */
    public function setFriday($Friday)
    {
      $this->Friday = $Friday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaturday()
    {
      return $this->Saturday;
    }

    /**
     * @param boolean $Saturday
     * @return \FilippoToso\Travelport\Rail\FareRestrictionDaysOfWeek
     */
    public function setSaturday($Saturday)
    {
      $this->Saturday = $Saturday;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSunday()
    {
      return $this->Sunday;
    }

    /**
     * @param boolean $Sunday
     * @return \FilippoToso\Travelport\Rail\FareRestrictionDaysOfWeek
     */
    public function setSunday($Sunday)
    {
      $this->Sunday = $Sunday;
      return $this;
    }

}
