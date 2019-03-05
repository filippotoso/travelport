<?php

namespace FilippoToso\Travelport\GDSQueue;

class HotelRateDetail
{

    /**
     * @var typePolicyCodesList $PolicyCodesList
     */
    protected $PolicyCodesList = null;

    /**
     * @var typeHotelRateDescription[] $RoomRateDescription
     */
    protected $RoomRateDescription = null;

    /**
     * @var HotelRateByDate $HotelRateByDate
     */
    protected $HotelRateByDate = null;

    /**
     * @var CorporateDiscountID $CorporateDiscountID
     */
    protected $CorporateDiscountID = null;

    /**
     * @var AcceptedPayment $AcceptedPayment
     */
    protected $AcceptedPayment = null;

    /**
     * @var Commission $Commission
     */
    protected $Commission = null;

    /**
     * @var RateMatchIndicator $RateMatchIndicator
     */
    protected $RateMatchIndicator = null;

    /**
     * @var TaxDetails $TaxDetails
     */
    protected $TaxDetails = null;

    /**
     * @var CancelInfo $CancelInfo
     */
    protected $CancelInfo = null;

    /**
     * @var GuaranteeInfo $GuaranteeInfo
     */
    protected $GuaranteeInfo = null;

    /**
     * @var string $SupplementalRateInfo
     */
    protected $SupplementalRateInfo = null;

    /**
     * @var RoomCapacity $RoomCapacity
     */
    protected $RoomCapacity = null;

    /**
     * @var ExtraCharges $ExtraCharges
     */
    protected $ExtraCharges = null;

    /**
     * @var Inclusions $Inclusions
     */
    protected $Inclusions = null;

    /**
     * @var typeRatePlanType $RatePlanType
     */
    protected $RatePlanType = null;

    /**
     * @var typeMoney $ApproximateBase
     */
    protected $ApproximateBase = null;

    /**
     * @var typeMoney $ApproximateTax
     */
    protected $ApproximateTax = null;

    /**
     * @var typeMoney $ApproximateTotal
     */
    protected $ApproximateTotal = null;

    /**
     * @var typeMoney $ApproximateSurcharge
     */
    protected $ApproximateSurcharge = null;

    /**
     * @var boolean $RateGuaranteed
     */
    protected $RateGuaranteed = null;

    /**
     * @var boolean $ApproximateRateGuaranteed
     */
    protected $ApproximateRateGuaranteed = null;

    /**
     * @var typeOTACode $RateCategory
     */
    protected $RateCategory = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeThirdPartySupplier $RateSupplier
     */
    protected $RateSupplier = null;

    /**
     * @var int $BookableQuantity
     */
    protected $BookableQuantity = null;

    /**
     * @var typeRateOfferId $RateOfferId
     */
    protected $RateOfferId = null;

    /**
     * @var boolean $InPolicy
     */
    protected $InPolicy = null;

    /**
     * @var typeTrinary $RateChangeIndicator
     */
    protected $RateChangeIndicator = null;

    /**
     * @var typeTrinary $ExtraFeesIncluded
     */
    protected $ExtraFeesIncluded = null;

    /**
     * @var typeMoney $Base
     */
    protected $Base = null;

    /**
     * @var typeMoney $Tax
     */
    protected $Tax = null;

    /**
     * @var typeMoney $Total
     */
    protected $Total = null;

    /**
     * @var typeMoney $Surcharge
     */
    protected $Surcharge = null;

    /**
     * @param HotelRateByDate $HotelRateByDate
     * @param CorporateDiscountID $CorporateDiscountID
     * @param AcceptedPayment $AcceptedPayment
     * @param Commission $Commission
     * @param RateMatchIndicator $RateMatchIndicator
     * @param TaxDetails $TaxDetails
     * @param CancelInfo $CancelInfo
     * @param GuaranteeInfo $GuaranteeInfo
     * @param typeRatePlanType $RatePlanType
     * @param typeMoney $ApproximateBase
     * @param typeMoney $ApproximateTax
     * @param typeMoney $ApproximateTotal
     * @param typeMoney $ApproximateSurcharge
     * @param boolean $RateGuaranteed
     * @param boolean $ApproximateRateGuaranteed
     * @param typeOTACode $RateCategory
     * @param typeRef $Key
     * @param typeThirdPartySupplier $RateSupplier
     * @param int $BookableQuantity
     * @param typeRateOfferId $RateOfferId
     * @param boolean $InPolicy
     * @param typeTrinary $RateChangeIndicator
     * @param typeTrinary $ExtraFeesIncluded
     * @param typeMoney $Base
     * @param typeMoney $Tax
     * @param typeMoney $Total
     * @param typeMoney $Surcharge
     */
    public function __construct($HotelRateByDate = null, $CorporateDiscountID = null, $AcceptedPayment = null, $Commission = null, $RateMatchIndicator = null, $TaxDetails = null, $CancelInfo = null, $GuaranteeInfo = null, $RatePlanType = null, $ApproximateBase = null, $ApproximateTax = null, $ApproximateTotal = null, $ApproximateSurcharge = null, $RateGuaranteed = null, $ApproximateRateGuaranteed = null, $RateCategory = null, $Key = null, $RateSupplier = null, $BookableQuantity = null, $RateOfferId = null, $InPolicy = null, $RateChangeIndicator = null, $ExtraFeesIncluded = null, $Base = null, $Tax = null, $Total = null, $Surcharge = null)
    {
      $this->HotelRateByDate = $HotelRateByDate;
      $this->CorporateDiscountID = $CorporateDiscountID;
      $this->AcceptedPayment = $AcceptedPayment;
      $this->Commission = $Commission;
      $this->RateMatchIndicator = $RateMatchIndicator;
      $this->TaxDetails = $TaxDetails;
      $this->CancelInfo = $CancelInfo;
      $this->GuaranteeInfo = $GuaranteeInfo;
      $this->RatePlanType = $RatePlanType;
      $this->ApproximateBase = $ApproximateBase;
      $this->ApproximateTax = $ApproximateTax;
      $this->ApproximateTotal = $ApproximateTotal;
      $this->ApproximateSurcharge = $ApproximateSurcharge;
      $this->RateGuaranteed = $RateGuaranteed;
      $this->ApproximateRateGuaranteed = $ApproximateRateGuaranteed;
      $this->RateCategory = $RateCategory;
      $this->Key = $Key;
      $this->RateSupplier = $RateSupplier;
      $this->BookableQuantity = $BookableQuantity;
      $this->RateOfferId = $RateOfferId;
      $this->InPolicy = $InPolicy;
      $this->RateChangeIndicator = $RateChangeIndicator;
      $this->ExtraFeesIncluded = $ExtraFeesIncluded;
      $this->Base = $Base;
      $this->Tax = $Tax;
      $this->Total = $Total;
      $this->Surcharge = $Surcharge;
    }

    /**
     * @return typePolicyCodesList
     */
    public function getPolicyCodesList()
    {
      return $this->PolicyCodesList;
    }

    /**
     * @param typePolicyCodesList $PolicyCodesList
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setPolicyCodesList($PolicyCodesList)
    {
      $this->PolicyCodesList = $PolicyCodesList;
      return $this;
    }

    /**
     * @return typeHotelRateDescription[]
     */
    public function getRoomRateDescription()
    {
      return $this->RoomRateDescription;
    }

    /**
     * @param typeHotelRateDescription[] $RoomRateDescription
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setRoomRateDescription(array $RoomRateDescription = null)
    {
      $this->RoomRateDescription = $RoomRateDescription;
      return $this;
    }

    /**
     * @return HotelRateByDate
     */
    public function getHotelRateByDate()
    {
      return $this->HotelRateByDate;
    }

    /**
     * @param HotelRateByDate $HotelRateByDate
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setHotelRateByDate($HotelRateByDate)
    {
      $this->HotelRateByDate = $HotelRateByDate;
      return $this;
    }

    /**
     * @return CorporateDiscountID
     */
    public function getCorporateDiscountID()
    {
      return $this->CorporateDiscountID;
    }

    /**
     * @param CorporateDiscountID $CorporateDiscountID
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setCorporateDiscountID($CorporateDiscountID)
    {
      $this->CorporateDiscountID = $CorporateDiscountID;
      return $this;
    }

    /**
     * @return AcceptedPayment
     */
    public function getAcceptedPayment()
    {
      return $this->AcceptedPayment;
    }

    /**
     * @param AcceptedPayment $AcceptedPayment
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setAcceptedPayment($AcceptedPayment)
    {
      $this->AcceptedPayment = $AcceptedPayment;
      return $this;
    }

    /**
     * @return Commission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param Commission $Commission
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return RateMatchIndicator
     */
    public function getRateMatchIndicator()
    {
      return $this->RateMatchIndicator;
    }

    /**
     * @param RateMatchIndicator $RateMatchIndicator
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setRateMatchIndicator($RateMatchIndicator)
    {
      $this->RateMatchIndicator = $RateMatchIndicator;
      return $this;
    }

    /**
     * @return TaxDetails
     */
    public function getTaxDetails()
    {
      return $this->TaxDetails;
    }

    /**
     * @param TaxDetails $TaxDetails
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setTaxDetails($TaxDetails)
    {
      $this->TaxDetails = $TaxDetails;
      return $this;
    }

    /**
     * @return CancelInfo
     */
    public function getCancelInfo()
    {
      return $this->CancelInfo;
    }

    /**
     * @param CancelInfo $CancelInfo
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setCancelInfo($CancelInfo)
    {
      $this->CancelInfo = $CancelInfo;
      return $this;
    }

    /**
     * @return GuaranteeInfo
     */
    public function getGuaranteeInfo()
    {
      return $this->GuaranteeInfo;
    }

    /**
     * @param GuaranteeInfo $GuaranteeInfo
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setGuaranteeInfo($GuaranteeInfo)
    {
      $this->GuaranteeInfo = $GuaranteeInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplementalRateInfo()
    {
      return $this->SupplementalRateInfo;
    }

    /**
     * @param string $SupplementalRateInfo
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setSupplementalRateInfo($SupplementalRateInfo)
    {
      $this->SupplementalRateInfo = $SupplementalRateInfo;
      return $this;
    }

    /**
     * @return RoomCapacity
     */
    public function getRoomCapacity()
    {
      return $this->RoomCapacity;
    }

    /**
     * @param RoomCapacity $RoomCapacity
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setRoomCapacity($RoomCapacity)
    {
      $this->RoomCapacity = $RoomCapacity;
      return $this;
    }

    /**
     * @return ExtraCharges
     */
    public function getExtraCharges()
    {
      return $this->ExtraCharges;
    }

    /**
     * @param ExtraCharges $ExtraCharges
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setExtraCharges($ExtraCharges)
    {
      $this->ExtraCharges = $ExtraCharges;
      return $this;
    }

    /**
     * @return Inclusions
     */
    public function getInclusions()
    {
      return $this->Inclusions;
    }

    /**
     * @param Inclusions $Inclusions
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setInclusions($Inclusions)
    {
      $this->Inclusions = $Inclusions;
      return $this;
    }

    /**
     * @return typeRatePlanType
     */
    public function getRatePlanType()
    {
      return $this->RatePlanType;
    }

    /**
     * @param typeRatePlanType $RatePlanType
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setRatePlanType($RatePlanType)
    {
      $this->RatePlanType = $RatePlanType;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateBase()
    {
      return $this->ApproximateBase;
    }

    /**
     * @param typeMoney $ApproximateBase
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setApproximateBase($ApproximateBase)
    {
      $this->ApproximateBase = $ApproximateBase;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTax()
    {
      return $this->ApproximateTax;
    }

    /**
     * @param typeMoney $ApproximateTax
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setApproximateTax($ApproximateTax)
    {
      $this->ApproximateTax = $ApproximateTax;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotal()
    {
      return $this->ApproximateTotal;
    }

    /**
     * @param typeMoney $ApproximateTotal
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setApproximateTotal($ApproximateTotal)
    {
      $this->ApproximateTotal = $ApproximateTotal;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateSurcharge()
    {
      return $this->ApproximateSurcharge;
    }

    /**
     * @param typeMoney $ApproximateSurcharge
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setApproximateSurcharge($ApproximateSurcharge)
    {
      $this->ApproximateSurcharge = $ApproximateSurcharge;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRateGuaranteed()
    {
      return $this->RateGuaranteed;
    }

    /**
     * @param boolean $RateGuaranteed
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setRateGuaranteed($RateGuaranteed)
    {
      $this->RateGuaranteed = $RateGuaranteed;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApproximateRateGuaranteed()
    {
      return $this->ApproximateRateGuaranteed;
    }

    /**
     * @param boolean $ApproximateRateGuaranteed
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setApproximateRateGuaranteed($ApproximateRateGuaranteed)
    {
      $this->ApproximateRateGuaranteed = $ApproximateRateGuaranteed;
      return $this;
    }

    /**
     * @return typeOTACode
     */
    public function getRateCategory()
    {
      return $this->RateCategory;
    }

    /**
     * @param typeOTACode $RateCategory
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setRateCategory($RateCategory)
    {
      $this->RateCategory = $RateCategory;
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
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeThirdPartySupplier
     */
    public function getRateSupplier()
    {
      return $this->RateSupplier;
    }

    /**
     * @param typeThirdPartySupplier $RateSupplier
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setRateSupplier($RateSupplier)
    {
      $this->RateSupplier = $RateSupplier;
      return $this;
    }

    /**
     * @return int
     */
    public function getBookableQuantity()
    {
      return $this->BookableQuantity;
    }

    /**
     * @param int $BookableQuantity
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setBookableQuantity($BookableQuantity)
    {
      $this->BookableQuantity = $BookableQuantity;
      return $this;
    }

    /**
     * @return typeRateOfferId
     */
    public function getRateOfferId()
    {
      return $this->RateOfferId;
    }

    /**
     * @param typeRateOfferId $RateOfferId
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setRateOfferId($RateOfferId)
    {
      $this->RateOfferId = $RateOfferId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInPolicy()
    {
      return $this->InPolicy;
    }

    /**
     * @param boolean $InPolicy
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setInPolicy($InPolicy)
    {
      $this->InPolicy = $InPolicy;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getRateChangeIndicator()
    {
      return $this->RateChangeIndicator;
    }

    /**
     * @param typeTrinary $RateChangeIndicator
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setRateChangeIndicator($RateChangeIndicator)
    {
      $this->RateChangeIndicator = $RateChangeIndicator;
      return $this;
    }

    /**
     * @return typeTrinary
     */
    public function getExtraFeesIncluded()
    {
      return $this->ExtraFeesIncluded;
    }

    /**
     * @param typeTrinary $ExtraFeesIncluded
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setExtraFeesIncluded($ExtraFeesIncluded)
    {
      $this->ExtraFeesIncluded = $ExtraFeesIncluded;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBase()
    {
      return $this->Base;
    }

    /**
     * @param typeMoney $Base
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setBase($Base)
    {
      $this->Base = $Base;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param typeMoney $Tax
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotal()
    {
      return $this->Total;
    }

    /**
     * @param typeMoney $Total
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setTotal($Total)
    {
      $this->Total = $Total;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getSurcharge()
    {
      return $this->Surcharge;
    }

    /**
     * @param typeMoney $Surcharge
     * @return \FilippoToso\Travelport\GDSQueue\HotelRateDetail
     */
    public function setSurcharge($Surcharge)
    {
      $this->Surcharge = $Surcharge;
      return $this;
    }

}
