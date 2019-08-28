<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeNonAirReservationRef
{

    /**
     * @var typeLocatorCode $LocatorCode
     */
    protected $LocatorCode = null;

    /**
     * @param typeLocatorCode $LocatorCode
     */
    public function __construct($LocatorCode = null)
    {
      $this->LocatorCode = $LocatorCode;
    }

    /**
     * @return typeLocatorCode
     */
    public function getLocatorCode()
    {
      return $this->LocatorCode;
    }

    /**
     * @param typeLocatorCode $LocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\typeNonAirReservationRef
     */
    public function setLocatorCode($LocatorCode)
    {
      $this->LocatorCode = $LocatorCode;
      return $this;
    }

}
