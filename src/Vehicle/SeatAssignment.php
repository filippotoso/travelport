<?php

namespace FilippoToso\Travelport\Vehicle;

class SeatAssignment
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeStatusCode $Status
     */
    protected $Status = null;

    /**
     * @var string $Seat
     */
    protected $Seat = null;

    /**
     * @var typeSeatTypeCode $SeatTypeCode
     */
    protected $SeatTypeCode = null;

    /**
     * @var typeRef $SegmentRef
     */
    protected $SegmentRef = null;

    /**
     * @var typeRef $FlightDetailsRef
     */
    protected $FlightDetailsRef = null;

    /**
     * @var string $RailCoachNumber
     */
    protected $RailCoachNumber = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param typeStatusCode $Status
     * @param string $Seat
     * @param typeSeatTypeCode $SeatTypeCode
     * @param typeRef $SegmentRef
     * @param typeRef $FlightDetailsRef
     * @param string $RailCoachNumber
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key = null, $Status = null, $Seat = null, $SeatTypeCode = null, $SegmentRef = null, $FlightDetailsRef = null, $RailCoachNumber = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Key = $Key;
      $this->Status = $Status;
      $this->Seat = $Seat;
      $this->SeatTypeCode = $SeatTypeCode;
      $this->SegmentRef = $SegmentRef;
      $this->FlightDetailsRef = $FlightDetailsRef;
      $this->RailCoachNumber = $RailCoachNumber;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Vehicle\SeatAssignment
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeStatusCode
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeStatusCode $Status
     * @return \FilippoToso\Travelport\Vehicle\SeatAssignment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeat()
    {
      return $this->Seat;
    }

    /**
     * @param string $Seat
     * @return \FilippoToso\Travelport\Vehicle\SeatAssignment
     */
    public function setSeat($Seat)
    {
      $this->Seat = $Seat;
      return $this;
    }

    /**
     * @return typeSeatTypeCode
     */
    public function getSeatTypeCode()
    {
      return $this->SeatTypeCode;
    }

    /**
     * @param typeSeatTypeCode $SeatTypeCode
     * @return \FilippoToso\Travelport\Vehicle\SeatAssignment
     */
    public function setSeatTypeCode($SeatTypeCode)
    {
      $this->SeatTypeCode = $SeatTypeCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getSegmentRef()
    {
      return $this->SegmentRef;
    }

    /**
     * @param typeRef $SegmentRef
     * @return \FilippoToso\Travelport\Vehicle\SeatAssignment
     */
    public function setSegmentRef($SegmentRef)
    {
      $this->SegmentRef = $SegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFlightDetailsRef()
    {
      return $this->FlightDetailsRef;
    }

    /**
     * @param typeRef $FlightDetailsRef
     * @return \FilippoToso\Travelport\Vehicle\SeatAssignment
     */
    public function setFlightDetailsRef($FlightDetailsRef)
    {
      $this->FlightDetailsRef = $FlightDetailsRef;
      return $this;
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
     * @return \FilippoToso\Travelport\Vehicle\SeatAssignment
     */
    public function setRailCoachNumber($RailCoachNumber)
    {
      $this->RailCoachNumber = $RailCoachNumber;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Vehicle\SeatAssignment
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Vehicle\SeatAssignment
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
