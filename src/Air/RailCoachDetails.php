<?php

namespace FilippoToso\Travelport\Air;

class RailCoachDetails
{

    /**
     * @var string $RailCoachNumber
     */
    protected $RailCoachNumber = null;

    /**
     * @var string $AvailableRailSeats
     */
    protected $AvailableRailSeats = null;

    /**
     * @var boolean $RailSeatMapAvailability
     */
    protected $RailSeatMapAvailability = null;

    /**
     * @param string $RailCoachNumber
     * @param string $AvailableRailSeats
     * @param boolean $RailSeatMapAvailability
     */
    public function __construct($RailCoachNumber = null, $AvailableRailSeats = null, $RailSeatMapAvailability = null)
    {
      $this->RailCoachNumber = $RailCoachNumber;
      $this->AvailableRailSeats = $AvailableRailSeats;
      $this->RailSeatMapAvailability = $RailSeatMapAvailability;
    }

    /**
     * @return string
     */
    public function getRailCoachNumber()
    {
      return $this->RailCoachNumber;
    }

    /**
     * @param string $RailCoachNumber
     * @return \FilippoToso\Travelport\Air\RailCoachDetails
     */
    public function setRailCoachNumber($RailCoachNumber)
    {
      $this->RailCoachNumber = $RailCoachNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAvailableRailSeats()
    {
      return $this->AvailableRailSeats;
    }

    /**
     * @param string $AvailableRailSeats
     * @return \FilippoToso\Travelport\Air\RailCoachDetails
     */
    public function setAvailableRailSeats($AvailableRailSeats)
    {
      $this->AvailableRailSeats = $AvailableRailSeats;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRailSeatMapAvailability()
    {
      return $this->RailSeatMapAvailability;
    }

    /**
     * @param boolean $RailSeatMapAvailability
     * @return \FilippoToso\Travelport\Air\RailCoachDetails
     */
    public function setRailSeatMapAvailability($RailSeatMapAvailability)
    {
      $this->RailSeatMapAvailability = $RailSeatMapAvailability;
      return $this;
    }

}
