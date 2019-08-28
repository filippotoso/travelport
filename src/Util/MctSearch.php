<?php

namespace FilippoToso\Travelport\Util;

class MctSearch
{

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
     * @var string $ArriveFlight
     */
    protected $ArriveFlight = null;

    /**
     * @var string $DepartFlight
     */
    protected $DepartFlight = null;

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
     * @var date $TravelDate
     */
    protected $TravelDate = null;

    /**
     * @param typeIATACode $ArriveStation
     * @param typeIATACode $DepartStation
     * @param typeMctConnection $Connection
     * @param typeCarrier $ArriveCarrier
     * @param typeCarrier $DepartCarrier
     * @param string $ArriveFlight
     * @param string $DepartFlight
     * @param typeIATACode $PreviousStation
     * @param typeIATACode $NextStation
     * @param typeCountry $PreviousCountry
     * @param typeCountry $NextCountry
     * @param typeState $PreviousState
     * @param typeState $NextState
     * @param date $TravelDate
     */
    public function __construct($ArriveStation = null, $DepartStation = null, $Connection = null, $ArriveCarrier = null, $DepartCarrier = null, $ArriveFlight = null, $DepartFlight = null, $PreviousStation = null, $NextStation = null, $PreviousCountry = null, $NextCountry = null, $PreviousState = null, $NextState = null, $TravelDate = null)
    {
      $this->ArriveStation = $ArriveStation;
      $this->DepartStation = $DepartStation;
      $this->Connection = $Connection;
      $this->ArriveCarrier = $ArriveCarrier;
      $this->DepartCarrier = $DepartCarrier;
      $this->ArriveFlight = $ArriveFlight;
      $this->DepartFlight = $DepartFlight;
      $this->PreviousStation = $PreviousStation;
      $this->NextStation = $NextStation;
      $this->PreviousCountry = $PreviousCountry;
      $this->NextCountry = $NextCountry;
      $this->PreviousState = $PreviousState;
      $this->NextState = $NextState;
      $this->TravelDate = $TravelDate;
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
     * @return \FilippoToso\Travelport\Util\MctSearch
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
     * @return \FilippoToso\Travelport\Util\MctSearch
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
     * @return \FilippoToso\Travelport\Util\MctSearch
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
     * @return \FilippoToso\Travelport\Util\MctSearch
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
     * @return \FilippoToso\Travelport\Util\MctSearch
     */
    public function setDepartCarrier($DepartCarrier)
    {
      $this->DepartCarrier = $DepartCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getArriveFlight()
    {
      return $this->ArriveFlight;
    }

    /**
     * @param string $ArriveFlight
     * @return \FilippoToso\Travelport\Util\MctSearch
     */
    public function setArriveFlight($ArriveFlight)
    {
      $this->ArriveFlight = $ArriveFlight;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartFlight()
    {
      return $this->DepartFlight;
    }

    /**
     * @param string $DepartFlight
     * @return \FilippoToso\Travelport\Util\MctSearch
     */
    public function setDepartFlight($DepartFlight)
    {
      $this->DepartFlight = $DepartFlight;
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
     * @return \FilippoToso\Travelport\Util\MctSearch
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
     * @return \FilippoToso\Travelport\Util\MctSearch
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
     * @return \FilippoToso\Travelport\Util\MctSearch
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
     * @return \FilippoToso\Travelport\Util\MctSearch
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
     * @return \FilippoToso\Travelport\Util\MctSearch
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
     * @return \FilippoToso\Travelport\Util\MctSearch
     */
    public function setNextState($NextState)
    {
      $this->NextState = $NextState;
      return $this;
    }

    /**
     * @return date
     */
    public function getTravelDate()
    {
      return $this->TravelDate;
    }

    /**
     * @param date $TravelDate
     * @return \FilippoToso\Travelport\Util\MctSearch
     */
    public function setTravelDate($TravelDate)
    {
      $this->TravelDate = $TravelDate;
      return $this;
    }

}
