<?php

namespace FilippoToso\Travelport\Air;

class RailBookingInfo
{

    /**
     * @var typeRef $RailFareRef
     */
    protected $RailFareRef = null;

    /**
     * @var typeRef $RailJourneyRef
     */
    protected $RailJourneyRef = null;

    /**
     * @var boolean $OptionalService
     */
    protected $OptionalService = null;

    /**
     * @param typeRef $RailFareRef
     * @param typeRef $RailJourneyRef
     * @param boolean $OptionalService
     */
    public function __construct($RailFareRef = null, $RailJourneyRef = null, $OptionalService = null)
    {
      $this->RailFareRef = $RailFareRef;
      $this->RailJourneyRef = $RailJourneyRef;
      $this->OptionalService = $OptionalService;
    }

    /**
     * @return typeRef
     */
    public function getRailFareRef()
    {
      return $this->RailFareRef;
    }

    /**
     * @param typeRef $RailFareRef
     * @return \FilippoToso\Travelport\Air\RailBookingInfo
     */
    public function setRailFareRef($RailFareRef)
    {
      $this->RailFareRef = $RailFareRef;
      return $this;
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
     * @return \FilippoToso\Travelport\Air\RailBookingInfo
     */
    public function setRailJourneyRef($RailJourneyRef)
    {
      $this->RailJourneyRef = $RailJourneyRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOptionalService()
    {
      return $this->OptionalService;
    }

    /**
     * @param boolean $OptionalService
     * @return \FilippoToso\Travelport\Air\RailBookingInfo
     */
    public function setOptionalService($OptionalService)
    {
      $this->OptionalService = $OptionalService;
      return $this;
    }

}
