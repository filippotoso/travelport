<?php

namespace FilippoToso\Travelport\Rail;

class RailReservationCriteria
{

    /**
     * @var typeDateSpec $JourneyDepartureDate
     */
    protected $JourneyDepartureDate = null;

    /**
     * @var typeDateSpec $JourneyArrivalDate
     */
    protected $JourneyArrivalDate = null;

    /**
     * @var typeDateSpec $SegmentDepartureDate
     */
    protected $SegmentDepartureDate = null;

    /**
     * @var typeDateSpec $SegmentArrivalDate
     */
    protected $SegmentArrivalDate = null;

    /**
     * @var typeIATACode $JourneyOrigin
     */
    protected $JourneyOrigin = null;

    /**
     * @var typeIATACode $JourneyDestination
     */
    protected $JourneyDestination = null;

    /**
     * @var typeRailLocationCode $JourneyRailLocOrigin
     */
    protected $JourneyRailLocOrigin = null;

    /**
     * @var typeRailLocationCode $JourneyRailLocDestination
     */
    protected $JourneyRailLocDestination = null;

    /**
     * @var string $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var string $TrainNumber
     */
    protected $TrainNumber = null;

    /**
     * @var boolean $PassiveOnly
     */
    protected $PassiveOnly = null;

    /**
     * @param typeIATACode $JourneyOrigin
     * @param typeIATACode $JourneyDestination
     * @param typeRailLocationCode $JourneyRailLocOrigin
     * @param typeRailLocationCode $JourneyRailLocDestination
     * @param string $SupplierCode
     * @param string $TrainNumber
     * @param boolean $PassiveOnly
     */
    public function __construct($JourneyOrigin = null, $JourneyDestination = null, $JourneyRailLocOrigin = null, $JourneyRailLocDestination = null, $SupplierCode = null, $TrainNumber = null, $PassiveOnly = null)
    {
      $this->JourneyOrigin = $JourneyOrigin;
      $this->JourneyDestination = $JourneyDestination;
      $this->JourneyRailLocOrigin = $JourneyRailLocOrigin;
      $this->JourneyRailLocDestination = $JourneyRailLocDestination;
      $this->SupplierCode = $SupplierCode;
      $this->TrainNumber = $TrainNumber;
      $this->PassiveOnly = $PassiveOnly;
    }

    /**
     * @return typeDateSpec
     */
    public function getJourneyDepartureDate()
    {
      return $this->JourneyDepartureDate;
    }

    /**
     * @param typeDateSpec $JourneyDepartureDate
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setJourneyDepartureDate($JourneyDepartureDate)
    {
      $this->JourneyDepartureDate = $JourneyDepartureDate;
      return $this;
    }

    /**
     * @return typeDateSpec
     */
    public function getJourneyArrivalDate()
    {
      return $this->JourneyArrivalDate;
    }

    /**
     * @param typeDateSpec $JourneyArrivalDate
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setJourneyArrivalDate($JourneyArrivalDate)
    {
      $this->JourneyArrivalDate = $JourneyArrivalDate;
      return $this;
    }

    /**
     * @return typeDateSpec
     */
    public function getSegmentDepartureDate()
    {
      return $this->SegmentDepartureDate;
    }

    /**
     * @param typeDateSpec $SegmentDepartureDate
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setSegmentDepartureDate($SegmentDepartureDate)
    {
      $this->SegmentDepartureDate = $SegmentDepartureDate;
      return $this;
    }

    /**
     * @return typeDateSpec
     */
    public function getSegmentArrivalDate()
    {
      return $this->SegmentArrivalDate;
    }

    /**
     * @param typeDateSpec $SegmentArrivalDate
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setSegmentArrivalDate($SegmentArrivalDate)
    {
      $this->SegmentArrivalDate = $SegmentArrivalDate;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getJourneyOrigin()
    {
      return $this->JourneyOrigin;
    }

    /**
     * @param typeIATACode $JourneyOrigin
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setJourneyOrigin($JourneyOrigin)
    {
      $this->JourneyOrigin = $JourneyOrigin;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getJourneyDestination()
    {
      return $this->JourneyDestination;
    }

    /**
     * @param typeIATACode $JourneyDestination
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setJourneyDestination($JourneyDestination)
    {
      $this->JourneyDestination = $JourneyDestination;
      return $this;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getJourneyRailLocOrigin()
    {
      return $this->JourneyRailLocOrigin;
    }

    /**
     * @param typeRailLocationCode $JourneyRailLocOrigin
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setJourneyRailLocOrigin($JourneyRailLocOrigin)
    {
      $this->JourneyRailLocOrigin = $JourneyRailLocOrigin;
      return $this;
    }

    /**
     * @return typeRailLocationCode
     */
    public function getJourneyRailLocDestination()
    {
      return $this->JourneyRailLocDestination;
    }

    /**
     * @param typeRailLocationCode $JourneyRailLocDestination
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setJourneyRailLocDestination($JourneyRailLocDestination)
    {
      $this->JourneyRailLocDestination = $JourneyRailLocDestination;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrainNumber()
    {
      return $this->TrainNumber;
    }

    /**
     * @param string $TrainNumber
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setTrainNumber($TrainNumber)
    {
      $this->TrainNumber = $TrainNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassiveOnly()
    {
      return $this->PassiveOnly;
    }

    /**
     * @param boolean $PassiveOnly
     * @return \FilippoToso\Travelport\Rail\RailReservationCriteria
     */
    public function setPassiveOnly($PassiveOnly)
    {
      $this->PassiveOnly = $PassiveOnly;
      return $this;
    }

}
