<?php

namespace FilippoToso\Travelport\Air;

class RailSeatAssignment
{

    /**
     * @var Characteristic $Characteristic
     */
    protected $Characteristic = null;

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
     * @var typeRef $RailSegmentRef
     */
    protected $RailSegmentRef = null;

    /**
     * @var string $CoachNumber
     */
    protected $CoachNumber = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param Characteristic $Characteristic
     * @param typeRef $Key
     * @param typeStatusCode $Status
     * @param string $Seat
     * @param typeRef $RailSegmentRef
     * @param string $CoachNumber
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Characteristic = null, $Key = null, $Status = null, $Seat = null, $RailSegmentRef = null, $CoachNumber = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Characteristic = $Characteristic;
      $this->Key = $Key;
      $this->Status = $Status;
      $this->Seat = $Seat;
      $this->RailSegmentRef = $RailSegmentRef;
      $this->CoachNumber = $CoachNumber;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return Characteristic
     */
    public function getCharacteristic()
    {
      return $this->Characteristic;
    }

    /**
     * @param Characteristic $Characteristic
     * @return \FilippoToso\Travelport\Air\RailSeatAssignment
     */
    public function setCharacteristic($Characteristic)
    {
      $this->Characteristic = $Characteristic;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\RailSeatAssignment
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
     * @return \FilippoToso\Travelport\Air\RailSeatAssignment
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
     * @return \FilippoToso\Travelport\Air\RailSeatAssignment
     */
    public function setSeat($Seat)
    {
      $this->Seat = $Seat;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getRailSegmentRef()
    {
      return $this->RailSegmentRef;
    }

    /**
     * @param typeRef $RailSegmentRef
     * @return \FilippoToso\Travelport\Air\RailSeatAssignment
     */
    public function setRailSegmentRef($RailSegmentRef)
    {
      $this->RailSegmentRef = $RailSegmentRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoachNumber()
    {
      return $this->CoachNumber;
    }

    /**
     * @param string $CoachNumber
     * @return \FilippoToso\Travelport\Air\RailSeatAssignment
     */
    public function setCoachNumber($CoachNumber)
    {
      $this->CoachNumber = $CoachNumber;
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
     * @return \FilippoToso\Travelport\Air\RailSeatAssignment
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
     * @return \FilippoToso\Travelport\Air\RailSeatAssignment
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
