<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VehicleTypeIdentifier
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
     * @var typeFuel $FuelType
     */
    protected $FuelType = null;

    /**
     * @param boolean $AirConditioning
     * @param typeVehicleTransmission $TransmissionType
     * @param typeVehicleClass $VehicleClass
     * @param typeVehicleCategory $Category
     * @param typeDoorCount $DoorCount
     * @param typeFuel $FuelType
     */
    public function __construct($AirConditioning = null, $TransmissionType = null, $VehicleClass = null, $Category = null, $DoorCount = null, $FuelType = null)
    {
      $this->AirConditioning = $AirConditioning;
      $this->TransmissionType = $TransmissionType;
      $this->VehicleClass = $VehicleClass;
      $this->Category = $Category;
      $this->DoorCount = $DoorCount;
      $this->FuelType = $FuelType;
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
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleTypeIdentifier
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
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleTypeIdentifier
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
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleTypeIdentifier
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
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleTypeIdentifier
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
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleTypeIdentifier
     */
    public function setDoorCount($DoorCount)
    {
      $this->DoorCount = $DoorCount;
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
     * @return \FilippoToso\Travelport\UniversalRecord\VehicleTypeIdentifier
     */
    public function setFuelType($FuelType)
    {
      $this->FuelType = $FuelType;
      return $this;
    }

}
