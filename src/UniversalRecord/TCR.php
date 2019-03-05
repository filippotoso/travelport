<?php

namespace FilippoToso\Travelport\UniversalRecord;

class TCR
{

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var BookingTraveler $BookingTraveler
     */
    protected $BookingTraveler = null;

    /**
     * @var PassengerTicketNumber $PassengerTicketNumber
     */
    protected $PassengerTicketNumber = null;

    /**
     * @var AirPricingInfo $AirPricingInfo
     */
    protected $AirPricingInfo = null;

    /**
     * @var AgencyInfo $AgencyInfo
     */
    protected $AgencyInfo = null;

    /**
     * @var AirReservationLocatorCode $AirReservationLocatorCode
     */
    protected $AirReservationLocatorCode = null;

    /**
     * @var SupplierLocator $SupplierLocator
     */
    protected $SupplierLocator = null;

    /**
     * @var RefundRemark $RefundRemark
     */
    protected $RefundRemark = null;

    /**
     * @var typeTCRNumber $TCRNumber
     */
    protected $TCRNumber = null;

    /**
     * @var typeTCRStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $ModifiedDate
     */
    protected $ModifiedDate = null;

    /**
     * @var string $ConfirmedDate
     */
    protected $ConfirmedDate = null;

    /**
     * @var typeMoney $BasePrice
     */
    protected $BasePrice = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var typeMoney $Fees
     */
    protected $Fees = null;

    /**
     * @var boolean $Refundable
     */
    protected $Refundable = null;

    /**
     * @var boolean $Exchangeable
     */
    protected $Exchangeable = null;

    /**
     * @var boolean $Voidable
     */
    protected $Voidable = null;

    /**
     * @var boolean $Modifiable
     */
    protected $Modifiable = null;

    /**
     * @var anonymous647 $RefundAccessCode
     */
    protected $RefundAccessCode = null;

    /**
     * @var typeMoney $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var typeMoney $RefundFee
     */
    protected $RefundFee = null;

    /**
     * @var typeMoney $ForfeitAmount
     */
    protected $ForfeitAmount = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeProviderLocatorCode $ProviderLocatorCode
     */
    protected $ProviderLocatorCode = null;

    /**
     * @param FormOfPayment $FormOfPayment
     * @param Payment $Payment
     * @param BookingTraveler $BookingTraveler
     * @param PassengerTicketNumber $PassengerTicketNumber
     * @param AirPricingInfo $AirPricingInfo
     * @param AgencyInfo $AgencyInfo
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @param SupplierLocator $SupplierLocator
     * @param RefundRemark $RefundRemark
     * @param typeTCRNumber $TCRNumber
     * @param typeTCRStatus $Status
     * @param string $ModifiedDate
     * @param string $ConfirmedDate
     * @param typeMoney $BasePrice
     * @param typeMoney $Taxes
     * @param typeMoney $Fees
     * @param boolean $Refundable
     * @param boolean $Exchangeable
     * @param boolean $Voidable
     * @param boolean $Modifiable
     * @param anonymous647 $RefundAccessCode
     * @param typeMoney $RefundAmount
     * @param typeMoney $RefundFee
     * @param typeMoney $ForfeitAmount
     * @param typeProviderCode $ProviderCode
     * @param typeProviderLocatorCode $ProviderLocatorCode
     */
    public function __construct($FormOfPayment = null, $Payment = null, $BookingTraveler = null, $PassengerTicketNumber = null, $AirPricingInfo = null, $AgencyInfo = null, $AirReservationLocatorCode = null, $SupplierLocator = null, $RefundRemark = null, $TCRNumber = null, $Status = null, $ModifiedDate = null, $ConfirmedDate = null, $BasePrice = null, $Taxes = null, $Fees = null, $Refundable = null, $Exchangeable = null, $Voidable = null, $Modifiable = null, $RefundAccessCode = null, $RefundAmount = null, $RefundFee = null, $ForfeitAmount = null, $ProviderCode = null, $ProviderLocatorCode = null)
    {
      $this->FormOfPayment = $FormOfPayment;
      $this->Payment = $Payment;
      $this->BookingTraveler = $BookingTraveler;
      $this->PassengerTicketNumber = $PassengerTicketNumber;
      $this->AirPricingInfo = $AirPricingInfo;
      $this->AgencyInfo = $AgencyInfo;
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
      $this->SupplierLocator = $SupplierLocator;
      $this->RefundRemark = $RefundRemark;
      $this->TCRNumber = $TCRNumber;
      $this->Status = $Status;
      $this->ModifiedDate = $ModifiedDate;
      $this->ConfirmedDate = $ConfirmedDate;
      $this->BasePrice = $BasePrice;
      $this->Taxes = $Taxes;
      $this->Fees = $Fees;
      $this->Refundable = $Refundable;
      $this->Exchangeable = $Exchangeable;
      $this->Voidable = $Voidable;
      $this->Modifiable = $Modifiable;
      $this->RefundAccessCode = $RefundAccessCode;
      $this->RefundAmount = $RefundAmount;
      $this->RefundFee = $RefundFee;
      $this->ForfeitAmount = $ForfeitAmount;
      $this->ProviderCode = $ProviderCode;
      $this->ProviderLocatorCode = $ProviderLocatorCode;
    }

    /**
     * @return FormOfPayment
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param FormOfPayment $FormOfPayment
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
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
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return BookingTraveler
     */
    public function getBookingTraveler()
    {
      return $this->BookingTraveler;
    }

    /**
     * @param BookingTraveler $BookingTraveler
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setBookingTraveler($BookingTraveler)
    {
      $this->BookingTraveler = $BookingTraveler;
      return $this;
    }

    /**
     * @return PassengerTicketNumber
     */
    public function getPassengerTicketNumber()
    {
      return $this->PassengerTicketNumber;
    }

    /**
     * @param PassengerTicketNumber $PassengerTicketNumber
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setPassengerTicketNumber($PassengerTicketNumber)
    {
      $this->PassengerTicketNumber = $PassengerTicketNumber;
      return $this;
    }

    /**
     * @return AirPricingInfo
     */
    public function getAirPricingInfo()
    {
      return $this->AirPricingInfo;
    }

    /**
     * @param AirPricingInfo $AirPricingInfo
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setAirPricingInfo($AirPricingInfo)
    {
      $this->AirPricingInfo = $AirPricingInfo;
      return $this;
    }

    /**
     * @return AgencyInfo
     */
    public function getAgencyInfo()
    {
      return $this->AgencyInfo;
    }

    /**
     * @param AgencyInfo $AgencyInfo
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setAgencyInfo($AgencyInfo)
    {
      $this->AgencyInfo = $AgencyInfo;
      return $this;
    }

    /**
     * @return AirReservationLocatorCode
     */
    public function getAirReservationLocatorCode()
    {
      return $this->AirReservationLocatorCode;
    }

    /**
     * @param AirReservationLocatorCode $AirReservationLocatorCode
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setAirReservationLocatorCode($AirReservationLocatorCode)
    {
      $this->AirReservationLocatorCode = $AirReservationLocatorCode;
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
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setSupplierLocator($SupplierLocator)
    {
      $this->SupplierLocator = $SupplierLocator;
      return $this;
    }

    /**
     * @return RefundRemark
     */
    public function getRefundRemark()
    {
      return $this->RefundRemark;
    }

    /**
     * @param RefundRemark $RefundRemark
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setRefundRemark($RefundRemark)
    {
      $this->RefundRemark = $RefundRemark;
      return $this;
    }

    /**
     * @return typeTCRNumber
     */
    public function getTCRNumber()
    {
      return $this->TCRNumber;
    }

    /**
     * @param typeTCRNumber $TCRNumber
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setTCRNumber($TCRNumber)
    {
      $this->TCRNumber = $TCRNumber;
      return $this;
    }

    /**
     * @return typeTCRStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeTCRStatus $Status
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getModifiedDate()
    {
      return $this->ModifiedDate;
    }

    /**
     * @param string $ModifiedDate
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setModifiedDate($ModifiedDate)
    {
      $this->ModifiedDate = $ModifiedDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmedDate()
    {
      return $this->ConfirmedDate;
    }

    /**
     * @param string $ConfirmedDate
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setConfirmedDate($ConfirmedDate)
    {
      $this->ConfirmedDate = $ConfirmedDate;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param typeMoney $BasePrice
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param typeMoney $Taxes
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getFees()
    {
      return $this->Fees;
    }

    /**
     * @param typeMoney $Fees
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefundable()
    {
      return $this->Refundable;
    }

    /**
     * @param boolean $Refundable
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setRefundable($Refundable)
    {
      $this->Refundable = $Refundable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExchangeable()
    {
      return $this->Exchangeable;
    }

    /**
     * @param boolean $Exchangeable
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setExchangeable($Exchangeable)
    {
      $this->Exchangeable = $Exchangeable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVoidable()
    {
      return $this->Voidable;
    }

    /**
     * @param boolean $Voidable
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setVoidable($Voidable)
    {
      $this->Voidable = $Voidable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getModifiable()
    {
      return $this->Modifiable;
    }

    /**
     * @param boolean $Modifiable
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setModifiable($Modifiable)
    {
      $this->Modifiable = $Modifiable;
      return $this;
    }

    /**
     * @return anonymous647
     */
    public function getRefundAccessCode()
    {
      return $this->RefundAccessCode;
    }

    /**
     * @param anonymous647 $RefundAccessCode
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setRefundAccessCode($RefundAccessCode)
    {
      $this->RefundAccessCode = $RefundAccessCode;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRefundAmount()
    {
      return $this->RefundAmount;
    }

    /**
     * @param typeMoney $RefundAmount
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getRefundFee()
    {
      return $this->RefundFee;
    }

    /**
     * @param typeMoney $RefundFee
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setRefundFee($RefundFee)
    {
      $this->RefundFee = $RefundFee;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getForfeitAmount()
    {
      return $this->ForfeitAmount;
    }

    /**
     * @param typeMoney $ForfeitAmount
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setForfeitAmount($ForfeitAmount)
    {
      $this->ForfeitAmount = $ForfeitAmount;
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
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
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
     * @return \FilippoToso\Travelport\UniversalRecord\TCR
     */
    public function setProviderLocatorCode($ProviderLocatorCode)
    {
      $this->ProviderLocatorCode = $ProviderLocatorCode;
      return $this;
    }

}
