<?php

namespace FilippoToso\Travelport\Air;

class SearchSpecificAirSegment
{

    /**
     * @var string $DepartureTime
     */
    protected $DepartureTime = null;

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var typeFlightNumber $FlightNumber
     */
    protected $FlightNumber = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @var int $SegmentIndex
     */
    protected $SegmentIndex = null;

    /**
     * @param string $DepartureTime
     * @param typeCarrier $Carrier
     * @param typeFlightNumber $FlightNumber
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     * @param int $SegmentIndex
     */
    public function __construct($DepartureTime = null, $Carrier = null, $FlightNumber = null, $Origin = null, $Destination = null, $SegmentIndex = null)
    {
      $this->DepartureTime = $DepartureTime;
      $this->Carrier = $Carrier;
      $this->FlightNumber = $FlightNumber;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
      $this->SegmentIndex = $SegmentIndex;
    }

    /**
     * @return string
     */
    public function getDepartureTime()
    {
      return $this->DepartureTime;
    }

    /**
     * @param string $DepartureTime
     * @return \FilippoToso\Travelport\Air\SearchSpecificAirSegment
     */
    public function setDepartureTime($DepartureTime)
    {
      $this->DepartureTime = $DepartureTime;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Air\SearchSpecificAirSegment
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getFlightNumber()
    {
      return $this->FlightNumber;
    }

    /**
     * @param typeFlightNumber $FlightNumber
     * @return \FilippoToso\Travelport\Air\SearchSpecificAirSegment
     */
    public function setFlightNumber($FlightNumber)
    {
      $this->FlightNumber = $FlightNumber;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param typeIATACode $Origin
     * @return \FilippoToso\Travelport\Air\SearchSpecificAirSegment
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeIATACode $Destination
     * @return \FilippoToso\Travelport\Air\SearchSpecificAirSegment
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentIndex()
    {
      return $this->SegmentIndex;
    }

    /**
     * @param int $SegmentIndex
     * @return \FilippoToso\Travelport\Air\SearchSpecificAirSegment
     */
    public function setSegmentIndex($SegmentIndex)
    {
      $this->SegmentIndex = $SegmentIndex;
      return $this;
    }

}
