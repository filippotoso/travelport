<?php

namespace FilippoToso\Travelport\Hotel;

class ServiceFeeInfo
{

    /**
     * @var FormOfPayment $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var ServiceFeeTaxInfo $ServiceFeeTaxInfo
     */
    protected $ServiceFeeTaxInfo = null;

    /**
     * @var CreditCardAuth $CreditCardAuth
     */
    protected $CreditCardAuth = null;

    /**
     * @var Payment $Payment
     */
    protected $Payment = null;

    /**
     * @var typeStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var string $Confirmation
     */
    protected $Confirmation = null;

    /**
     * @var string $TicketNumber
     */
    protected $TicketNumber = null;

    /**
     * @var typeRef $BookingTravelerRef
     */
    protected $BookingTravelerRef = null;

    /**
     * @var typeRef $ProviderReservationInfoRef
     */
    protected $ProviderReservationInfoRef = null;

    /**
     * @var typeRef $PassiveProviderReservationInfoRef
     */
    protected $PassiveProviderReservationInfoRef = null;

    /**
     * @var typeMoney $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var typeMoney $BaseAmount
     */
    protected $BaseAmount = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var string $BookingTravelerName
     */
    protected $BookingTravelerName = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param FormOfPayment $FormOfPayment
     * @param ServiceFeeTaxInfo $ServiceFeeTaxInfo
     * @param CreditCardAuth $CreditCardAuth
     * @param Payment $Payment
     * @param typeStatus $Status
     * @param string $Description
     * @param typeRef $Key
     * @param string $Confirmation
     * @param string $TicketNumber
     * @param typeRef $BookingTravelerRef
     * @param typeRef $ProviderReservationInfoRef
     * @param typeRef $PassiveProviderReservationInfoRef
     * @param typeMoney $TotalAmount
     * @param typeMoney $BaseAmount
     * @param typeMoney $Taxes
     * @param string $BookingTravelerName
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($FormOfPayment = null, $ServiceFeeTaxInfo = null, $CreditCardAuth = null, $Payment = null, $Status = null, $Description = null, $Key = null, $Confirmation = null, $TicketNumber = null, $BookingTravelerRef = null, $ProviderReservationInfoRef = null, $PassiveProviderReservationInfoRef = null, $TotalAmount = null, $BaseAmount = null, $Taxes = null, $BookingTravelerName = null, $ElStat = null, $KeyOverride = null)
    {
      $this->FormOfPayment = $FormOfPayment;
      $this->ServiceFeeTaxInfo = $ServiceFeeTaxInfo;
      $this->CreditCardAuth = $CreditCardAuth;
      $this->Payment = $Payment;
      $this->Status = $Status;
      $this->Description = $Description;
      $this->Key = $Key;
      $this->Confirmation = $Confirmation;
      $this->TicketNumber = $TicketNumber;
      $this->BookingTravelerRef = $BookingTravelerRef;
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
      $this->TotalAmount = $TotalAmount;
      $this->BaseAmount = $BaseAmount;
      $this->Taxes = $Taxes;
      $this->BookingTravelerName = $BookingTravelerName;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return ServiceFeeTaxInfo
     */
    public function getServiceFeeTaxInfo()
    {
      return $this->ServiceFeeTaxInfo;
    }

    /**
     * @param ServiceFeeTaxInfo $ServiceFeeTaxInfo
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setServiceFeeTaxInfo($ServiceFeeTaxInfo)
    {
      $this->ServiceFeeTaxInfo = $ServiceFeeTaxInfo;
      return $this;
    }

    /**
     * @return CreditCardAuth
     */
    public function getCreditCardAuth()
    {
      return $this->CreditCardAuth;
    }

    /**
     * @param CreditCardAuth $CreditCardAuth
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setCreditCardAuth($CreditCardAuth)
    {
      $this->CreditCardAuth = $CreditCardAuth;
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
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return typeStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeStatus $Status
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmation()
    {
      return $this->Confirmation;
    }

    /**
     * @param string $Confirmation
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setConfirmation($Confirmation)
    {
      $this->Confirmation = $Confirmation;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param string $TicketNumber
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
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
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setBookingTravelerRef($BookingTravelerRef)
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
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setProviderReservationInfoRef($ProviderReservationInfoRef)
    {
      $this->ProviderReservationInfoRef = $ProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPassiveProviderReservationInfoRef()
    {
      return $this->PassiveProviderReservationInfoRef;
    }

    /**
     * @param typeRef $PassiveProviderReservationInfoRef
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setPassiveProviderReservationInfoRef($PassiveProviderReservationInfoRef)
    {
      $this->PassiveProviderReservationInfoRef = $PassiveProviderReservationInfoRef;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param typeMoney $TotalAmount
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBaseAmount()
    {
      return $this->BaseAmount;
    }

    /**
     * @param typeMoney $BaseAmount
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setBaseAmount($BaseAmount)
    {
      $this->BaseAmount = $BaseAmount;
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
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingTravelerName()
    {
      return $this->BookingTravelerName;
    }

    /**
     * @param string $BookingTravelerName
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setBookingTravelerName($BookingTravelerName)
    {
      $this->BookingTravelerName = $BookingTravelerName;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Hotel\ServiceFeeInfo
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
