<?php

namespace FilippoToso\Travelport\UniversalRecord;

class OptionJourneyDetails
{

    /**
     * @var StringLength1to5 $PickUpLocation
     */
    protected $PickUpLocation = null;

    /**
     * @var time $PickUpTime
     */
    protected $PickUpTime = null;

    /**
     * @var StringLength1to30 $PickUpDescription
     */
    protected $PickUpDescription = null;

    /**
     * @var typeCarrier $PickUpCarrier
     */
    protected $PickUpCarrier = null;

    /**
     * @var typeFlightNumber $PickUpFlightNumber
     */
    protected $PickUpFlightNumber = null;

    /**
     * @var StringLength1to5 $ReturnLocation
     */
    protected $ReturnLocation = null;

    /**
     * @var time $ReturnTime
     */
    protected $ReturnTime = null;

    /**
     * @var StringLength1to30 $ReturnDescription
     */
    protected $ReturnDescription = null;

    /**
     * @var typeCarrier $ReturnCarrier
     */
    protected $ReturnCarrier = null;

    /**
     * @var typeFlightNumber $ReturnFlightNumber
     */
    protected $ReturnFlightNumber = null;

    /**
     * @param StringLength1to5 $PickUpLocation
     * @param time $PickUpTime
     * @param StringLength1to30 $PickUpDescription
     * @param typeCarrier $PickUpCarrier
     * @param typeFlightNumber $PickUpFlightNumber
     * @param StringLength1to5 $ReturnLocation
     * @param time $ReturnTime
     * @param StringLength1to30 $ReturnDescription
     * @param typeCarrier $ReturnCarrier
     * @param typeFlightNumber $ReturnFlightNumber
     */
    public function __construct($PickUpLocation = null, $PickUpTime = null, $PickUpDescription = null, $PickUpCarrier = null, $PickUpFlightNumber = null, $ReturnLocation = null, $ReturnTime = null, $ReturnDescription = null, $ReturnCarrier = null, $ReturnFlightNumber = null)
    {
      $this->PickUpLocation = $PickUpLocation;
      $this->PickUpTime = $PickUpTime;
      $this->PickUpDescription = $PickUpDescription;
      $this->PickUpCarrier = $PickUpCarrier;
      $this->PickUpFlightNumber = $PickUpFlightNumber;
      $this->ReturnLocation = $ReturnLocation;
      $this->ReturnTime = $ReturnTime;
      $this->ReturnDescription = $ReturnDescription;
      $this->ReturnCarrier = $ReturnCarrier;
      $this->ReturnFlightNumber = $ReturnFlightNumber;
    }

    /**
     * @return StringLength1to5
     */
    public function getPickUpLocation()
    {
      return $this->PickUpLocation;
    }

    /**
     * @param StringLength1to5 $PickUpLocation
     * @return \FilippoToso\Travelport\UniversalRecord\OptionJourneyDetails
     */
    public function setPickUpLocation($PickUpLocation)
    {
      $this->PickUpLocation = $PickUpLocation;
      return $this;
    }

    /**
     * @return time
     */
    public function getPickUpTime()
    {
      return $this->PickUpTime;
    }

    /**
     * @param time $PickUpTime
     * @return \FilippoToso\Travelport\UniversalRecord\OptionJourneyDetails
     */
    public function setPickUpTime($PickUpTime)
    {
      $this->PickUpTime = $PickUpTime;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getPickUpDescription()
    {
      return $this->PickUpDescription;
    }

    /**
     * @param StringLength1to30 $PickUpDescription
     * @return \FilippoToso\Travelport\UniversalRecord\OptionJourneyDetails
     */
    public function setPickUpDescription($PickUpDescription)
    {
      $this->PickUpDescription = $PickUpDescription;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getPickUpCarrier()
    {
      return $this->PickUpCarrier;
    }

    /**
     * @param typeCarrier $PickUpCarrier
     * @return \FilippoToso\Travelport\UniversalRecord\OptionJourneyDetails
     */
    public function setPickUpCarrier($PickUpCarrier)
    {
      $this->PickUpCarrier = $PickUpCarrier;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getPickUpFlightNumber()
    {
      return $this->PickUpFlightNumber;
    }

    /**
     * @param typeFlightNumber $PickUpFlightNumber
     * @return \FilippoToso\Travelport\UniversalRecord\OptionJourneyDetails
     */
    public function setPickUpFlightNumber($PickUpFlightNumber)
    {
      $this->PickUpFlightNumber = $PickUpFlightNumber;
      return $this;
    }

    /**
     * @return StringLength1to5
     */
    public function getReturnLocation()
    {
      return $this->ReturnLocation;
    }

    /**
     * @param StringLength1to5 $ReturnLocation
     * @return \FilippoToso\Travelport\UniversalRecord\OptionJourneyDetails
     */
    public function setReturnLocation($ReturnLocation)
    {
      $this->ReturnLocation = $ReturnLocation;
      return $this;
    }

    /**
     * @return time
     */
    public function getReturnTime()
    {
      return $this->ReturnTime;
    }

    /**
     * @param time $ReturnTime
     * @return \FilippoToso\Travelport\UniversalRecord\OptionJourneyDetails
     */
    public function setReturnTime($ReturnTime)
    {
      $this->ReturnTime = $ReturnTime;
      return $this;
    }

    /**
     * @return StringLength1to30
     */
    public function getReturnDescription()
    {
      return $this->ReturnDescription;
    }

    /**
     * @param StringLength1to30 $ReturnDescription
     * @return \FilippoToso\Travelport\UniversalRecord\OptionJourneyDetails
     */
    public function setReturnDescription($ReturnDescription)
    {
      $this->ReturnDescription = $ReturnDescription;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getReturnCarrier()
    {
      return $this->ReturnCarrier;
    }

    /**
     * @param typeCarrier $ReturnCarrier
     * @return \FilippoToso\Travelport\UniversalRecord\OptionJourneyDetails
     */
    public function setReturnCarrier($ReturnCarrier)
    {
      $this->ReturnCarrier = $ReturnCarrier;
      return $this;
    }

    /**
     * @return typeFlightNumber
     */
    public function getReturnFlightNumber()
    {
      return $this->ReturnFlightNumber;
    }

    /**
     * @param typeFlightNumber $ReturnFlightNumber
     * @return \FilippoToso\Travelport\UniversalRecord\OptionJourneyDetails
     */
    public function setReturnFlightNumber($ReturnFlightNumber)
    {
      $this->ReturnFlightNumber = $ReturnFlightNumber;
      return $this;
    }

}
