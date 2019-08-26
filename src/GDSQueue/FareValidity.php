<?php

namespace FilippoToso\Travelport\GDSQueue;

class FareValidity
{

    /**
     * @var typeRef $RailJourneyRef
     */
    protected $RailJourneyRef = null;

    /**
     * @var date $NotValidBefore
     */
    protected $NotValidBefore = null;

    /**
     * @var date $NotValidAfter
     */
    protected $NotValidAfter = null;

    /**
     * @param typeRef $RailJourneyRef
     * @param date $NotValidBefore
     * @param date $NotValidAfter
     */
    public function __construct($RailJourneyRef, $NotValidBefore, $NotValidAfter)
    {
      $this->RailJourneyRef = $RailJourneyRef;
      $this->NotValidBefore = $NotValidBefore;
      $this->NotValidAfter = $NotValidAfter;
    }

    /**
     * @return typeRef
     */
    public function getRailJourneyRef()
    {
      return $this->RailJourneyRef;
    }

    /**
     * @param typeRef $RailJourneyRef
     * @return \FilippoToso\Travelport\GDSQueue\FareValidity
     */
    public function setRailJourneyRef($RailJourneyRef)
    {
      $this->RailJourneyRef = $RailJourneyRef;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidBefore()
    {
      return $this->NotValidBefore;
    }

    /**
     * @param date $NotValidBefore
     * @return \FilippoToso\Travelport\GDSQueue\FareValidity
     */
    public function setNotValidBefore($NotValidBefore)
    {
      $this->NotValidBefore = $NotValidBefore;
      return $this;
    }

    /**
     * @return date
     */
    public function getNotValidAfter()
    {
      return $this->NotValidAfter;
    }

    /**
     * @param date $NotValidAfter
     * @return \FilippoToso\Travelport\GDSQueue\FareValidity
     */
    public function setNotValidAfter($NotValidAfter)
    {
      $this->NotValidAfter = $NotValidAfter;
      return $this;
    }

}
