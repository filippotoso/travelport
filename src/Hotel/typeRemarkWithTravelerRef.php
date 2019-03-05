<?php

namespace FilippoToso\Travelport\Hotel;

class typeRemarkWithTravelerRef
{

    /**
     * @var string $RemarkData
     */
    protected $RemarkData = null;

    /**
     * @var typeRef[] $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @param string $RemarkData
     * @param typeRef $ProviderReservationInfoRef
     * @param typeProviderCode $ProviderCode
     */
    public function __construct($RemarkData = null, $ProviderReservationInfoRef = null, $ProviderCode = null)
    {
      $this->RemarkData = $RemarkData;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->ProviderCode = $ProviderCode;
    }

    /**
     * @return string
     */
    public function getRemarkData()
    {
      return $this->RemarkData;
    }

    /**
     * @param string $RemarkData
     * @return \FilippoToso\Travelport\Hotel\typeRemarkWithTravelerRef
     */
    public function setRemarkData($RemarkData)
    {
      $this->RemarkData = $RemarkData;
      return $this;
    }

    /**
     * @return typeRef[]
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef[] $BookingTravelerRef
     * @return \FilippoToso\Travelport\Hotel\typeRemarkWithTravelerRef
     */
    public function setBookingTravelerRef(array $BookingTravelerRef = null)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getProviderReservationInfoRef()
    {
      return $this->ProviderReservationInfoRef;
    }

    /**
     * @param typeRef $ProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Hotel\typeRemarkWithTravelerRef
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
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
     * @return \FilippoToso\Travelport\Hotel\typeRemarkWithTravelerRef
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

}
