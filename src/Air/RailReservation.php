<?php

namespace FilippoToso\Travelport\Air;

class RailReservation extends BaseReservation
{

    /**
     * @var BookingTravelerRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var RailJourney $RailJourney
     */
    protected $RailJourney = null;

    /**
     * @var RailPricingInfo $RailPricingInfo
     */
    protected $RailPricingInfo = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var RailTicketInfo $RailTicketInfo
     */
    protected $RailTicketInfo = null;

    /**
     * @var RailFareNoteList $RailFareNoteList
     */
    protected $RailFareNoteList = null;

    /**
     * @var SupplierLocator $SupplierLocator
     */
    protected $SupplierLocator = null;

    /**
     * @var string $BookingStatus
     */
    protected $BookingStatus = null;

    /**
     * @param AccountingRemark $AccountingRemark
     * @param GeneralRemark $GeneralRemark
     * @param Restriction $Restriction
     * @param PassiveInfo $PassiveInfo
     * @param typeLocatorCode $LocatorCode
     * @param string $CreateDate
     * @param string $ModifiedDate
     * @param string $CustomerNumber
     * @param BookingTravelerRef $BookingTravelerRef
     * @param RailJourney $RailJourney
     * @param RailPricingInfo $RailPricingInfo
     * @param Payment $Payment
     * @param RailTicketInfo $RailTicketInfo
     * @param RailFareNoteList $RailFareNoteList
     * @param SupplierLocator $SupplierLocator
     * @param string $BookingStatus
     */
    public function __construct($AccountingRemark = null, $GeneralRemark = null, $Restriction = null, $PassiveInfo = null, $LocatorCode = null, $CreateDate = null, $ModifiedDate = null, $CustomerNumber = null, $BookingTravelerRef = null, $RailJourney = null, $RailPricingInfo = null, $Payment = null, $RailTicketInfo = null, $RailFareNoteList = null, $SupplierLocator = null, $BookingStatus = null)
    {
      parent::__construct($AccountingRemark, $GeneralRemark, $Restriction, $PassiveInfo, $LocatorCode, $CreateDate, $ModifiedDate, $CustomerNumber);
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->RailJourney = $RailJourney;
      $this->RailPricingInfo = $RailPricingInfo;
      $this->Payment = $Payment;
      $this->RailTicketInfo = $RailTicketInfo;
      $this->RailFareNoteList = $RailFareNoteList;
      $this->SupplierLocator = $SupplierLocator;
      $this->BookingStatus = $BookingStatus;
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
     * @return \FilippoToso\Travelport\Air\RailReservation
     */
    public function setBookingTravelerRef($BookingTravelerRef)
    {
      $this->BookingTravelerRef = $BookingTravelerRef;
      return $this;
    }

    /**
     * @return RailJourney
     */
    public function getRailJourney()
    {
      return $this->RailJourney;
    }

    /**
     * @param RailJourney $RailJourney
     * @return \FilippoToso\Travelport\Air\RailReservation
     */
    public function setRailJourney($RailJourney)
    {
      $this->RailJourney = $RailJourney;
      return $this;
    }

    /**
     * @return RailPricingInfo
     */
    public function getRailPricingInfo()
    {
      return $this->RailPricingInfo;
    }

    /**
     * @param RailPricingInfo $RailPricingInfo
     * @return \FilippoToso\Travelport\Air\RailReservation
     */
    public function setRailPricingInfo($RailPricingInfo)
    {
      $this->RailPricingInfo = $RailPricingInfo;
      return $this;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param Payment $Payment
     * @return \FilippoToso\Travelport\Air\RailReservation
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return RailTicketInfo
     */
    public function getRailTicketInfo()
    {
      return $this->RailTicketInfo;
    }

    /**
     * @param RailTicketInfo $RailTicketInfo
     * @return \FilippoToso\Travelport\Air\RailReservation
     */
    public function setRailTicketInfo($RailTicketInfo)
    {
      $this->RailTicketInfo = $RailTicketInfo;
      return $this;
    }

    /**
     * @return RailFareNoteList
     */
    public function getRailFareNoteList()
    {
      return $this->RailFareNoteList;
    }

    /**
     * @param RailFareNoteList $RailFareNoteList
     * @return \FilippoToso\Travelport\Air\RailReservation
     */
    public function setRailFareNoteList($RailFareNoteList)
    {
      $this->RailFareNoteList = $RailFareNoteList;
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
     * @return \FilippoToso\Travelport\Air\RailReservation
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingStatus()
    {
      return $this->BookingStatus;
    }

    /**
     * @param string $BookingStatus
     * @return \FilippoToso\Travelport\Air\RailReservation
     */
    public function setBookingStatus($BookingStatus)
    {
      $this->BookingStatus = $BookingStatus;
      return $this;
    }

}
