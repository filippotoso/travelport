<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AirAvailInfo
{

    /**
     * @var BookingCodeInfo $BookingCodeInfo
     */
    protected $BookingCodeInfo = null;

    /**
     * @var FareTokenInfo[] $FareTokenInfo
     */
    protected $FareTokenInfo = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var string $HostTokenRef
     */
    protected $HostTokenRef = null;

    /**
     * @param BookingCodeInfo $BookingCodeInfo
     * @param typeProviderCode $ProviderCode
     * @param string $HostTokenRef
     */
    public function __construct($BookingCodeInfo = null, $ProviderCode = null, $HostTokenRef = null)
    {
      $this->BookingCodeInfo = $BookingCodeInfo;
      $this->ProviderCode = $ProviderCode;
      $this->HostTokenRef = $HostTokenRef;
    }

    /**
     * @return BookingCodeInfo
     */
    public function getBookingCodeInfo()
    {
      return $this->BookingCodeInfo;
    }

    /**
     * @param BookingCodeInfo $BookingCodeInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirAvailInfo
     */
    public function setBookingCodeInfo($BookingCodeInfo)
    {
      $this->BookingCodeInfo = $BookingCodeInfo;
      return $this;
    }

    /**
     * @return FareTokenInfo[]
     */
    public function getFareTokenInfo()
    {
      return $this->FareTokenInfo;
    }

    /**
     * @param FareTokenInfo[] $FareTokenInfo
     * @return \FilippoToso\Travelport\UniversalRecord\AirAvailInfo
     */
    public function setFareTokenInfo(array $FareTokenInfo = null)
    {
      $this->FareTokenInfo = $FareTokenInfo;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AirAvailInfo
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getHostTokenRef()
    {
      return $this->HostTokenRef;
    }

    /**
     * @param string $HostTokenRef
     * @return \FilippoToso\Travelport\UniversalRecord\AirAvailInfo
     */
    public function setHostTokenRef($HostTokenRef)
    {
      $this->HostTokenRef = $HostTokenRef;
      return $this;
    }

}
