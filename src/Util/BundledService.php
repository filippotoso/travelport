<?php

namespace FilippoToso\Travelport\Util;

class BundledService
{

    /**
     * @var typeCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var boolean $CarrierSubCode
     */
    protected $CarrierSubCode = null;

    /**
     * @var string $ServiceType
     */
    protected $ServiceType = null;

    /**
     * @var string $ServiceSubCode
     */
    protected $ServiceSubCode = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var anonymous841 $Booking
     */
    protected $Booking = null;

    /**
     * @var int $Occurrence
     */
    protected $Occurrence = null;

    /**
     * @param typeCarrier $Carrier
     * @param boolean $CarrierSubCode
     * @param string $ServiceType
     * @param string $ServiceSubCode
     * @param string $Name
     * @param anonymous841 $Booking
     * @param int $Occurrence
     */
    public function __construct($Carrier = null, $CarrierSubCode = null, $ServiceType = null, $ServiceSubCode = null, $Name = null, $Booking = null, $Occurrence = null)
    {
      $this->Carrier = $Carrier;
      $this->CarrierSubCode = $CarrierSubCode;
      $this->ServiceType = $ServiceType;
      $this->ServiceSubCode = $ServiceSubCode;
      $this->Name = $Name;
      $this->Booking = $Booking;
      $this->Occurrence = $Occurrence;
    }

    /**
     * @return typeCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param typeCarrier $Carrier
     * @return \FilippoToso\Travelport\Util\BundledService
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCarrierSubCode()
    {
      return $this->CarrierSubCode;
    }

    /**
     * @param boolean $CarrierSubCode
     * @return \FilippoToso\Travelport\Util\BundledService
     */
    public function setCarrierSubCode($CarrierSubCode)
    {
      $this->CarrierSubCode = $CarrierSubCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
      return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     * @return \FilippoToso\Travelport\Util\BundledService
     */
    public function setServiceType($ServiceType)
    {
      $this->ServiceType = $ServiceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceSubCode()
    {
      return $this->ServiceSubCode;
    }

    /**
     * @param string $ServiceSubCode
     * @return \FilippoToso\Travelport\Util\BundledService
     */
    public function setServiceSubCode($ServiceSubCode)
    {
      $this->ServiceSubCode = $ServiceSubCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FilippoToso\Travelport\Util\BundledService
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return anonymous841
     */
    public function getBooking()
    {
      return $this->Booking;
    }

    /**
     * @param anonymous841 $Booking
     * @return \FilippoToso\Travelport\Util\BundledService
     */
    public function setBooking($Booking)
    {
      $this->Booking = $Booking;
      return $this;
    }

    /**
     * @return int
     */
    public function getOccurrence()
    {
      return $this->Occurrence;
    }

    /**
     * @param int $Occurrence
     * @return \FilippoToso\Travelport\Util\BundledService
     */
    public function setOccurrence($Occurrence)
    {
      $this->Occurrence = $Occurrence;
      return $this;
    }

}
