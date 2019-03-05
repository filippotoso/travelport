<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ChildProviderReservationInfo extends PNRDivideInfo
{

    /**
     * @var typeLocatorCode $UniversalLocatorCode
     */
    protected $UniversalLocatorCode = null;

    /**
     * @param BookingTravelerName $BookingTravelerName
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     * @param typeLocatorCode $UniversalLocatorCode
     */
    public function __construct($BookingTravelerName = null, $ProviderCode = null, $ProviderLocatorCode = null, $UniversalLocatorCode = null)
    {
      parent::__construct($BookingTravelerName, $ProviderCode, $ProviderLocatorCode);
      $this->UniversalLocatorCode = $UniversalLocatorCode;
    }

    /**
     * @return typeLocatorCode
     */
    public function getUniversalLocatorCode()
    {
      return $this->UniversalLocatorCode;
    }

    /**
     * @param typeLocatorCode $UniversalLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\ChildProviderReservationInfo
     */
    public function setUniversalLocatorCode($UniversalLocatorCode)
    {
      $this->UniversalLocatorCode = $UniversalLocatorCode;
      return $this;
    }

}
