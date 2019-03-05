<?php

namespace FilippoToso\Travelport\Air;

class AirReservationSelector
{

    /**
     * @var FareInfoRef $FareInfoRef
     */
    protected $FareInfoRef = null;

    /**
     * @var typeLocatorCode $AirReservationLocatorCode
     */
    protected $AirReservationLocatorCode = null;

    /**
     * @param FareInfoRef $FareInfoRef
     * @param typeLocatorCode $AirReservationLocatorCode
     */
    public function __construct($FareInfoRef = null, $AirReservationLocatorCode = null)
    {
      $this->FareInfoRef = $FareInfoRef;
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
    }

    /**
     * @return FareInfoRef
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param FareInfoRef $FareInfoRef
     * @return \FilippoToso\Travelport\Air\AirReservationSelector
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getAirReservationLocatorCode()
    {
      return $this->AirReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $AirReservationLocatorCode
     * @return \FilippoToso\Travelport\Air\AirReservationSelector
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      return $this;
    }

}
