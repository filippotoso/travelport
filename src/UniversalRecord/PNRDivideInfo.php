<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PNRDivideInfo
{

    /**
     * @var BookingTravelerName $BookingTravelerName
     */
    protected $BookingTravelerName = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @param BookingTravelerName $BookingTravelerName
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     */
    public function __construct($BookingTravelerName = null, $ProviderCode = null, $ProviderLocatorCode = null)
    {
      $this->BookingTravelerName = $BookingTravelerName;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
    }

    /**
     * @return BookingTravelerName
     */
    public function getBookingTravelerName()
    {
      return $this->BookingTravelerName;
    }

    /**
     * @param BookingTravelerName $BookingTravelerName
     * @return \FilippoToso\Travelport\UniversalRecord\PNRDivideInfo
     */
    public function setBookingTravelerName($BookingTravelerName)
    {
      $this->BookingTravelerName = $BookingTravelerName;
      return $this;
    }

    /**
     * @return typeProviderCode
     */
    public function getProviderCode()
    {
      return $this->ProviderCode;
    }

    /**
     * @param typeProviderCode $ProviderCode
     * @return \FilippoToso\Travelport\UniversalRecord\PNRDivideInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeProviderLocatorCode
     */
    public function getProviderLocatorCode()
    {
      return $this->ProviderLocatorCode;
    }

    /**
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\PNRDivideInfo
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
