<?php

namespace FilippoToso\Travelport\Rail;

class PassiveReservation extends BaseReservation
{

    /**
     * @var SupplierLocator $SupplierLocator
     */
    protected $SupplierLocator = null;

    /**
     * @var ThirdPartyInformation $ThirdPartyInformation
     */
    protected $ThirdPartyInformation = null;

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

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
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param Restriction $Restriction
     * @param PassiveInfo $PassiveInfo
     * @param typeLocatorCode $LocatorCode
     * @param string $CreateDate
     * @param string $ModifiedDate
     * @param string $CustomerNumber
     * @param SupplierLocator $SupplierLocator
     * @param ThirdPartyInformation $ThirdPartyInformation
     * @param BookingTravelerRef $BookingTravelerRef
     * @param PassiveSegment $PassiveSegment
     * @param PassiveRemark $PassiveRemark
     * @param AssociatedRemark $AssociatedRemark
     * @param typeRef $ProviderReservationInfoRef
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $Restriction = null, $PassiveInfo = null, $LocatorCode = null, $CreateDate = null, $ModifiedDate = null, $CustomerNumber = null, $SupplierLocator = null, $ThirdPartyInformation = null, $BookingTravelerRef = null, $PassiveSegment = null, $PassiveRemark = null, $AssociatedRemark = null, $ProviderReservationInfoRef = null)
    {
      parent::__construct($AccountingRemark, $GeneralRemark, $Restriction, $PassiveInfo, $LocatorCode, $CreateDate, $ModifiedDate, $CustomerNumber);
      $this->SupplierLocator = $SupplierLocator;
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->PassiveSegment = $PassiveSegment;
      $this->PassiveRemark = $PassiveRemark;
      $this->AssociatedRemark = $AssociatedRemark;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
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
     * @return \FilippoToso\Travelport\Rail\PassiveReservation
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
     * @return \FilippoToso\Travelport\Rail\PassiveReservation
     */
    public function setThirdPartyInformation($ThirdPartyInformation)
    {
      $this->ThirdPartyInformation = $ThirdPartyInformation;
      return $this;
    }

    /**
     * @return BookingTravelerRef
     */
    public function getBookingTravelerRef()
    {
      return $this->BookingTravelerRef;
    }

    /**
     * @param BookingTravelerRef $BookingTravelerRef
     * @return \FilippoToso\Travelport\Rail\PassiveReservation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\PassiveReservation
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
     * @return \FilippoToso\Travelport\Rail\PassiveReservation
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
     * @return \FilippoToso\Travelport\Rail\PassiveReservation
     */
    public function setAssociatedRemark($AssociatedRemark)
    {
      $this->AssociatedRemark = $AssociatedRemark;
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
     * @return \FilippoToso\Travelport\Rail\PassiveReservation
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

}
