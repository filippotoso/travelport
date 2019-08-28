<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ServiceData
{

    /**
     * @var SeatAttributes $SeatAttributes
     */
    protected $SeatAttributes = null;

    /**
     * @var CabinClass $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var typeKeyBasedReference[] $SSRRef
     */
    protected $SSRRef = null;

    /**
     * @var string $Data
     */
    protected $Data = null;

    /**
     * @var typeRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var boolean $StopOver
     */
    protected $StopOver = null;

    /**
     * @var typePTC $TravelerType
     */
    protected $TravelerType = null;

    /**
     * @var typeRef $EMDSummaryRef
     */
    protected $EMDSummaryRef = null;

    /**
     * @var typeRef $EMDCouponRef
     */
    protected $EMDCouponRef = null;

    /**
     * @param SeatAttributes $SeatAttributes
     * @param CabinClass $CabinClass
     * @param string $Data
     * @param typeRef $AirSegmentRef
     * @param typeRef $BookingTravelerRef
     * @param boolean $StopOver
     * @param typePTC $TravelerType
     * @param typeRef $EMDSummaryRef
     * @param typeRef $EMDCouponRef
     */
    public function __construct($SeatAttributes = null, $CabinClass = null, $Data = null, $AirSegmentRef = null, $BookingTravelerRef = null, $StopOver = null, $TravelerType = null, $EMDSummaryRef = null, $EMDCouponRef = null)
    {
      $this->SeatAttributes = $SeatAttributes;
      $this->CabinClass = $CabinClass;
      $this->Data = $Data;
      $this->AirSegmentRef = $AirSegmentRef;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->StopOver = $StopOver;
      $this->TravelerType = $TravelerType;
      $this->EMDSummaryRef = $EMDSummaryRef;
      $this->EMDCouponRef = $EMDCouponRef;
    }

    /**
     * @return SeatAttributes
     */
    public function getSeatAttributes()
    {
      return $this->SeatAttributes;
    }

    /**
     * @param SeatAttributes $SeatAttributes
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceData
     */
    public function setSeatAttributes($SeatAttributes)
    {
      $this->SeatAttributes = $SeatAttributes;
      return $this;
    }

    /**
     * @return CabinClass
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param CabinClass $CabinClass
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceData
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return typeKeyBasedReference[]
     */
    public function getSSRRef()
    {
      return $this->SSRRef;
    }

    /**
     * @param typeKeyBasedReference[] $SSRRef
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceData
     */
    public function setSSRRef(array $SSRRef = null)
    {
      $this->SSRRef = $SSRRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
      return $this->Data;
    }

    /**
     * @param string $Data
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceData
     */
    public function setData($Data)
    {
      $this->Data = $Data;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param typeRef $AirSegmentRef
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceData
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param typeRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceData
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStopOver()
    {
      return $this->StopOver;
    }

    /**
     * @param boolean $StopOver
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceData
     */
    public function setStopOver($StopOver)
    {
      $this->StopOver = $StopOver;
      return $this;
    }

    /**
     * @return typePTC
     */
    public function getTravelerType()
    {
      return $this->TravelerType;
    }

    /**
     * @param typePTC $TravelerType
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceData
     */
    public function setTravelerType($TravelerType)
    {
      $this->TravelerType = $TravelerType;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getEMDSummaryRef()
    {
      return $this->EMDSummaryRef;
    }

    /**
     * @param typeRef $EMDSummaryRef
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceData
     */
    public function setEMDSummaryRef($EMDSummaryRef)
    {
      $this->EMDSummaryRef = $EMDSummaryRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getEMDCouponRef()
    {
      return $this->EMDCouponRef;
    }

    /**
     * @param typeRef $EMDCouponRef
     * @return \FilippoToso\Travelport\UniversalRecord\ServiceData
     */
    public function setEMDCouponRef($EMDCouponRef)
    {
      $this->EMDCouponRef = $EMDCouponRef;
      return $this;
    }

}
