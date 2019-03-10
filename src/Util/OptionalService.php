<?php

namespace FilippoToso\Travelport\Util;

class OptionalService
{

    /**
     * @var ServiceData $ServiceData
     */
    protected $ServiceData = null;

    /**
     * @var ServiceInfo $ServiceInfo
     */
    protected $ServiceInfo = null;

    /**
     * @var Remark $Remark
     */
    protected $Remark = null;

    /**
     * @var typeTaxInfo $TaxInfo
     */
    protected $TaxInfo = null;

    /**
     * @var typeFeeInfo $FeeInfo
     */
    protected $FeeInfo = null;

    /**
     * @var EMD $EMD
     */
    protected $EMD = null;

    /**
     * @var BundledServices $BundledServices
     */
    protected $BundledServices = null;

    /**
     * @var AdditionalInfo $AdditionalInfo
     */
    protected $AdditionalInfo = null;

    /**
     * @var FeeApplication $FeeApplication
     */
    protected $FeeApplication = null;

    /**
     * @var typeTextElement $Text
     */
    protected $Text = null;

    /**
     * @var PriceRange $PriceRange
     */
    protected $PriceRange = null;

    /**
     * @var TourCode $TourCode
     */
    protected $TourCode = null;

    /**
     * @var BrandingInfo $BrandingInfo
     */
    protected $BrandingInfo = null;

    /**
     * @var typeTextElement $Title
     */
    protected $Title = null;

    /**
     * @var typeRef $OptionalServicesRuleRef
     */
    protected $OptionalServicesRuleRef = null;

    /**
     * @var typeMerchandisingService $Type
     */
    protected $Type = null;

    /**
     * @var string $Confirmation
     */
    protected $Confirmation = null;

    /**
     * @var string $SecondaryType
     */
    protected $SecondaryType = null;

    /**
     * @var typePurchaseWindow $PurchaseWindow
     */
    protected $PurchaseWindow = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var boolean $Available
     */
    protected $Available = null;

    /**
     * @var boolean $Entitled
     */
    protected $Entitled = null;

    /**
     * @var boolean $PerTraveler
     */
    protected $PerTraveler = null;

    /**
     * @var \DateTime $CreateDate
     */
    protected $CreateDate = null;

    /**
     * @var typeRef $PaymentRef
     */
    protected $PaymentRef = null;

    /**
     * @var string $ServiceStatus
     */
    protected $ServiceStatus = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var anonymous828 $ServiceSubCode
     */
    protected $ServiceSubCode = null;

    /**
     * @var typeSSRCode $SSRCode
     */
    protected $SSRCode = null;

    /**
     * @var anonymous829 $IssuanceReason
     */
    protected $IssuanceReason = null;

    /**
     * @var anonymous830 $ProviderDefinedType
     */
    protected $ProviderDefinedType = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeAssessIndicator $AssessIndicator
     */
    protected $AssessIndicator = null;

    /**
     * @var int $Mileage
     */
    protected $Mileage = null;

    /**
     * @var anonymous831 $ApplicableFFLevel
     */
    protected $ApplicableFFLevel = null;

    /**
     * @var boolean $Private
     */
    protected $Private = null;

    /**
     * @var typeSSRFreeText $SSRFreeText
     */
    protected $SSRFreeText = null;

    /**
     * @var boolean $IsPricingApproximate
     */
    protected $IsPricingApproximate = null;

    /**
     * @var string $Chargeable
     */
    protected $Chargeable = null;

    /**
     * @var boolean $InclusiveOfTax
     */
    protected $InclusiveOfTax = null;

    /**
     * @var boolean $InterlineSettlementAllowed
     */
    protected $InterlineSettlementAllowed = null;

    /**
     * @var string $GeographySpecification
     */
    protected $GeographySpecification = null;

    /**
     * @var string $ExcessWeightRate
     */
    protected $ExcessWeightRate = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var boolean $ViewableOnly
     */
    protected $ViewableOnly = null;

    /**
     * @var string $DisplayText
     */
    protected $DisplayText = null;

    /**
     * @var string $WeightInExcess
     */
    protected $WeightInExcess = null;

    /**
     * @var string $TotalWeight
     */
    protected $TotalWeight = null;

    /**
     * @var typeMoney $BaggageUnitPrice
     */
    protected $BaggageUnitPrice = null;

    /**
     * @var int $FirstPiece
     */
    protected $FirstPiece = null;

    /**
     * @var int $LastPiece
     */
    protected $LastPiece = null;

    /**
     * @var boolean $Restricted
     */
    protected $Restricted = null;

    /**
     * @var boolean $IsRepriceRequired
     */
    protected $IsRepriceRequired = null;

    /**
     * @var string $BookedQuantity
     */
    protected $BookedQuantity = null;

    /**
     * @var string $Group
     */
    protected $Group = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var anonymous832 $Tag
     */
    protected $Tag = null;

    /**
     * @var anonymous833 $DisplayOrder
     */
    protected $DisplayOrder = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var typeSupplierCode $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var typeMoney $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var typeMoney $BasePrice
     */
    protected $BasePrice = null;

    /**
     * @var typeMoney $ApproximateTotalPrice
     */
    protected $ApproximateTotalPrice = null;

    /**
     * @var typeMoney $ApproximateBasePrice
     */
    protected $ApproximateBasePrice = null;

    /**
     * @var typeMoney $EquivalentBasePrice
     */
    protected $EquivalentBasePrice = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var typeMoney $Fees
     */
    protected $Fees = null;

    /**
     * @var typeMoney $Services
     */
    protected $Services = null;

    /**
     * @var typeMoney $ApproximateTaxes
     */
    protected $ApproximateTaxes = null;

    /**
     * @var typeMoney $ApproximateFees
     */
    protected $ApproximateFees = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param ServiceData $ServiceData
     * @param ServiceInfo $ServiceInfo
     * @param Remark $Remark
     * @param typeTaxInfo $TaxInfo
     * @param typeFeeInfo $FeeInfo
     * @param EMD $EMD
     * @param BundledServices $BundledServices
     * @param AdditionalInfo $AdditionalInfo
     * @param FeeApplication $FeeApplication
     * @param typeTextElement $Text
     * @param PriceRange $PriceRange
     * @param TourCode $TourCode
     * @param BrandingInfo $BrandingInfo
     * @param typeTextElement $Title
     * @param typeRef $OptionalServicesRuleRef
     * @param typeMerchandisingService $Type
     * @param string $Confirmation
     * @param string $SecondaryType
     * @param typePurchaseWindow $PurchaseWindow
     * @param int $Priority
     * @param boolean $Available
     * @param boolean $Entitled
     * @param boolean $PerTraveler
     * @param \DateTime $CreateDate
     * @param typeRef $PaymentRef
     * @param string $ServiceStatus
     * @param int $Quantity
     * @param int $SequenceNumber
     * @param anonymous828 $ServiceSubCode
     * @param typeSSRCode $SSRCode
     * @param anonymous829 $IssuanceReason
     * @param anonymous830 $ProviderDefinedType
     * @param typeRef $Key
     * @param typeAssessIndicator $AssessIndicator
     * @param int $Mileage
     * @param anonymous831 $ApplicableFFLevel
     * @param boolean $Private
     * @param typeSSRFreeText $SSRFreeText
     * @param boolean $IsPricingApproximate
     * @param string $Chargeable
     * @param boolean $InclusiveOfTax
     * @param boolean $InterlineSettlementAllowed
     * @param string $GeographySpecification
     * @param string $ExcessWeightRate
     * @param string $Source
     * @param boolean $ViewableOnly
     * @param string $DisplayText
     * @param string $WeightInExcess
     * @param string $TotalWeight
     * @param typeMoney $BaggageUnitPrice
     * @param int $FirstPiece
     * @param int $LastPiece
     * @param boolean $Restricted
     * @param boolean $IsRepriceRequired
     * @param string $BookedQuantity
     * @param string $Group
     * @param typePCC $PseudoCityCode
     * @param anonymous832 $Tag
     * @param anonymous833 $DisplayOrder
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $SupplierCode
     * @param typeMoney $TotalPrice
     * @param typeMoney $BasePrice
     * @param typeMoney $ApproximateTotalPrice
     * @param typeMoney $ApproximateBasePrice
     * @param typeMoney $EquivalentBasePrice
     * @param typeMoney $Taxes
     * @param typeMoney $Fees
     * @param typeMoney $Services
     * @param typeMoney $ApproximateTaxes
     * @param typeMoney $ApproximateFees
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($ServiceData = null, $ServiceInfo = null, $Remark = null, $TaxInfo = null, $FeeInfo = null, $EMD = null, $BundledServices = null, $AdditionalInfo = null, $FeeApplication = null, $Text = null, $PriceRange = null, $TourCode = null, $BrandingInfo = null, $Title = null, $OptionalServicesRuleRef = null, $Type = null, $Confirmation = null, $SecondaryType = null, $PurchaseWindow = null, $Priority = null, $Available = null, $Entitled = null, $PerTraveler = null, \DateTime $CreateDate = null, $PaymentRef = null, $ServiceStatus = null, $Quantity = null, $SequenceNumber = null, $ServiceSubCode = null, $SSRCode = null, $IssuanceReason = null, $ProviderDefinedType = null, $Key = null, $AssessIndicator = null, $Mileage = null, $ApplicableFFLevel = null, $Private = null, $SSRFreeText = null, $IsPricingApproximate = null, $Chargeable = null, $InclusiveOfTax = null, $InterlineSettlementAllowed = null, $GeographySpecification = null, $ExcessWeightRate = null, $Source = null, $ViewableOnly = null, $DisplayText = null, $WeightInExcess = null, $TotalWeight = null, $BaggageUnitPrice = null, $FirstPiece = null, $LastPiece = null, $Restricted = null, $IsRepriceRequired = null, $BookedQuantity = null, $Group = null, $PseudoCityCode = null, $Tag = null, $DisplayOrder = null, $ProviderCode = null, $SupplierCode = null, $TotalPrice = null, $BasePrice = null, $ApproximateTotalPrice = null, $ApproximateBasePrice = null, $EquivalentBasePrice = null, $Taxes = null, $Fees = null, $Services = null, $ApproximateTaxes = null, $ApproximateFees = null, $ElStat = null, $KeyOverride = null)
    {
      $this->ServiceData = $ServiceData;
      $this->ServiceInfo = $ServiceInfo;
      $this->Remark = $Remark;
      $this->TaxInfo = $TaxInfo;
      $this->FeeInfo = $FeeInfo;
      $this->EMD = $EMD;
      $this->BundledServices = $BundledServices;
      $this->AdditionalInfo = $AdditionalInfo;
      $this->FeeApplication = $FeeApplication;
      $this->Text = $Text;
      $this->PriceRange = $PriceRange;
      $this->TourCode = $TourCode;
      $this->BrandingInfo = $BrandingInfo;
      $this->Title = $Title;
      $this->OptionalServicesRuleRef = $OptionalServicesRuleRef;
      $this->Type = $Type;
      $this->Confirmation = $Confirmation;
      $this->SecondaryType = $SecondaryType;
      $this->PurchaseWindow = $PurchaseWindow;
      $this->Priority = $Priority;
      $this->Available = $Available;
      $this->Entitled = $Entitled;
      $this->PerTraveler = $PerTraveler;
      $this->CreateDate = $CreateDate ? $CreateDate->format(\DateTime::ATOM) : null;
      $this->PaymentRef = $PaymentRef;
      $this->ServiceStatus = $ServiceStatus;
      $this->Quantity = $Quantity;
      $this->SequenceNumber = $SequenceNumber;
      $this->ServiceSubCode = $ServiceSubCode;
      $this->SSRCode = $SSRCode;
      $this->IssuanceReason = $IssuanceReason;
      $this->ProviderDefinedType = $ProviderDefinedType;
      $this->Key = $Key;
      $this->AssessIndicator = $AssessIndicator;
      $this->Mileage = $Mileage;
      $this->ApplicableFFLevel = $ApplicableFFLevel;
      $this->Private = $Private;
      $this->SSRFreeText = $SSRFreeText;
      $this->IsPricingApproximate = $IsPricingApproximate;
      $this->Chargeable = $Chargeable;
      $this->InclusiveOfTax = $InclusiveOfTax;
      $this->InterlineSettlementAllowed = $InterlineSettlementAllowed;
      $this->GeographySpecification = $GeographySpecification;
      $this->ExcessWeightRate = $ExcessWeightRate;
      $this->Source = $Source;
      $this->ViewableOnly = $ViewableOnly;
      $this->DisplayText = $DisplayText;
      $this->WeightInExcess = $WeightInExcess;
      $this->TotalWeight = $TotalWeight;
      $this->BaggageUnitPrice = $BaggageUnitPrice;
      $this->FirstPiece = $FirstPiece;
      $this->LastPiece = $LastPiece;
      $this->Restricted = $Restricted;
      $this->IsRepriceRequired = $IsRepriceRequired;
      $this->BookedQuantity = $BookedQuantity;
      $this->Group = $Group;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->Tag = $Tag;
      $this->DisplayOrder = $DisplayOrder;
      $this->ProviderCode = $ProviderCode;
      $this->SupplierCode = $SupplierCode;
      $this->TotalPrice = $TotalPrice;
      $this->BasePrice = $BasePrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      $this->EquivalentBasePrice = $EquivalentBasePrice;
      $this->Taxes = $Taxes;
      $this->Fees = $Fees;
      $this->Services = $Services;
      $this->ApproximateTaxes = $ApproximateTaxes;
      $this->ApproximateFees = $ApproximateFees;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return ServiceData
     */
    public function getServiceData()
    {
      return $this->ServiceData;
    }

    /**
     * @param ServiceData $ServiceData
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setServiceData($ServiceData)
    {
      $this->ServiceData = $ServiceData;
      return $this;
    }

    /**
     * @return ServiceInfo
     */
    public function getServiceInfo()
    {
      return $this->ServiceInfo;
    }

    /**
     * @param ServiceInfo $ServiceInfo
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setServiceInfo($ServiceInfo)
    {
      $this->ServiceInfo = $ServiceInfo;
      return $this;
    }

    /**
     * @return Remark
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param Remark $Remark
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return typeTaxInfo
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfo $TaxInfo
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return typeFeeInfo
     */
    public function getFeeInfo()
    {
      return $this->FeeInfo;
    }

    /**
     * @param typeFeeInfo $FeeInfo
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setFeeInfo($FeeInfo)
    {
      $this->FeeInfo = $FeeInfo;
      return $this;
    }

    /**
     * @return EMD
     */
    public function getEMD()
    {
      return $this->EMD;
    }

    /**
     * @param EMD $EMD
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setEMD($EMD)
    {
      $this->EMD = $EMD;
      return $this;
    }

    /**
     * @return BundledServices
     */
    public function getBundledServices()
    {
      return $this->BundledServices;
    }

    /**
     * @param BundledServices $BundledServices
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setBundledServices($BundledServices)
    {
      $this->BundledServices = $BundledServices;
      return $this;
    }

    /**
     * @return AdditionalInfo
     */
    public function getAdditionalInfo()
    {
      return $this->AdditionalInfo;
    }

    /**
     * @param AdditionalInfo $AdditionalInfo
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setAdditionalInfo($AdditionalInfo)
    {
      $this->AdditionalInfo = $AdditionalInfo;
      return $this;
    }

    /**
     * @return FeeApplication
     */
    public function getFeeApplication()
    {
      return $this->FeeApplication;
    }

    /**
     * @param FeeApplication $FeeApplication
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setFeeApplication($FeeApplication)
    {
      $this->FeeApplication = $FeeApplication;
      return $this;
    }

    /**
     * @return typeTextElement
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param typeTextElement $Text
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return PriceRange
     */
    public function getPriceRange()
    {
      return $this->PriceRange;
    }

    /**
     * @param PriceRange $PriceRange
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setPriceRange($PriceRange)
    {
      $this->PriceRange = $PriceRange;
      return $this;
    }

    /**
     * @return TourCode
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param TourCode $TourCode
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return BrandingInfo
     */
    public function getBrandingInfo()
    {
      return $this->BrandingInfo;
    }

    /**
     * @param BrandingInfo $BrandingInfo
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setBrandingInfo($BrandingInfo)
    {
      $this->BrandingInfo = $BrandingInfo;
      return $this;
    }

    /**
     * @return typeTextElement
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param typeTextElement $Title
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getOptionalServicesRuleRef()
    {
      return $this->OptionalServicesRuleRef;
    }

    /**
     * @param typeRef $OptionalServicesRuleRef
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setOptionalServicesRuleRef($OptionalServicesRuleRef)
    {
      $this->OptionalServicesRuleRef = $OptionalServicesRuleRef;
      return $this;
    }

    /**
     * @return typeMerchandisingService
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeMerchandisingService $Type
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setType($Type)
    {
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setConfirmation($Confirmation)
    {
      $this->Confirmation = $Confirmation;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondaryType()
    {
      return $this->SecondaryType;
    }

    /**
     * @param string $SecondaryType
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setSecondaryType($SecondaryType)
    {
      $this->SecondaryType = $SecondaryType;
      return $this;
    }

    /**
     * @return typePurchaseWindow
     */
    public function getPurchaseWindow()
    {
      return $this->PurchaseWindow;
    }

    /**
     * @param typePurchaseWindow $PurchaseWindow
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setPurchaseWindow($PurchaseWindow)
    {
      $this->PurchaseWindow = $PurchaseWindow;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAvailable()
    {
      return $this->Available;
    }

    /**
     * @param boolean $Available
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setAvailable($Available)
    {
      $this->Available = $Available;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEntitled()
    {
      return $this->Entitled;
    }

    /**
     * @param boolean $Entitled
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setEntitled($Entitled)
    {
      $this->Entitled = $Entitled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPerTraveler()
    {
      return $this->PerTraveler;
    }

    /**
     * @param boolean $PerTraveler
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setPerTraveler($PerTraveler)
    {
      $this->PerTraveler = $PerTraveler;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
      if ($this->CreateDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreateDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreateDate
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setCreateDate(\DateTime $CreateDate)
    {
      $this->CreateDate = $CreateDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getPaymentRef()
    {
      return $this->PaymentRef;
    }

    /**
     * @param typeRef $PaymentRef
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setPaymentRef($PaymentRef)
    {
      $this->PaymentRef = $PaymentRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceStatus()
    {
      return $this->ServiceStatus;
    }

    /**
     * @param string $ServiceStatus
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setServiceStatus($ServiceStatus)
    {
      $this->ServiceStatus = $ServiceStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getSequenceNumber()
    {
      return $this->SequenceNumber;
    }

    /**
     * @param int $SequenceNumber
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setSequenceNumber($SequenceNumber)
    {
      $this->SequenceNumber = $SequenceNumber;
      return $this;
    }

    /**
     * @return anonymous828
     */
    public function getServiceSubCode()
    {
      return $this->ServiceSubCode;
    }

    /**
     * @param anonymous828 $ServiceSubCode
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setServiceSubCode($ServiceSubCode)
    {
      $this->ServiceSubCode = $ServiceSubCode;
      return $this;
    }

    /**
     * @return typeSSRCode
     */
    public function getSSRCode()
    {
      return $this->SSRCode;
    }

    /**
     * @param typeSSRCode $SSRCode
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setSSRCode($SSRCode)
    {
      $this->SSRCode = $SSRCode;
      return $this;
    }

    /**
     * @return anonymous829
     */
    public function getIssuanceReason()
    {
      return $this->IssuanceReason;
    }

    /**
     * @param anonymous829 $IssuanceReason
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setIssuanceReason($IssuanceReason)
    {
      $this->IssuanceReason = $IssuanceReason;
      return $this;
    }

    /**
     * @return anonymous830
     */
    public function getProviderDefinedType()
    {
      return $this->ProviderDefinedType;
    }

    /**
     * @param anonymous830 $ProviderDefinedType
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setProviderDefinedType($ProviderDefinedType)
    {
      $this->ProviderDefinedType = $ProviderDefinedType;
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
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeAssessIndicator
     */
    public function getAssessIndicator()
    {
      return $this->AssessIndicator;
    }

    /**
     * @param typeAssessIndicator $AssessIndicator
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setAssessIndicator($AssessIndicator)
    {
      $this->AssessIndicator = $AssessIndicator;
      return $this;
    }

    /**
     * @return int
     */
    public function getMileage()
    {
      return $this->Mileage;
    }

    /**
     * @param int $Mileage
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setMileage($Mileage)
    {
      $this->Mileage = $Mileage;
      return $this;
    }

    /**
     * @return anonymous831
     */
    public function getApplicableFFLevel()
    {
      return $this->ApplicableFFLevel;
    }

    /**
     * @param anonymous831 $ApplicableFFLevel
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setApplicableFFLevel($ApplicableFFLevel)
    {
      $this->ApplicableFFLevel = $ApplicableFFLevel;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrivate()
    {
      return $this->Private;
    }

    /**
     * @param boolean $Private
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setPrivate($Private)
    {
      $this->Private = $Private;
      return $this;
    }

    /**
     * @return typeSSRFreeText
     */
    public function getSSRFreeText()
    {
      return $this->SSRFreeText;
    }

    /**
     * @param typeSSRFreeText $SSRFreeText
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setSSRFreeText($SSRFreeText)
    {
      $this->SSRFreeText = $SSRFreeText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPricingApproximate()
    {
      return $this->IsPricingApproximate;
    }

    /**
     * @param boolean $IsPricingApproximate
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setIsPricingApproximate($IsPricingApproximate)
    {
      $this->IsPricingApproximate = $IsPricingApproximate;
      return $this;
    }

    /**
     * @return string
     */
    public function getChargeable()
    {
      return $this->Chargeable;
    }

    /**
     * @param string $Chargeable
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setChargeable($Chargeable)
    {
      $this->Chargeable = $Chargeable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInclusiveOfTax()
    {
      return $this->InclusiveOfTax;
    }

    /**
     * @param boolean $InclusiveOfTax
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setInclusiveOfTax($InclusiveOfTax)
    {
      $this->InclusiveOfTax = $InclusiveOfTax;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInterlineSettlementAllowed()
    {
      return $this->InterlineSettlementAllowed;
    }

    /**
     * @param boolean $InterlineSettlementAllowed
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setInterlineSettlementAllowed($InterlineSettlementAllowed)
    {
      $this->InterlineSettlementAllowed = $InterlineSettlementAllowed;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeographySpecification()
    {
      return $this->GeographySpecification;
    }

    /**
     * @param string $GeographySpecification
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setGeographySpecification($GeographySpecification)
    {
      $this->GeographySpecification = $GeographySpecification;
      return $this;
    }

    /**
     * @return string
     */
    public function getExcessWeightRate()
    {
      return $this->ExcessWeightRate;
    }

    /**
     * @param string $ExcessWeightRate
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setExcessWeightRate($ExcessWeightRate)
    {
      $this->ExcessWeightRate = $ExcessWeightRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getViewableOnly()
    {
      return $this->ViewableOnly;
    }

    /**
     * @param boolean $ViewableOnly
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setViewableOnly($ViewableOnly)
    {
      $this->ViewableOnly = $ViewableOnly;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayText()
    {
      return $this->DisplayText;
    }

    /**
     * @param string $DisplayText
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setDisplayText($DisplayText)
    {
      $this->DisplayText = $DisplayText;
      return $this;
    }

    /**
     * @return string
     */
    public function getWeightInExcess()
    {
      return $this->WeightInExcess;
    }

    /**
     * @param string $WeightInExcess
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setWeightInExcess($WeightInExcess)
    {
      $this->WeightInExcess = $WeightInExcess;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalWeight()
    {
      return $this->TotalWeight;
    }

    /**
     * @param string $TotalWeight
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setTotalWeight($TotalWeight)
    {
      $this->TotalWeight = $TotalWeight;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBaggageUnitPrice()
    {
      return $this->BaggageUnitPrice;
    }

    /**
     * @param typeMoney $BaggageUnitPrice
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setBaggageUnitPrice($BaggageUnitPrice)
    {
      $this->BaggageUnitPrice = $BaggageUnitPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getFirstPiece()
    {
      return $this->FirstPiece;
    }

    /**
     * @param int $FirstPiece
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setFirstPiece($FirstPiece)
    {
      $this->FirstPiece = $FirstPiece;
      return $this;
    }

    /**
     * @return int
     */
    public function getLastPiece()
    {
      return $this->LastPiece;
    }

    /**
     * @param int $LastPiece
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setLastPiece($LastPiece)
    {
      $this->LastPiece = $LastPiece;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestricted()
    {
      return $this->Restricted;
    }

    /**
     * @param boolean $Restricted
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setRestricted($Restricted)
    {
      $this->Restricted = $Restricted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRepriceRequired()
    {
      return $this->IsRepriceRequired;
    }

    /**
     * @param boolean $IsRepriceRequired
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setIsRepriceRequired($IsRepriceRequired)
    {
      $this->IsRepriceRequired = $IsRepriceRequired;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookedQuantity()
    {
      return $this->BookedQuantity;
    }

    /**
     * @param string $BookedQuantity
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setBookedQuantity($BookedQuantity)
    {
      $this->BookedQuantity = $BookedQuantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
      return $this->Group;
    }

    /**
     * @param string $Group
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setGroup($Group)
    {
      $this->Group = $Group;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return anonymous832
     */
    public function getTag()
    {
      return $this->Tag;
    }

    /**
     * @param anonymous832 $Tag
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setTag($Tag)
    {
      $this->Tag = $Tag;
      return $this;
    }

    /**
     * @return anonymous833
     */
    public function getDisplayOrder()
    {
      return $this->DisplayOrder;
    }

    /**
     * @param anonymous833 $DisplayOrder
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
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
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param typeSupplierCode $SupplierCode
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
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
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotalPrice()
    {
      return $this->ApproximateTotalPrice;
    }

    /**
     * @param typeMoney $ApproximateTotalPrice
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateBasePrice()
    {
      return $this->ApproximateBasePrice;
    }

    /**
     * @param typeMoney $ApproximateBasePrice
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setApproximateBasePrice($ApproximateBasePrice)
    {
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getEquivalentBasePrice()
    {
      return $this->EquivalentBasePrice;
    }

    /**
     * @param typeMoney $EquivalentBasePrice
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setEquivalentBasePrice($EquivalentBasePrice)
    {
      $this->EquivalentBasePrice = $EquivalentBasePrice;
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
     * @return \FilippoToso\Travelport\Util\OptionalService
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
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setFees($Fees)
    {
      $this->Fees = $Fees;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param typeMoney $Services
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTaxes()
    {
      return $this->ApproximateTaxes;
    }

    /**
     * @param typeMoney $ApproximateTaxes
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setApproximateTaxes($ApproximateTaxes)
    {
      $this->ApproximateTaxes = $ApproximateTaxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateFees()
    {
      return $this->ApproximateFees;
    }

    /**
     * @param typeMoney $ApproximateFees
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setApproximateFees($ApproximateFees)
    {
      $this->ApproximateFees = $ApproximateFees;
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
     * @return \FilippoToso\Travelport\Util\OptionalService
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
     * @return \FilippoToso\Travelport\Util\OptionalService
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
