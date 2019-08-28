<?php

namespace FilippoToso\Travelport\UProfile;

class typeBasePreference extends typeKeyTaggedElement
{

    /**
     * @var date $BookingStartDate
     */
    protected $BookingStartDate = null;

    /**
     * @var date $BookingEndDate
     */
    protected $BookingEndDate = null;

    /**
     * @var typeCurrency $Currency
     */
    protected $Currency = null;

    /**
     * @var typeGeoPoliticalAreaType $DepartureGeoPoliticalAreaType
     */
    protected $DepartureGeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $DepartureGeoPoliticalAreaCode
     */
    protected $DepartureGeoPoliticalAreaCode = null;

    /**
     * @var boolean $Emphasis
     */
    protected $Emphasis = null;

    /**
     * @var StringLength1to255 $GeneralPreference
     */
    protected $GeneralPreference = null;

    /**
     * @var boolean $Inclusive
     */
    protected $Inclusive = null;

    /**
     * @var typeRef $LoyaltyProgramEnrollmentRef
     */
    protected $LoyaltyProgramEnrollmentRef = null;

    /**
     * @var anonymous656 $OtherLoyaltyProgramNumber
     */
    protected $OtherLoyaltyProgramNumber = null;

    /**
     * @var typeRef $PaymentDetailsRef
     */
    protected $PaymentDetailsRef = null;

    /**
     * @var typePreferencePaymentMethod $PreferencePaymentMethod
     */
    protected $PreferencePaymentMethod = null;

    /**
     * @var typePreferencePurpose $Purpose
     */
    protected $Purpose = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @var typeSupplier $Supplier
     */
    protected $Supplier = null;

    /**
     * @var boolean $TripApproval
     */
    protected $TripApproval = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param date $BookingStartDate
     * @param date $BookingEndDate
     * @param typeCurrency $Currency
     * @param typeGeoPoliticalAreaType $DepartureGeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $DepartureGeoPoliticalAreaCode
     * @param boolean $Emphasis
     * @param StringLength1to255 $GeneralPreference
     * @param boolean $Inclusive
     * @param typeRef $LoyaltyProgramEnrollmentRef
     * @param anonymous656 $OtherLoyaltyProgramNumber
     * @param typeRef $PaymentDetailsRef
     * @param typePreferencePaymentMethod $PreferencePaymentMethod
     * @param typePreferencePurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     * @param typeSupplier $Supplier
     * @param boolean $TripApproval
     */
    public function __construct($Key = null, $TagRef = null, $BookingStartDate = null, $BookingEndDate = null, $Currency = null, $DepartureGeoPoliticalAreaType = null, $DepartureGeoPoliticalAreaCode = null, $Emphasis = null, $GeneralPreference = null, $Inclusive = null, $LoyaltyProgramEnrollmentRef = null, $OtherLoyaltyProgramNumber = null, $PaymentDetailsRef = null, $PreferencePaymentMethod = null, $Purpose = null, $PriorityOrder = null, $Supplier = null, $TripApproval = null)
    {
      parent::__construct($Key, $TagRef);
      $this->BookingStartDate = $BookingStartDate;
      $this->BookingEndDate = $BookingEndDate;
      $this->Currency = $Currency;
      $this->DepartureGeoPoliticalAreaType = $DepartureGeoPoliticalAreaType;
      $this->DepartureGeoPoliticalAreaCode = $DepartureGeoPoliticalAreaCode;
      $this->Emphasis = $Emphasis;
      $this->GeneralPreference = $GeneralPreference;
      $this->Inclusive = $Inclusive;
      $this->LoyaltyProgramEnrollmentRef = $LoyaltyProgramEnrollmentRef;
      $this->OtherLoyaltyProgramNumber = $OtherLoyaltyProgramNumber;
      $this->PaymentDetailsRef = $PaymentDetailsRef;
      $this->PreferencePaymentMethod = $PreferencePaymentMethod;
      $this->Purpose = $Purpose;
      $this->PriorityOrder = $PriorityOrder;
      $this->Supplier = $Supplier;
      $this->TripApproval = $TripApproval;
    }

    /**
     * @return date
     */
    public function getBookingStartDate()
    {
      return $this->BookingStartDate;
    }

    /**
     * @param date $BookingStartDate
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setBookingStartDate($BookingStartDate)
    {
      $this->BookingStartDate = $BookingStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getBookingEndDate()
    {
      return $this->BookingEndDate;
    }

    /**
     * @param date $BookingEndDate
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setBookingEndDate($BookingEndDate)
    {
      $this->BookingEndDate = $BookingEndDate;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param typeCurrency $Currency
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getDepartureGeoPoliticalAreaType()
    {
      return $this->DepartureGeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $DepartureGeoPoliticalAreaType
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setDepartureGeoPoliticalAreaType($DepartureGeoPoliticalAreaType)
    {
      $this->DepartureGeoPoliticalAreaType = $DepartureGeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getDepartureGeoPoliticalAreaCode()
    {
      return $this->DepartureGeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $DepartureGeoPoliticalAreaCode
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setDepartureGeoPoliticalAreaCode($DepartureGeoPoliticalAreaCode)
    {
      $this->DepartureGeoPoliticalAreaCode = $DepartureGeoPoliticalAreaCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmphasis()
    {
      return $this->Emphasis;
    }

    /**
     * @param boolean $Emphasis
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setEmphasis($Emphasis)
    {
      $this->Emphasis = $Emphasis;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getGeneralPreference()
    {
      return $this->GeneralPreference;
    }

    /**
     * @param StringLength1to255 $GeneralPreference
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setGeneralPreference($GeneralPreference)
    {
      $this->GeneralPreference = $GeneralPreference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInclusive()
    {
      return $this->Inclusive;
    }

    /**
     * @param boolean $Inclusive
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setInclusive($Inclusive)
    {
      $this->Inclusive = $Inclusive;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getLoyaltyProgramEnrollmentRef()
    {
      return $this->LoyaltyProgramEnrollmentRef;
    }

    /**
     * @param typeRef $LoyaltyProgramEnrollmentRef
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setLoyaltyProgramEnrollmentRef($LoyaltyProgramEnrollmentRef)
    {
      $this->LoyaltyProgramEnrollmentRef = $LoyaltyProgramEnrollmentRef;
      return $this;
    }

    /**
     * @return anonymous656
     */
    public function getOtherLoyaltyProgramNumber()
    {
      return $this->OtherLoyaltyProgramNumber;
    }

    /**
     * @param anonymous656 $OtherLoyaltyProgramNumber
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setOtherLoyaltyProgramNumber($OtherLoyaltyProgramNumber)
    {
      $this->OtherLoyaltyProgramNumber = $OtherLoyaltyProgramNumber;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPaymentDetailsRef()
    {
      return $this->PaymentDetailsRef;
    }

    /**
     * @param typeRef $PaymentDetailsRef
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setPaymentDetailsRef($PaymentDetailsRef)
    {
      $this->PaymentDetailsRef = $PaymentDetailsRef;
      return $this;
    }

    /**
     * @return typePreferencePaymentMethod
     */
    public function getPreferencePaymentMethod()
    {
      return $this->PreferencePaymentMethod;
    }

    /**
     * @param typePreferencePaymentMethod $PreferencePaymentMethod
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setPreferencePaymentMethod($PreferencePaymentMethod)
    {
      $this->PreferencePaymentMethod = $PreferencePaymentMethod;
      return $this;
    }

    /**
     * @return typePreferencePurpose
     */
    public function getPurpose()
    {
      return $this->Purpose;
    }

    /**
     * @param typePreferencePurpose $Purpose
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setPurpose($Purpose)
    {
      $this->Purpose = $Purpose;
      return $this;
    }

    /**
     * @return typePriorityOrder
     */
    public function getPriorityOrder()
    {
      return $this->PriorityOrder;
    }

    /**
     * @param typePriorityOrder $PriorityOrder
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
      return $this;
    }

    /**
     * @return typeSupplier
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param typeSupplier $Supplier
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTripApproval()
    {
      return $this->TripApproval;
    }

    /**
     * @param boolean $TripApproval
     * @return \FilippoToso\Travelport\UProfile\typeBasePreference
     */
    public function setTripApproval($TripApproval)
    {
      $this->TripApproval = $TripApproval;
      return $this;
    }

}
