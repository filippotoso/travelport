<?php

namespace FilippoToso\Travelport\UniversalRecord;

class DestinationPurposeCode
{

    /**
     * @var typeDestinationCode $Destination
     */
    protected $Destination = null;

    /**
     * @var typePurposeCode $Purpose
     */
    protected $Purpose = null;

    /**
     * @param typeDestinationCode $Destination
     * @param typePurposeCode $Purpose
     */
    public function __construct($Destination = null, $Purpose = null)
    {
      $this->Destination = $Destination;
      $this->Purpose = $Purpose;
    }

    /**
     * @return typeDestinationCode
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param typeDestinationCode $Destination
     * @return \FilippoToso\Travelport\UniversalRecord\DestinationPurposeCode
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return typePurposeCode
     */
    public function getPurpose()
    {
      return $this->Purpose;
    }

    /**
     * @param typePurposeCode $Purpose
     * @return \FilippoToso\Travelport\UniversalRecord\DestinationPurposeCode
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
      return $this;
    }

}
