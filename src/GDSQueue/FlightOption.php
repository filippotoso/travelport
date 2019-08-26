<?php

namespace FilippoToso\Travelport\GDSQueue;

class FlightOption
{

    /**
     * @var Option $Option
     */
    protected $Option = null;

    /**
     * @var typeRef $LegRef
     */
    protected $LegRef = null;

    /**
     * @var typeIATACode $Origin
     */
    protected $Origin = null;

    /**
     * @var typeIATACode $Destination
     */
    protected $Destination = null;

    /**
     * @param Option $Option
     * @param typeRef $LegRef
     * @param typeIATACode $Origin
     * @param typeIATACode $Destination
     */
    public function __construct($Option, $LegRef, $Origin, $Destination)
    {
      $this->Option = $Option;
      $this->LegRef = $LegRef;
      $this->Origin = $Origin;
      $this->Destination = $Destination;
    }

    /**
     * @return Option
     */
    public function getOption()
    {
      return $this->Option;
    }

    /**
     * @param Option $Option
     * @return \FilippoToso\Travelport\GDSQueue\FlightOption
     */
    public function setOption($Option)
    {
      $this->Option = $Option;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getLegRef()
    {
      return $this->LegRef;
    }

    /**
     * @param typeRef $LegRef
     * @return \FilippoToso\Travelport\GDSQueue\FlightOption
     */
    public function setLegRef($LegRef)
    {
      $this->LegRef = $LegRef;
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
     * @return \FilippoToso\Travelport\GDSQueue\FlightOption
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
     * @return \FilippoToso\Travelport\GDSQueue\FlightOption
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

}
