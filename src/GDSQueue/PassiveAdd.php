<?php

namespace FilippoToso\Travelport\GDSQueue;

class PassiveAdd
{

    /**
     * @var PassiveSegment $PassiveSegment
     */
    protected $PassiveSegment = null;

    /**
     * @var PassiveRemark $PassiveRemark
     */
    protected $PassiveRemark = null;

    /**
     * @var AssociatedRemark $AssociatedRemark
     */
    protected $AssociatedRemark = null;

    /**
     * @var SupplierLocator $SupplierLocator
     */
    protected $SupplierLocator = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    protected $ThirdPartyInformation = null;

    /**
     * @var TravelComplianceData $TravelComplianceData
     */
    protected $TravelComplianceData = null;

    /**
     * @var typeLocatorCode $ReservationLocatorCode
     */
    protected $ReservationLocatorCode = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @param PassiveSegment $PassiveSegment
     * @param PassiveRemark $PassiveRemark
     * @param AssociatedRemark $AssociatedRemark
     * @param SupplierLocator $SupplierLocator
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param TravelComplianceData $TravelComplianceData
     * @param typeLocatorCode $ReservationLocatorCode
     * @param typeRef $BookingTravelerRef
     */
    public function __construct($PassiveSegment = null, $PassiveRemark = null, $AssociatedRemark = null, $SupplierLocator = null, $ThirdPartyInformation = null, $TravelComplianceData = null, $ReservationLocatorCode = null, $BookingTravelerRef = null)
    {
      $this->PassiveSegment = $PassiveSegment;
      $this->PassiveRemark = $PassiveRemark;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->SupplierLocator = $SupplierLocator;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->TravelComplianceData = $TravelComplianceData;
      $this->ReservationLocatorCode = $ReservationLocatorCode;
      $this->BookingTravelerRef = $BookingTravelerRef;
    }

    /**
     * @return PassiveSegment
     */
    public function getPassiveSegment()
    {
      return $this->PassiveSegment;
    }

    /**
     * @param PassiveSegment $PassiveSegment
     * @return \FilippoToso\Travelport\GDSQueue\PassiveAdd
     */
    public function setPassiveSegment($PassiveSegment)
    {
      $this->PassiveSegment = $PassiveSegment;
      return $this;
    }

    /**
     * @return PassiveRemark
     */
    public function getPassiveRemark()
    {
      return $this->PassiveRemark;
    }

    /**
     * @param PassiveRemark $PassiveRemark
     * @return \FilippoToso\Travelport\GDSQueue\PassiveAdd
     */
    public function setPassiveRemark($PassiveRemark)
    {
      $this->PassiveRemark = $PassiveRemark;
      return $this;
    }

    /**
     * @return AssociatedRemark
     */
    public function getAssociatedRemark()
    {
      return $this->AssociatedRemark;
    }

    /**
     * @param AssociatedRemark $AssociatedRemark
     * @return \FilippoToso\Travelport\GDSQueue\PassiveAdd
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
      return $this;
    }

    /**
     * @return SupplierLocator
     */
    public function getSupplierLocator()
    {
      return $this->SupplierLocator;
    }

    /**
     * @param SupplierLocator $SupplierLocator
     * @return \FilippoToso\Travelport\GDSQueue\PassiveAdd
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
      return $this;
    }

    /**
     * @return ThirdPartyInformation
     */
    public function getThirdPartyInformation()
    {
      return $this->ThirdPartyInformation;
    }

    /**
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @return \FilippoToso\Travelport\GDSQueue\PassiveAdd
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return TravelComplianceData
     */
    public function getTravelComplianceData()
    {
      return $this->TravelComplianceData;
    }

    /**
     * @param TravelComplianceData $TravelComplianceData
     * @return \FilippoToso\Travelport\GDSQueue\PassiveAdd
     */
    public function setTravelComplianceData($TravelComplianceData)
    {
      $this->TravelComplianceData = $TravelComplianceData;
      return $this;
    }

    /**
     * @return typeLocatorCode
     */
    public function getReservationLocatorCode()
    {
      return $this->ReservationLocatorCode;
    }

    /**
     * @param typeLocatorCode $ReservationLocatorCode
     * @return \FilippoToso\Travelport\GDSQueue\PassiveAdd
     */
    public function setReservationLocatorCode($ReservationLocatorCode)
    {
      $this->ReservationLocatorCode = $ReservationLocatorCode;
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
     * @return \FilippoToso\Travelport\GDSQueue\PassiveAdd
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

}
