<?php

namespace FilippoToso\Travelport\Util;

class MctException
{

    /**
     * @var int $Time
     */
    protected $Time = null;

    /**
     * @var typeIATACode $ArriveStation
     */
    protected $ArriveStation = null;

    /**
     * @var typeIATACode $DepartStation
     */
    protected $DepartStation = null;

    /**
     * @var typeMctConnection $Connection
     */
    protected $Connection = null;

    /**
     * @var typeCarrier $ArriveCarrier
     */
    protected $ArriveCarrier = null;

    /**
     * @var typeCarrier $DepartCarrier
     */
    protected $DepartCarrier = null;

    /**
     * @var string $ArriveFlightRangeBegin
     */
    protected $ArriveFlightRangeBegin = null;

    /**
     * @var string $ArriveFlightRangeEnd
     */
    protected $ArriveFlightRangeEnd = null;

    /**
     * @var string $DepartFlightRangeBegin
     */
    protected $DepartFlightRangeBegin = null;

    /**
     * @var string $DepartFlightRangeEnd
     */
    protected $DepartFlightRangeEnd = null;

    /**
     * @var string $ArriveEquipment
     */
    protected $ArriveEquipment = null;

    /**
     * @var string $DepartEquipment
     */
    protected $DepartEquipment = null;

    /**
     * @var typeIATACode $PreviousStation
     */
    protected $PreviousStation = null;

    /**
     * @var typeIATACode $NextStation
     */
    protected $NextStation = null;

    /**
     * @var typeCountry $PreviousCountry
     */
    protected $PreviousCountry = null;

    /**
     * @var typeCountry $NextCountry
     */
    protected $NextCountry = null;

    /**
     * @var typeState $PreviousState
     */
    protected $PreviousState = null;

    /**
     * @var typeState $NextState
     */
    protected $NextState = null;

    /**
     * @var string $ArriveTerminal
     */
    protected $ArriveTerminal = null;

    /**
     * @var string $DepartTerminal
     */
    protected $DepartTerminal = null;

    /**
     * @var date $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var date $DiscontinueDate
     */
    protected $DiscontinueDate = null;

    /**
     * @param int $Time
     * @param typeIATACode $ArriveStation
     * @param typeIATACode $DepartStation
     * @param typeMctConnection $Connection
     * @param typeCarrier $ArriveCarrier
     * @param typeCarrier $DepartCarrier
     * @param string $ArriveFlightRangeBegin
     * @param string $ArriveFlightRangeEnd
     * @param string $DepartFlightRangeBegin
     * @param string $DepartFlightRangeEnd
     * @param string $ArriveEquipment
     * @param string $DepartEquipment
     * @param typeIATACode $PreviousStation
     * @param typeIATACode $NextStation
     * @param typeCountry $PreviousCountry
     * @param typeCountry $NextCountry
     * @param typeState $PreviousState
     * @param typeState $NextState
     * @param string $ArriveTerminal
     * @param string $DepartTerminal
     * @param date $EffectiveDate
     * @param date $DiscontinueDate
     */
    public function __construct($Time = null, $ArriveStation = null, $DepartStation = null, $Connection = null, $ArriveCarrier = null, $DepartCarrier = null, $ArriveFlightRangeBegin = null, $ArriveFlightRangeEnd = null, $DepartFlightRangeBegin = null, $DepartFlightRangeEnd = null, $ArriveEquipment = null, $DepartEquipment = null, $PreviousStation = null, $NextStation = null, $PreviousCountry = null, $NextCountry = null, $PreviousState = null, $NextState = null, $ArriveTerminal = null, $DepartTerminal = null, $EffectiveDate = null, $DiscontinueDate = null)
    {
      $this->Time = $Time;
      $this->ArriveStation = $ArriveStation;
      $this->DepartStation = $DepartStation;
      $this->Connection = $Connection;
      $this->ArriveCarrier = $ArriveCarrier;
      $this->DepartCarrier = $DepartCarrier;
      $this->ArriveFlightRangeBegin = $ArriveFlightRangeBegin;
      $this->ArriveFlightRangeEnd = $ArriveFlightRangeEnd;
      $this->DepartFlightRangeBegin = $DepartFlightRangeBegin;
      $this->DepartFlightRangeEnd = $DepartFlightRangeEnd;
      $this->ArriveEquipment = $ArriveEquipment;
      $this->DepartEquipment = $DepartEquipment;
      $this->PreviousStation = $PreviousStation;
      $this->NextStation = $NextStation;
      $this->PreviousCountry = $PreviousCountry;
      $this->NextCountry = $NextCountry;
      $this->PreviousState = $PreviousState;
      $this->NextState = $NextState;
      $this->ArriveTerminal = $ArriveTerminal;
      $this->DepartTerminal = $DepartTerminal;
      $this->EffectiveDate = $EffectiveDate;
      $this->DiscontinueDate = $DiscontinueDate;
    }

    /**
     * @return int
     */
    public function getTime()
    {
      return $this->Time;
    }

    /**
     * @param int $Time
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setTime($Time)
    {
      $this->Time = $Time;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getArriveStation()
    {
      return $this->ArriveStation;
    }

    /**
     * @param typeIATACode $ArriveStation
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setArriveStation($ArriveStation)
    {
      $this->ArriveStation = $ArriveStation;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getDepartStation()
    {
      return $this->DepartStation;
    }

    /**
     * @param typeIATACode $DepartStation
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setDepartStation($DepartStation)
    {
      $this->DepartStation = $DepartStation;
      return $this;
    }

    /**
     * @return typeMctConnection
     */
    public function getConnection()
    {
      return $this->Connection;
    }

    /**
     * @param typeMctConnection $Connection
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setConnection($Connection)
    {
      $this->Connection = $Connection;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getArriveCarrier()
    {
      return $this->ArriveCarrier;
    }

    /**
     * @param typeCarrier $ArriveCarrier
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setArriveCarrier($ArriveCarrier)
    {
      $this->ArriveCarrier = $ArriveCarrier;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getDepartCarrier()
    {
      return $this->DepartCarrier;
    }

    /**
     * @param typeCarrier $DepartCarrier
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setDepartCarrier($DepartCarrier)
    {
      $this->DepartCarrier = $DepartCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getArriveFlightRangeBegin()
    {
      return $this->ArriveFlightRangeBegin;
    }

    /**
     * @param string $ArriveFlightRangeBegin
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setArriveFlightRangeBegin($ArriveFlightRangeBegin)
    {
      $this->ArriveFlightRangeBegin = $ArriveFlightRangeBegin;
      return $this;
    }

    /**
     * @return string
     */
    public function getArriveFlightRangeEnd()
    {
      return $this->ArriveFlightRangeEnd;
    }

    /**
     * @param string $ArriveFlightRangeEnd
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setArriveFlightRangeEnd($ArriveFlightRangeEnd)
    {
      $this->ArriveFlightRangeEnd = $ArriveFlightRangeEnd;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartFlightRangeBegin()
    {
      return $this->DepartFlightRangeBegin;
    }

    /**
     * @param string $DepartFlightRangeBegin
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setDepartFlightRangeBegin($DepartFlightRangeBegin)
    {
      $this->DepartFlightRangeBegin = $DepartFlightRangeBegin;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartFlightRangeEnd()
    {
      return $this->DepartFlightRangeEnd;
    }

    /**
     * @param string $DepartFlightRangeEnd
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setDepartFlightRangeEnd($DepartFlightRangeEnd)
    {
      $this->DepartFlightRangeEnd = $DepartFlightRangeEnd;
      return $this;
    }

    /**
     * @return string
     */
    public function getArriveEquipment()
    {
      return $this->ArriveEquipment;
    }

    /**
     * @param string $ArriveEquipment
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setArriveEquipment($ArriveEquipment)
    {
      $this->ArriveEquipment = $ArriveEquipment;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartEquipment()
    {
      return $this->DepartEquipment;
    }

    /**
     * @param string $DepartEquipment
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setDepartEquipment($DepartEquipment)
    {
      $this->DepartEquipment = $DepartEquipment;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getPreviousStation()
    {
      return $this->PreviousStation;
    }

    /**
     * @param typeIATACode $PreviousStation
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setPreviousStation($PreviousStation)
    {
      $this->PreviousStation = $PreviousStation;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getNextStation()
    {
      return $this->NextStation;
    }

    /**
     * @param typeIATACode $NextStation
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setNextStation($NextStation)
    {
      $this->NextStation = $NextStation;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getPreviousCountry()
    {
      return $this->PreviousCountry;
    }

    /**
     * @param typeCountry $PreviousCountry
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setPreviousCountry($PreviousCountry)
    {
      $this->PreviousCountry = $PreviousCountry;
      return $this;
    }

    /**
     * @return typeCountry
     */
    public function getNextCountry()
    {
      return $this->NextCountry;
    }

    /**
     * @param typeCountry $NextCountry
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setNextCountry($NextCountry)
    {
      $this->NextCountry = $NextCountry;
      return $this;
    }

    /**
     * @return typeState
     */
    public function getPreviousState()
    {
      return $this->PreviousState;
    }

    /**
     * @param typeState $PreviousState
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setPreviousState($PreviousState)
    {
      $this->PreviousState = $PreviousState;
      return $this;
    }

    /**
     * @return typeState
     */
    public function getNextState()
    {
      return $this->NextState;
    }

    /**
     * @param typeState $NextState
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setNextState($NextState)
    {
      $this->NextState = $NextState;
      return $this;
    }

    /**
     * @return string
     */
    public function getArriveTerminal()
    {
      return $this->ArriveTerminal;
    }

    /**
     * @param string $ArriveTerminal
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setArriveTerminal($ArriveTerminal)
    {
      $this->ArriveTerminal = $ArriveTerminal;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartTerminal()
    {
      return $this->DepartTerminal;
    }

    /**
     * @param string $DepartTerminal
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setDepartTerminal($DepartTerminal)
    {
      $this->DepartTerminal = $DepartTerminal;
      return $this;
    }

    /**
     * @return date
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param date $EffectiveDate
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getDiscontinueDate()
    {
      return $this->DiscontinueDate;
    }

    /**
     * @param date $DiscontinueDate
     * @return \FilippoToso\Travelport\Util\MctException
     */
    public function setDiscontinueDate($DiscontinueDate)
    {
      $this->DiscontinueDate = $DiscontinueDate;
      return $this;
    }

}
