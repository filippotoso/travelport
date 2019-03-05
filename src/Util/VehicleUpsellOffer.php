<?php

namespace FilippoToso\Travelport\Util;

class VehicleUpsellOffer
{

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
     * @var typeFuel $FuelType
     */
    protected $FuelType = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param boolean $AirConditioning
     * @param typeVehicleTransmission $TransmissionType
     * @param typeVehicleClass $VehicleClass
     * @param typeVehicleCategory $Category
     * @param typeDoorCount $DoorCount
     * @param typeRateCode $RateCode
     * @param typeRateCategory $RateCategory
     * @param typeDiscountNumber $DiscountNumber
     * @param typeFuel $FuelType
     * @param typeRef $Key
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($AirConditioning = null, $TransmissionType = null, $VehicleClass = null, $Category = null, $DoorCount = null, $RateCode = null, $RateCategory = null, $DiscountNumber = null, $FuelType = null, $Key = null, $ElStat = null, $KeyOverride = null)
    {
      $this->AirConditioning = $AirConditioning;
      $this->TransmissionType = $TransmissionType;
      $this->VehicleClass = $VehicleClass;
      $this->Category = $Category;
      $this->DoorCount = $DoorCount;
      $this->RateCode = $RateCode;
      $this->RateCategory = $RateCategory;
      $this->DiscountNumber = $DiscountNumber;
      $this->FuelType = $FuelType;
      $this->Key = $Key;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
     */
    public function setDiscountNumber($DiscountNumber)
    {
      $this->DiscountNumber = $DiscountNumber;
      return $this;
    }

    /**
     * @return typeFuel
     */
    public function getFuelType()
    {
      return $this->FuelType;
    }

    /**
     * @param typeFuel $FuelType
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
     */
    public function setFuelType($FuelType)
    {
      $this->FuelType = $FuelType;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOffer
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
