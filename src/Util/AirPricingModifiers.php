<?php

namespace FilippoToso\Travelport\Util;

class AirPricingModifiers
{

    /**
     * @var ProhibitedRuleCategories $ProhibitedRuleCategories
     */
    protected $ProhibitedRuleCategories = null;

    /**
     * @var AccountCodes $AccountCodes
     */
    protected $AccountCodes = null;

    /**
     * @var PermittedCabins $PermittedCabins
     */
    protected $PermittedCabins = null;

    /**
     * @var ContractCodes $ContractCodes
     */
    protected $ContractCodes = null;

    /**
     * @var ExemptTaxes $ExemptTaxes
     */
    protected $ExemptTaxes = null;

    /**
     * @var PenaltyFareInformation $PenaltyFareInformation
     */
    protected $PenaltyFareInformation = null;

    /**
     * @var DiscountCard $DiscountCard
     */
    protected $DiscountCard = null;

    /**
     * @var PromoCodes $PromoCodes
     */
    protected $PromoCodes = null;

    /**
     * @var ManualFareAdjustment $ManualFareAdjustment
     */
    protected $ManualFareAdjustment = null;

    /**
     * @var PointOfSale $PointOfSale
     */
    protected $PointOfSale = null;

    /**
     * @var BrandModifiers $BrandModifiers
     */
    protected $BrandModifiers = null;

    /**
     * @var MultiGDSSearchIndicator $MultiGDSSearchIndicator
     */
    protected $MultiGDSSearchIndicator = null;

    /**
     * @var PreferredCabins $PreferredCabins
     */
    protected $PreferredCabins = null;

    /**
     * @var boolean $ProhibitMinStayFares
     */
    protected $ProhibitMinStayFares = null;

    /**
     * @var boolean $ProhibitMaxStayFares
     */
    protected $ProhibitMaxStayFares = null;

    /**
     * @var typeCurrency $CurrencyType
     */
    protected $CurrencyType = null;

    /**
     * @var boolean $ProhibitAdvancePurchaseFares
     */
    protected $ProhibitAdvancePurchaseFares = null;

    /**
     * @var boolean $ProhibitNonRefundableFares
     */
    protected $ProhibitNonRefundableFares = null;

    /**
     * @var boolean $ProhibitRestrictedFares
     */
    protected $ProhibitRestrictedFares = null;

    /**
     * @var typeFaresIndicator $FaresIndicator
     */
    protected $FaresIndicator = null;

    /**
     * @var typeCurrency $FiledCurrency
     */
    protected $FiledCurrency = null;

    /**
     * @var typeCarrier $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var typeCarrier $OverrideCarrier
     */
    protected $OverrideCarrier = null;

    /**
     * @var typeEticketability $ETicketability
     */
    protected $ETicketability = null;

    /**
     * @var boolean $AccountCodeFaresOnly
     */
    protected $AccountCodeFaresOnly = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var boolean $ProhibitNonExchangeableFares
     */
    protected $ProhibitNonExchangeableFares = null;

    /**
     * @var boolean $ForceSegmentSelect
     */
    protected $ForceSegmentSelect = null;

    /**
     * @var typeInventoryRequest $InventoryRequestType
     */
    protected $InventoryRequestType = null;

    /**
     * @var boolean $OneWayShop
     */
    protected $OneWayShop = null;

    /**
     * @var boolean $ProhibitUnbundledFareTypes
     */
    protected $ProhibitUnbundledFareTypes = null;

    /**
     * @var boolean $ReturnServices
     */
    protected $ReturnServices = null;

    /**
     * @var anonymous732 $ChannelId
     */
    protected $ChannelId = null;

    /**
     * @var boolean $ReturnFareAttributes
     */
    protected $ReturnFareAttributes = null;

    /**
     * @var boolean $SellCheck
     */
    protected $SellCheck = null;

    /**
     * @var boolean $ReturnFailedSegments
     */
    protected $ReturnFailedSegments = null;

    /**
     * @param PermittedCabins $PermittedCabins
     * @param ExemptTaxes $ExemptTaxes
     * @param PenaltyFareInformation $PenaltyFareInformation
     * @param DiscountCard $DiscountCard
     * @param ManualFareAdjustment $ManualFareAdjustment
     * @param PointOfSale $PointOfSale
     * @param BrandModifiers $BrandModifiers
     * @param MultiGDSSearchIndicator $MultiGDSSearchIndicator
     * @param PreferredCabins $PreferredCabins
     * @param boolean $ProhibitMinStayFares
     * @param boolean $ProhibitMaxStayFares
     * @param typeCurrency $CurrencyType
     * @param boolean $ProhibitAdvancePurchaseFares
     * @param boolean $ProhibitNonRefundableFares
     * @param boolean $ProhibitRestrictedFares
     * @param typeFaresIndicator $FaresIndicator
     * @param typeCurrency $FiledCurrency
     * @param typeCarrier $PlatingCarrier
     * @param typeCarrier $OverrideCarrier
     * @param typeEticketability $ETicketability
     * @param boolean $AccountCodeFaresOnly
     * @param typeRef $Key
     * @param boolean $ProhibitNonExchangeableFares
     * @param boolean $ForceSegmentSelect
     * @param typeInventoryRequest $InventoryRequestType
     * @param boolean $OneWayShop
     * @param boolean $ProhibitUnbundledFareTypes
     * @param boolean $ReturnServices
     * @param anonymous732 $ChannelId
     * @param boolean $ReturnFareAttributes
     * @param boolean $SellCheck
     * @param boolean $ReturnFailedSegments
     */
    public function __construct($PermittedCabins = null, $ExemptTaxes = null, $PenaltyFareInformation = null, $DiscountCard = null, $ManualFareAdjustment = null, $PointOfSale = null, $BrandModifiers = null, $MultiGDSSearchIndicator = null, $PreferredCabins = null, $ProhibitMinStayFares = null, $ProhibitMaxStayFares = null, $CurrencyType = null, $ProhibitAdvancePurchaseFares = null, $ProhibitNonRefundableFares = null, $ProhibitRestrictedFares = null, $FaresIndicator = null, $FiledCurrency = null, $PlatingCarrier = null, $OverrideCarrier = null, $ETicketability = null, $AccountCodeFaresOnly = null, $Key = null, $ProhibitNonExchangeableFares = null, $ForceSegmentSelect = null, $InventoryRequestType = null, $OneWayShop = null, $ProhibitUnbundledFareTypes = null, $ReturnServices = null, $ChannelId = null, $ReturnFareAttributes = null, $SellCheck = null, $ReturnFailedSegments = null)
    {
      $this->PermittedCabins = $PermittedCabins;
      $this->ExemptTaxes = $ExemptTaxes;
      $this->PenaltyFareInformation = $PenaltyFareInformation;
      $this->DiscountCard = $DiscountCard;
      $this->ManualFareAdjustment = $ManualFareAdjustment;
      $this->PointOfSale = $PointOfSale;
      $this->BrandModifiers = $BrandModifiers;
      $this->MultiGDSSearchIndicator = $MultiGDSSearchIndicator;
      $this->PreferredCabins = $PreferredCabins;
      $this->ProhibitMinStayFares = $ProhibitMinStayFares;
      $this->ProhibitMaxStayFares = $ProhibitMaxStayFares;
      $this->CurrencyType = $CurrencyType;
      $this->ProhibitAdvancePurchaseFares = $ProhibitAdvancePurchaseFares;
      $this->ProhibitNonRefundableFares = $ProhibitNonRefundableFares;
      $this->ProhibitRestrictedFares = $ProhibitRestrictedFares;
      $this->FaresIndicator = $FaresIndicator;
      $this->FiledCurrency = $FiledCurrency;
      $this->PlatingCarrier = $PlatingCarrier;
      $this->OverrideCarrier = $OverrideCarrier;
      $this->ETicketability = $ETicketability;
      $this->AccountCodeFaresOnly = $AccountCodeFaresOnly;
      $this->Key = $Key;
      $this->ProhibitNonExchangeableFares = $ProhibitNonExchangeableFares;
      $this->ForceSegmentSelect = $ForceSegmentSelect;
      $this->InventoryRequestType = $InventoryRequestType;
      $this->OneWayShop = $OneWayShop;
      $this->ProhibitUnbundledFareTypes = $ProhibitUnbundledFareTypes;
      $this->ReturnServices = $ReturnServices;
      $this->ChannelId = $ChannelId;
      $this->ReturnFareAttributes = $ReturnFareAttributes;
      $this->SellCheck = $SellCheck;
      $this->ReturnFailedSegments = $ReturnFailedSegments;
    }

    /**
     * @return ProhibitedRuleCategories
     */
    public function getProhibitedRuleCategories()
    {
      return $this->ProhibitedRuleCategories;
    }

    /**
     * @param ProhibitedRuleCategories $ProhibitedRuleCategories
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setProhibitedRuleCategories($ProhibitedRuleCategories)
    {
      $this->ProhibitedRuleCategories = $ProhibitedRuleCategories;
      return $this;
    }

    /**
     * @return AccountCodes
     */
    public function getAccountCodes()
    {
      return $this->AccountCodes;
    }

    /**
     * @param AccountCodes $AccountCodes
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setAccountCodes($AccountCodes)
    {
      $this->AccountCodes = $AccountCodes;
      return $this;
    }

    /**
     * @return PermittedCabins
     */
    public function getPermittedCabins()
    {
      return $this->PermittedCabins;
    }

    /**
     * @param PermittedCabins $PermittedCabins
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setPermittedCabins($PermittedCabins)
    {
      $this->PermittedCabins = $PermittedCabins;
      return $this;
    }

    /**
     * @return ContractCodes
     */
    public function getContractCodes()
    {
      return $this->ContractCodes;
    }

    /**
     * @param ContractCodes $ContractCodes
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setContractCodes($ContractCodes)
    {
      $this->ContractCodes = $ContractCodes;
      return $this;
    }

    /**
     * @return ExemptTaxes
     */
    public function getExemptTaxes()
    {
      return $this->ExemptTaxes;
    }

    /**
     * @param ExemptTaxes $ExemptTaxes
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setExemptTaxes($ExemptTaxes)
    {
      $this->ExemptTaxes = $ExemptTaxes;
      return $this;
    }

    /**
     * @return PenaltyFareInformation
     */
    public function getPenaltyFareInformation()
    {
      return $this->PenaltyFareInformation;
    }

    /**
     * @param PenaltyFareInformation $PenaltyFareInformation
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setPenaltyFareInformation($PenaltyFareInformation)
    {
      $this->PenaltyFareInformation = $PenaltyFareInformation;
      return $this;
    }

    /**
     * @return DiscountCard
     */
    public function getDiscountCard()
    {
      return $this->DiscountCard;
    }

    /**
     * @param DiscountCard $DiscountCard
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setDiscountCard($DiscountCard)
    {
      $this->DiscountCard = $DiscountCard;
      return $this;
    }

    /**
     * @return PromoCodes
     */
    public function getPromoCodes()
    {
      return $this->PromoCodes;
    }

    /**
     * @param PromoCodes $PromoCodes
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setPromoCodes($PromoCodes)
    {
      $this->PromoCodes = $PromoCodes;
      return $this;
    }

    /**
     * @return ManualFareAdjustment
     */
    public function getManualFareAdjustment()
    {
      return $this->ManualFareAdjustment;
    }

    /**
     * @param ManualFareAdjustment $ManualFareAdjustment
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setManualFareAdjustment($ManualFareAdjustment)
    {
      $this->ManualFareAdjustment = $ManualFareAdjustment;
      return $this;
    }

    /**
     * @return PointOfSale
     */
    public function getPointOfSale()
    {
      return $this->PointOfSale;
    }

    /**
     * @param PointOfSale $PointOfSale
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setPointOfSale($PointOfSale)
    {
      $this->PointOfSale = $PointOfSale;
      return $this;
    }

    /**
     * @return BrandModifiers
     */
    public function getBrandModifiers()
    {
      return $this->BrandModifiers;
    }

    /**
     * @param BrandModifiers $BrandModifiers
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setBrandModifiers($BrandModifiers)
    {
      $this->BrandModifiers = $BrandModifiers;
      return $this;
    }

    /**
     * @return MultiGDSSearchIndicator
     */
    public function getMultiGDSSearchIndicator()
    {
      return $this->MultiGDSSearchIndicator;
    }

    /**
     * @param MultiGDSSearchIndicator $MultiGDSSearchIndicator
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setMultiGDSSearchIndicator($MultiGDSSearchIndicator)
    {
      $this->MultiGDSSearchIndicator = $MultiGDSSearchIndicator;
      return $this;
    }

    /**
     * @return PreferredCabins
     */
    public function getPreferredCabins()
    {
      return $this->PreferredCabins;
    }

    /**
     * @param PreferredCabins $PreferredCabins
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setPreferredCabins($PreferredCabins)
    {
      $this->PreferredCabins = $PreferredCabins;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitMinStayFares()
    {
      return $this->ProhibitMinStayFares;
    }

    /**
     * @param boolean $ProhibitMinStayFares
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setProhibitMinStayFares($ProhibitMinStayFares)
    {
      $this->ProhibitMinStayFares = $ProhibitMinStayFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitMaxStayFares()
    {
      return $this->ProhibitMaxStayFares;
    }

    /**
     * @param boolean $ProhibitMaxStayFares
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setProhibitMaxStayFares($ProhibitMaxStayFares)
    {
      $this->ProhibitMaxStayFares = $ProhibitMaxStayFares;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrencyType()
    {
      return $this->CurrencyType;
    }

    /**
     * @param typeCurrency $CurrencyType
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setCurrencyType($CurrencyType)
    {
      $this->CurrencyType = $CurrencyType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitAdvancePurchaseFares()
    {
      return $this->ProhibitAdvancePurchaseFares;
    }

    /**
     * @param boolean $ProhibitAdvancePurchaseFares
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setProhibitAdvancePurchaseFares($ProhibitAdvancePurchaseFares)
    {
      $this->ProhibitAdvancePurchaseFares = $ProhibitAdvancePurchaseFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitNonRefundableFares()
    {
      return $this->ProhibitNonRefundableFares;
    }

    /**
     * @param boolean $ProhibitNonRefundableFares
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setProhibitNonRefundableFares($ProhibitNonRefundableFares)
    {
      $this->ProhibitNonRefundableFares = $ProhibitNonRefundableFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitRestrictedFares()
    {
      return $this->ProhibitRestrictedFares;
    }

    /**
     * @param boolean $ProhibitRestrictedFares
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setProhibitRestrictedFares($ProhibitRestrictedFares)
    {
      $this->ProhibitRestrictedFares = $ProhibitRestrictedFares;
      return $this;
    }

    /**
     * @return typeFaresIndicator
     */
    public function getFaresIndicator()
    {
      return $this->FaresIndicator;
    }

    /**
     * @param typeFaresIndicator $FaresIndicator
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setFaresIndicator($FaresIndicator)
    {
      $this->FaresIndicator = $FaresIndicator;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getFiledCurrency()
    {
      return $this->FiledCurrency;
    }

    /**
     * @param typeCurrency $FiledCurrency
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setFiledCurrency($FiledCurrency)
    {
      $this->FiledCurrency = $FiledCurrency;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param typeCarrier $PlatingCarrier
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return typeCarrier
     */
    public function getOverrideCarrier()
    {
      return $this->OverrideCarrier;
    }

    /**
     * @param typeCarrier $OverrideCarrier
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setOverrideCarrier($OverrideCarrier)
    {
      $this->OverrideCarrier = $OverrideCarrier;
      return $this;
    }

    /**
     * @return typeEticketability
     */
    public function getETicketability()
    {
      return $this->ETicketability;
    }

    /**
     * @param typeEticketability $ETicketability
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setETicketability($ETicketability)
    {
      $this->ETicketability = $ETicketability;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccountCodeFaresOnly()
    {
      return $this->AccountCodeFaresOnly;
    }

    /**
     * @param boolean $AccountCodeFaresOnly
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setAccountCodeFaresOnly($AccountCodeFaresOnly)
    {
      $this->AccountCodeFaresOnly = $AccountCodeFaresOnly;
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
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitNonExchangeableFares()
    {
      return $this->ProhibitNonExchangeableFares;
    }

    /**
     * @param boolean $ProhibitNonExchangeableFares
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setProhibitNonExchangeableFares($ProhibitNonExchangeableFares)
    {
      $this->ProhibitNonExchangeableFares = $ProhibitNonExchangeableFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForceSegmentSelect()
    {
      return $this->ForceSegmentSelect;
    }

    /**
     * @param boolean $ForceSegmentSelect
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setForceSegmentSelect($ForceSegmentSelect)
    {
      $this->ForceSegmentSelect = $ForceSegmentSelect;
      return $this;
    }

    /**
     * @return typeInventoryRequest
     */
    public function getInventoryRequestType()
    {
      return $this->InventoryRequestType;
    }

    /**
     * @param typeInventoryRequest $InventoryRequestType
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setInventoryRequestType($InventoryRequestType)
    {
      $this->InventoryRequestType = $InventoryRequestType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOneWayShop()
    {
      return $this->OneWayShop;
    }

    /**
     * @param boolean $OneWayShop
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setOneWayShop($OneWayShop)
    {
      $this->OneWayShop = $OneWayShop;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitUnbundledFareTypes()
    {
      return $this->ProhibitUnbundledFareTypes;
    }

    /**
     * @param boolean $ProhibitUnbundledFareTypes
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setProhibitUnbundledFareTypes($ProhibitUnbundledFareTypes)
    {
      $this->ProhibitUnbundledFareTypes = $ProhibitUnbundledFareTypes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnServices()
    {
      return $this->ReturnServices;
    }

    /**
     * @param boolean $ReturnServices
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setReturnServices($ReturnServices)
    {
      $this->ReturnServices = $ReturnServices;
      return $this;
    }

    /**
     * @return anonymous732
     */
    public function getChannelId()
    {
      return $this->ChannelId;
    }

    /**
     * @param anonymous732 $ChannelId
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setChannelId($ChannelId)
    {
      $this->ChannelId = $ChannelId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnFareAttributes()
    {
      return $this->ReturnFareAttributes;
    }

    /**
     * @param boolean $ReturnFareAttributes
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setReturnFareAttributes($ReturnFareAttributes)
    {
      $this->ReturnFareAttributes = $ReturnFareAttributes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSellCheck()
    {
      return $this->SellCheck;
    }

    /**
     * @param boolean $SellCheck
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setSellCheck($SellCheck)
    {
      $this->SellCheck = $SellCheck;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnFailedSegments()
    {
      return $this->ReturnFailedSegments;
    }

    /**
     * @param boolean $ReturnFailedSegments
     * @return \FilippoToso\Travelport\Util\AirPricingModifiers
     */
    public function setReturnFailedSegments($ReturnFailedSegments)
    {
      $this->ReturnFailedSegments = $ReturnFailedSegments;
      return $this;
    }

}
