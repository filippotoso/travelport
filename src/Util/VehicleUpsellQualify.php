<?php

namespace FilippoToso\Travelport\Util;

class VehicleUpsellQualify
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeSupplierCode $VendorCode
     */
    protected $VendorCode = null;

    /**
     * @var typeDate $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var typeDate $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var typeProviderCode $ProviderCode
     */
    protected $ProviderCode = null;

    /**
     * @var string $PickupDateTime
     */
    protected $PickupDateTime = null;

    /**
     * @var typeIATACode $PickupLocation
     */
    protected $PickupLocation = null;

    /**
     * @var string $ReturnDateTime
     */
    protected $ReturnDateTime = null;

    /**
     * @var typeIATACode $ReturnLocation
     */
    protected $ReturnLocation = null;

    /**
     * @var typeVehicleLocation $PickupLocationType
     */
    protected $PickupLocationType = null;

    /**
     * @var typeVehicleLocation $ReturnLocationType
     */
    protected $ReturnLocationType = null;

    /**
     * @var string $PickupLocationNumber
     */
    protected $PickupLocationNumber = null;

    /**
     * @var string $ReturnLocationNumber
     */
    protected $ReturnLocationNumber = null;

    /**
     * @var boolean $AirConditioning
     */
    protected $AirConditioning = null;

    /**
     * @var typeVehicleTransmission $TransmissionType
     */
    protected $TransmissionType = null;

    /**
     * @var typeVehicleClass $VehicleClass
     */
    protected $VehicleClass = null;

    /**
     * @var typeVehicleCategory $Category
     */
    protected $Category = null;

    /**
     * @var typeDoorCount $DoorCount
     */
    protected $DoorCount = null;

    /**
     * @var typeRateCode $RateCode
     */
    protected $RateCode = null;

    /**
     * @var typeRateCategory $RateCategory
     */
    protected $RateCategory = null;

    /**
     * @var typeDiscountNumber $DiscountNumber
     */
    protected $DiscountNumber = null;

    /**
     * @var typeRef $OfferRef
     */
    protected $OfferRef = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param typeSupplierCode $VendorCode
     * @param typeDate $EffectiveDate
     * @param typeDate $ExpirationDate
     * @param typeProviderCode $ProviderCode
     * @param string $PickupDateTime
     * @param typeIATACode $PickupLocation
     * @param string $ReturnDateTime
     * @param typeIATACode $ReturnLocation
     * @param typeVehicleLocation $PickupLocationType
     * @param typeVehicleLocation $ReturnLocationType
     * @param string $PickupLocationNumber
     * @param string $ReturnLocationNumber
     * @param boolean $AirConditioning
     * @param typeVehicleTransmission $TransmissionType
     * @param typeVehicleClass $VehicleClass
     * @param typeVehicleCategory $Category
     * @param typeDoorCount $DoorCount
     * @param typeRateCode $RateCode
     * @param typeRateCategory $RateCategory
     * @param typeDiscountNumber $DiscountNumber
     * @param typeRef $OfferRef
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key = null, $VendorCode = null, $EffectiveDate = null, $ExpirationDate = null, $ProviderCode = null, $PickupDateTime = null, $PickupLocation = null, $ReturnDateTime = null, $ReturnLocation = null, $PickupLocationType = null, $ReturnLocationType = null, $PickupLocationNumber = null, $ReturnLocationNumber = null, $AirConditioning = null, $TransmissionType = null, $VehicleClass = null, $Category = null, $DoorCount = null, $RateCode = null, $RateCategory = null, $DiscountNumber = null, $OfferRef = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Key = $Key;
      $this->VendorCode = $VendorCode;
      $this->EffectiveDate = $EffectiveDate;
      $this->ExpirationDate = $ExpirationDate;
      $this->ProviderCode = $ProviderCode;
      $this->PickupDateTime = $PickupDateTime;
      $this->PickupLocation = $PickupLocation;
      $this->ReturnDateTime = $ReturnDateTime;
      $this->ReturnLocation = $ReturnLocation;
      $this->PickupLocationType = $PickupLocationType;
      $this->ReturnLocationType = $ReturnLocationType;
      $this->PickupLocationNumber = $PickupLocationNumber;
      $this->ReturnLocationNumber = $ReturnLocationNumber;
      $this->AirConditioning = $AirConditioning;
      $this->TransmissionType = $TransmissionType;
      $this->VehicleClass = $VehicleClass;
      $this->Category = $Category;
      $this->DoorCount = $DoorCount;
      $this->RateCode = $RateCode;
      $this->RateCategory = $RateCategory;
      $this->DiscountNumber = $DiscountNumber;
      $this->OfferRef = $OfferRef;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return typeSupplierCode
     */
    public function getVendorCode()
    {
      return $this->VendorCode;
    }

    /**
     * @param typeSupplierCode $VendorCode
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getEffectiveDate()
    {
      return $this->EffectiveDate;
    }

    /**
     * @param typeDate $EffectiveDate
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setEffectiveDate($EffectiveDate)
    {
      $this->EffectiveDate = $EffectiveDate;
      return $this;
    }

    /**
     * @return typeDate
     */
    public function getExpirationDate()
    {
      return $this->ExpirationDate;
    }

    /**
     * @param typeDate $ExpirationDate
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setExpirationDate($ExpirationDate)
    {
      $this->ExpirationDate = $ExpirationDate;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setProviderCode($ProviderCode)
    {
      $this->ProviderCode = $ProviderCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupDateTime()
    {
      return $this->PickupDateTime;
    }

    /**
     * @param string $PickupDateTime
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setPickupDateTime($PickupDateTime)
    {
      $this->PickupDateTime = $PickupDateTime;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getPickupLocation()
    {
      return $this->PickupLocation;
    }

    /**
     * @param typeIATACode $PickupLocation
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setPickupLocation($PickupLocation)
    {
      $this->PickupLocation = $PickupLocation;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnDateTime()
    {
      return $this->ReturnDateTime;
    }

    /**
     * @param string $ReturnDateTime
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setReturnDateTime($ReturnDateTime)
    {
      $this->ReturnDateTime = $ReturnDateTime;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getReturnLocation()
    {
      return $this->ReturnLocation;
    }

    /**
     * @param typeIATACode $ReturnLocation
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setReturnLocation($ReturnLocation)
    {
      $this->ReturnLocation = $ReturnLocation;
      return $this;
    }

    /**
     * @return typeVehicleLocation
     */
    public function getPickupLocationType()
    {
      return $this->PickupLocationType;
    }

    /**
     * @param typeVehicleLocation $PickupLocationType
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setPickupLocationType($PickupLocationType)
    {
      $this->PickupLocationType = $PickupLocationType;
      return $this;
    }

    /**
     * @return typeVehicleLocation
     */
    public function getReturnLocationType()
    {
      return $this->ReturnLocationType;
    }

    /**
     * @param typeVehicleLocation $ReturnLocationType
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setReturnLocationType($ReturnLocationType)
    {
      $this->ReturnLocationType = $ReturnLocationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPickupLocationNumber()
    {
      return $this->PickupLocationNumber;
    }

    /**
     * @param string $PickupLocationNumber
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setPickupLocationNumber($PickupLocationNumber)
    {
      $this->PickupLocationNumber = $PickupLocationNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnLocationNumber()
    {
      return $this->ReturnLocationNumber;
    }

    /**
     * @param string $ReturnLocationNumber
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setReturnLocationNumber($ReturnLocationNumber)
    {
      $this->ReturnLocationNumber = $ReturnLocationNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAirConditioning()
    {
      return $this->AirConditioning;
    }

    /**
     * @param boolean $AirConditioning
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setAirConditioning($AirConditioning)
    {
      $this->AirConditioning = $AirConditioning;
      return $this;
    }

    /**
     * @return typeVehicleTransmission
     */
    public function getTransmissionType()
    {
      return $this->TransmissionType;
    }

    /**
     * @param typeVehicleTransmission $TransmissionType
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setTransmissionType($TransmissionType)
    {
      $this->TransmissionType = $TransmissionType;
      return $this;
    }

    /**
     * @return typeVehicleClass
     */
    public function getVehicleClass()
    {
      return $this->VehicleClass;
    }

    /**
     * @param typeVehicleClass $VehicleClass
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setVehicleClass($VehicleClass)
    {
      $this->VehicleClass = $VehicleClass;
      return $this;
    }

    /**
     * @return typeVehicleCategory
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param typeVehicleCategory $Category
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return typeDoorCount
     */
    public function getDoorCount()
    {
      return $this->DoorCount;
    }

    /**
     * @param typeDoorCount $DoorCount
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setDoorCount($DoorCount)
    {
      $this->DoorCount = $DoorCount;
      return $this;
    }

    /**
     * @return typeRateCode
     */
    public function getRateCode()
    {
      return $this->RateCode;
    }

    /**
     * @param typeRateCode $RateCode
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setRateCode($RateCode)
    {
      $this->RateCode = $RateCode;
      return $this;
    }

    /**
     * @return typeRateCategory
     */
    public function getRateCategory()
    {
      return $this->RateCategory;
    }

    /**
     * @param typeRateCategory $RateCategory
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setRateCategory($RateCategory)
    {
      $this->RateCategory = $RateCategory;
      return $this;
    }

    /**
     * @return typeDiscountNumber
     */
    public function getDiscountNumber()
    {
      return $this->DiscountNumber;
    }

    /**
     * @param typeDiscountNumber $DiscountNumber
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setDiscountNumber($DiscountNumber)
    {
      $this->DiscountNumber = $DiscountNumber;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getOfferRef()
    {
      return $this->OfferRef;
    }

    /**
     * @param typeRef $OfferRef
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setOfferRef($OfferRef)
    {
      $this->OfferRef = $OfferRef;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualify
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
