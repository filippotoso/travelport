<?php

namespace FilippoToso\Travelport\Util;

class VehicleUpsellQualifySearchCriteria extends UpsellSearchCriteria
{

    /**
     * @var typeSupplierCode $VendorCode
     */
    protected $VendorCode = null;

    /**
     * @var typeVehicleClass $VehicleClass
     */
    protected $VehicleClass = null;

    /**
     * @var typeVehicleCategory $Category
     */
    protected $Category = null;

    /**
     * @var boolean $AirConditioning
     */
    protected $AirConditioning = null;

    /**
     * @var typeVehicleTransmission $TransmissionType
     */
    protected $TransmissionType = null;

    /**
     * @var typeDoorCount $DoorCount
     */
    protected $DoorCount = null;

    /**
     * @var typeRateCode $RateCode
     */
    protected $RateCode = null;

    /**
     * @var typeDiscountNumber $DiscountNumber
     */
    protected $DiscountNumber = null;

    /**
     * @param EffectiveDate $EffectiveDate
     * @param ExpirationDate $ExpirationDate
     * @param typeSupplierCode $VendorCode
     * @param typeVehicleClass $VehicleClass
     * @param typeVehicleCategory $Category
     * @param boolean $AirConditioning
     * @param typeVehicleTransmission $TransmissionType
     * @param typeDoorCount $DoorCount
     * @param typeRateCode $RateCode
     * @param typeDiscountNumber $DiscountNumber
     */
    public function __construct($EffectiveDate = null, $ExpirationDate = null, $VendorCode = null, $VehicleClass = null, $Category = null, $AirConditioning = null, $TransmissionType = null, $DoorCount = null, $RateCode = null, $DiscountNumber = null)
    {
      parent::__construct($EffectiveDate, $ExpirationDate);
      $this->VendorCode = $VendorCode;
      $this->VehicleClass = $VehicleClass;
      $this->Category = $Category;
      $this->AirConditioning = $AirConditioning;
      $this->TransmissionType = $TransmissionType;
      $this->DoorCount = $DoorCount;
      $this->RateCode = $RateCode;
      $this->DiscountNumber = $DiscountNumber;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualifySearchCriteria
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualifySearchCriteria
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualifySearchCriteria
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualifySearchCriteria
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualifySearchCriteria
     */
    public function setTransmissionType($TransmissionType)
    {
      $this->TransmissionType = $TransmissionType;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualifySearchCriteria
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualifySearchCriteria
     */
    public function setRateCode($RateCode)
    {
      $this->RateCode = $RateCode;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellQualifySearchCriteria
     */
    public function setDiscountNumber($DiscountNumber)
    {
      $this->DiscountNumber = $DiscountNumber;
      return $this;
    }

}
