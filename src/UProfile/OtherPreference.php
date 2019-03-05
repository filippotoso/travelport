<?php

namespace FilippoToso\Travelport\UProfile;

class OtherPreference extends typeKeyTaggedElement
{

    /**
     * @var typePreferencePurpose $Purpose
     */
    protected $Purpose = null;

    /**
     * @var typePriorityOrder $PriorityOrder
     */
    protected $PriorityOrder = null;

    /**
     * @var boolean $TripApproval
     */
    protected $TripApproval = null;

    /**
     * @var boolean $Inclusive
     */
    protected $Inclusive = null;

    /**
     * @var typeOtherPreference $OtherSupplierType
     */
    protected $OtherSupplierType = null;

    /**
     * @var StringLength1to128 $SupplierName
     */
    protected $SupplierName = null;

    /**
     * @var date $BookingStartDate
     */
    protected $BookingStartDate = null;

    /**
     * @var date $BookingEndDate
     */
    protected $BookingEndDate = null;

    /**
     * @var date $UsageStartDate
     */
    protected $UsageStartDate = null;

    /**
     * @var date $UsageEndDate
     */
    protected $UsageEndDate = null;

    /**
     * @var typeGeoPoliticalAreaType $GeoPoliticalAreaType
     */
    protected $GeoPoliticalAreaType = null;

    /**
     * @var typeGeoPoliticalAreaCode $GeoPoliticalAreaCode
     */
    protected $GeoPoliticalAreaCode = null;

    /**
     * @var typePreferencePaymentMethod $PreferencePaymentMethod
     */
    protected $PreferencePaymentMethod = null;

    /**
     * @var typeRef $PaymentDetailsRef
     */
    protected $PaymentDetailsRef = null;

    /**
     * @var typeMoney $MaxCostAmount
     */
    protected $MaxCostAmount = null;

    /**
     * @var typeCurrency $Currency
     */
    protected $Currency = null;

    /**
     * @var StringLength1to255 $GeneralPreference
     */
    protected $GeneralPreference = null;

    /**
     * @param typeRef $Key
     * @param TagRef $TagRef
     * @param typePreferencePurpose $Purpose
     * @param typePriorityOrder $PriorityOrder
     * @param boolean $TripApproval
     * @param boolean $Inclusive
     * @param typeOtherPreference $OtherSupplierType
     * @param StringLength1to128 $SupplierName
     * @param date $BookingStartDate
     * @param date $BookingEndDate
     * @param date $UsageStartDate
     * @param date $UsageEndDate
     * @param typeGeoPoliticalAreaType $GeoPoliticalAreaType
     * @param typeGeoPoliticalAreaCode $GeoPoliticalAreaCode
     * @param typePreferencePaymentMethod $PreferencePaymentMethod
     * @param typeRef $PaymentDetailsRef
     * @param typeMoney $MaxCostAmount
     * @param typeCurrency $Currency
     * @param StringLength1to255 $GeneralPreference
     */
    public function __construct($Key = null, $TagRef = null, $Purpose = null, $PriorityOrder = null, $TripApproval = null, $Inclusive = null, $OtherSupplierType = null, $SupplierName = null, $BookingStartDate = null, $BookingEndDate = null, $UsageStartDate = null, $UsageEndDate = null, $GeoPoliticalAreaType = null, $GeoPoliticalAreaCode = null, $PreferencePaymentMethod = null, $PaymentDetailsRef = null, $MaxCostAmount = null, $Currency = null, $GeneralPreference = null)
    {
      parent::__construct($Key, $TagRef);
      $this->Purpose = $Purpose;
      $this->PriorityOrder = $PriorityOrder;
      $this->TripApproval = $TripApproval;
      $this->Inclusive = $Inclusive;
      $this->OtherSupplierType = $OtherSupplierType;
      $this->SupplierName = $SupplierName;
      $this->BookingStartDate = $BookingStartDate;
      $this->BookingEndDate = $BookingEndDate;
      $this->UsageStartDate = $UsageStartDate;
      $this->UsageEndDate = $UsageEndDate;
      $this->GeoPoliticalAreaType = $GeoPoliticalAreaType;
      $this->GeoPoliticalAreaCode = $GeoPoliticalAreaCode;
      $this->PreferencePaymentMethod = $PreferencePaymentMethod;
      $this->PaymentDetailsRef = $PaymentDetailsRef;
      $this->MaxCostAmount = $MaxCostAmount;
      $this->Currency = $Currency;
      $this->GeneralPreference = $GeneralPreference;
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
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
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
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setPriorityOrder($PriorityOrder)
    {
      $this->PriorityOrder = $PriorityOrder;
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
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setTripApproval($TripApproval)
    {
      $this->TripApproval = $TripApproval;
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
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setInclusive($Inclusive)
    {
      $this->Inclusive = $Inclusive;
      return $this;
    }

    /**
     * @return typeOtherPreference
     */
    public function getOtherSupplierType()
    {
      return $this->OtherSupplierType;
    }

    /**
     * @param typeOtherPreference $OtherSupplierType
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setOtherSupplierType($OtherSupplierType)
    {
      $this->OtherSupplierType = $OtherSupplierType;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSupplierName()
    {
      return $this->SupplierName;
    }

    /**
     * @param StringLength1to128 $SupplierName
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setSupplierName($SupplierName)
    {
      $this->SupplierName = $SupplierName;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
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
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setBookingEndDate($BookingEndDate)
    {
      $this->BookingEndDate = $BookingEndDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getUsageStartDate()
    {
      return $this->UsageStartDate;
    }

    /**
     * @param date $UsageStartDate
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setUsageStartDate($UsageStartDate)
    {
      $this->UsageStartDate = $UsageStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getUsageEndDate()
    {
      return $this->UsageEndDate;
    }

    /**
     * @param date $UsageEndDate
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setUsageEndDate($UsageEndDate)
    {
      $this->UsageEndDate = $UsageEndDate;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaType
     */
    public function getGeoPoliticalAreaType()
    {
      return $this->GeoPoliticalAreaType;
    }

    /**
     * @param typeGeoPoliticalAreaType $GeoPoliticalAreaType
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setGeoPoliticalAreaType($GeoPoliticalAreaType)
    {
      $this->GeoPoliticalAreaType = $GeoPoliticalAreaType;
      return $this;
    }

    /**
     * @return typeGeoPoliticalAreaCode
     */
    public function getGeoPoliticalAreaCode()
    {
      return $this->GeoPoliticalAreaCode;
    }

    /**
     * @param typeGeoPoliticalAreaCode $GeoPoliticalAreaCode
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setGeoPoliticalAreaCode($GeoPoliticalAreaCode)
    {
      $this->GeoPoliticalAreaCode = $GeoPoliticalAreaCode;
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
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setPreferencePaymentMethod($PreferencePaymentMethod)
    {
      $this->PreferencePaymentMethod = $PreferencePaymentMethod;
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
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setPaymentDetailsRef($PaymentDetailsRef)
    {
      $this->PaymentDetailsRef = $PaymentDetailsRef;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMaxCostAmount()
    {
      return $this->MaxCostAmount;
    }

    /**
     * @param typeMoney $MaxCostAmount
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setMaxCostAmount($MaxCostAmount)
    {
      $this->MaxCostAmount = $MaxCostAmount;
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
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return \FilippoToso\Travelport\UProfile\OtherPreference
     */
    public function setGeneralPreference($GeneralPreference)
    {
      $this->GeneralPreference = $GeneralPreference;
      return $this;
    }

}
