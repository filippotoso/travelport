<?php

namespace FilippoToso\Travelport\Air;

class FlightType
{

    /**
     * @var boolean $RequireSingleCarrier
     */
    protected $RequireSingleCarrier = null;

    /**
     * @var anonymous688 $MaxConnections
     */
    protected $MaxConnections = null;

    /**
     * @var anonymous689 $MaxStops
     */
    protected $MaxStops = null;

    /**
     * @var boolean $NonStopDirects
     */
    protected $NonStopDirects = null;

    /**
     * @var boolean $StopDirects
     */
    protected $StopDirects = null;

    /**
     * @var boolean $SingleOnlineCon
     */
    protected $SingleOnlineCon = null;

    /**
     * @var boolean $DoubleOnlineCon
     */
    protected $DoubleOnlineCon = null;

    /**
     * @var boolean $TripleOnlineCon
     */
    protected $TripleOnlineCon = null;

    /**
     * @var boolean $SingleInterlineCon
     */
    protected $SingleInterlineCon = null;

    /**
     * @var boolean $DoubleInterlineCon
     */
    protected $DoubleInterlineCon = null;

    /**
     * @var boolean $TripleInterlineCon
     */
    protected $TripleInterlineCon = null;

    /**
     * @param boolean $RequireSingleCarrier
     * @param anonymous688 $MaxConnections
     * @param anonymous689 $MaxStops
     * @param boolean $NonStopDirects
     * @param boolean $StopDirects
     * @param boolean $SingleOnlineCon
     * @param boolean $DoubleOnlineCon
     * @param boolean $TripleOnlineCon
     * @param boolean $SingleInterlineCon
     * @param boolean $DoubleInterlineCon
     * @param boolean $TripleInterlineCon
     */
    public function __construct($RequireSingleCarrier = null, $MaxConnections = null, $MaxStops = null, $NonStopDirects = null, $StopDirects = null, $SingleOnlineCon = null, $DoubleOnlineCon = null, $TripleOnlineCon = null, $SingleInterlineCon = null, $DoubleInterlineCon = null, $TripleInterlineCon = null)
    {
      $this->RequireSingleCarrier = $RequireSingleCarrier;
      $this->MaxConnections = $MaxConnections;
      $this->MaxStops = $MaxStops;
      $this->NonStopDirects = $NonStopDirects;
      $this->StopDirects = $StopDirects;
      $this->SingleOnlineCon = $SingleOnlineCon;
      $this->DoubleOnlineCon = $DoubleOnlineCon;
      $this->TripleOnlineCon = $TripleOnlineCon;
      $this->SingleInterlineCon = $SingleInterlineCon;
      $this->DoubleInterlineCon = $DoubleInterlineCon;
      $this->TripleInterlineCon = $TripleInterlineCon;
    }

    /**
     * @return boolean
     */
    public function getRequireSingleCarrier()
    {
      return $this->RequireSingleCarrier;
    }

    /**
     * @param boolean $RequireSingleCarrier
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setRequireSingleCarrier($RequireSingleCarrier)
    {
      $this->RequireSingleCarrier = $RequireSingleCarrier;
      return $this;
    }

    /**
     * @return anonymous688
     */
    public function getMaxConnections()
    {
      return $this->MaxConnections;
    }

    /**
     * @param anonymous688 $MaxConnections
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setMaxConnections($MaxConnections)
    {
      $this->MaxConnections = $MaxConnections;
      return $this;
    }

    /**
     * @return anonymous689
     */
    public function getMaxStops()
    {
      return $this->MaxStops;
    }

    /**
     * @param anonymous689 $MaxStops
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setMaxStops($MaxStops)
    {
      $this->MaxStops = $MaxStops;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonStopDirects()
    {
      return $this->NonStopDirects;
    }

    /**
     * @param boolean $NonStopDirects
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setNonStopDirects($NonStopDirects)
    {
      $this->NonStopDirects = $NonStopDirects;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStopDirects()
    {
      return $this->StopDirects;
    }

    /**
     * @param boolean $StopDirects
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setStopDirects($StopDirects)
    {
      $this->StopDirects = $StopDirects;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSingleOnlineCon()
    {
      return $this->SingleOnlineCon;
    }

    /**
     * @param boolean $SingleOnlineCon
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setSingleOnlineCon($SingleOnlineCon)
    {
      $this->SingleOnlineCon = $SingleOnlineCon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoubleOnlineCon()
    {
      return $this->DoubleOnlineCon;
    }

    /**
     * @param boolean $DoubleOnlineCon
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setDoubleOnlineCon($DoubleOnlineCon)
    {
      $this->DoubleOnlineCon = $DoubleOnlineCon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTripleOnlineCon()
    {
      return $this->TripleOnlineCon;
    }

    /**
     * @param boolean $TripleOnlineCon
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setTripleOnlineCon($TripleOnlineCon)
    {
      $this->TripleOnlineCon = $TripleOnlineCon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSingleInterlineCon()
    {
      return $this->SingleInterlineCon;
    }

    /**
     * @param boolean $SingleInterlineCon
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setSingleInterlineCon($SingleInterlineCon)
    {
      $this->SingleInterlineCon = $SingleInterlineCon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoubleInterlineCon()
    {
      return $this->DoubleInterlineCon;
    }

    /**
     * @param boolean $DoubleInterlineCon
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setDoubleInterlineCon($DoubleInterlineCon)
    {
      $this->DoubleInterlineCon = $DoubleInterlineCon;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTripleInterlineCon()
    {
      return $this->TripleInterlineCon;
    }

    /**
     * @param boolean $TripleInterlineCon
     * @return \FilippoToso\Travelport\Air\FlightType
     */
    public function setTripleInterlineCon($TripleInterlineCon)
    {
      $this->TripleInterlineCon = $TripleInterlineCon;
      return $this;
    }

}
