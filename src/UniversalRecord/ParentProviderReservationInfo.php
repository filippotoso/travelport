<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ParentProviderReservationInfo extends PNRDivideInfo
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
    public function __construct($BookingTravelerName, $ProviderCode, $ProviderLocatorCode, $UniversalLocatorCode)
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
     * @return \FilippoToso\Travelport\UniversalRecord\ParentProviderReservationInfo
     */
    public function setUniversalLocatorCode($UniversalLocatorCode)
    {
      $this->UniversalLocatorCode = $UniversalLocatorCode;
      return $this;
    }

}
