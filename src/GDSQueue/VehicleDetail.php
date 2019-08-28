<?php

namespace FilippoToso\Travelport\GDSQueue;

class VehicleDetail
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $SupplierCode
     */
    protected $SupplierCode = null;

    /**
     * @var string $PassengerCount
     */
    protected $PassengerCount = null;

    /**
     * @var string $NumberOfDoors
     */
    protected $NumberOfDoors = null;

    /**
     * @var string $BagCount
     */
    protected $BagCount = null;

    /**
     * @var typeVehicleClass $Class
     */
    protected $Class = null;

    /**
     * @var typeVehicleCategory $Category
     */
    protected $Category = null;

    /**
     * @var boolean $AirConditioning
     */
    protected $AirConditioning = null;

    /**
     * @var typeVehicleTransmission $Transmission
     */
    protected $Transmission = null;

    /**
     * @var string $MakeModel
     */
    protected $MakeModel = null;

    /**
     * @var typeFuel $FuelType
     */
    protected $FuelType = null;

    /**
     * @var anonymous572 $AcrissVehicleCode
     */
    protected $AcrissVehicleCode = null;

    /**
     * @var boolean $PreferredOption
     */
    protected $PreferredOption = null;

    /**
     * @param string $Code
     * @param string $SupplierCode
     * @param string $PassengerCount
     * @param string $NumberOfDoors
     * @param string $BagCount
     * @param typeVehicleClass $Class
     * @param typeVehicleCategory $Category
     * @param boolean $AirConditioning
     * @param typeVehicleTransmission $Transmission
     * @param string $MakeModel
     * @param typeFuel $FuelType
     * @param anonymous572 $AcrissVehicleCode
     * @param boolean $PreferredOption
     */
    public function __construct($Code = null, $SupplierCode = null, $PassengerCount = null, $NumberOfDoors = null, $BagCount = null, $Class = null, $Category = null, $AirConditioning = null, $Transmission = null, $MakeModel = null, $FuelType = null, $AcrissVehicleCode = null, $PreferredOption = null)
    {
      $this->Code = $Code;
      $this->SupplierCode = $SupplierCode;
      $this->PassengerCount = $PassengerCount;
      $this->NumberOfDoors = $NumberOfDoors;
      $this->BagCount = $BagCount;
      $this->Class = $Class;
      $this->Category = $Category;
      $this->AirConditioning = $AirConditioning;
      $this->Transmission = $Transmission;
      $this->MakeModel = $MakeModel;
      $this->FuelType = $FuelType;
      $this->AcrissVehicleCode = $AcrissVehicleCode;
      $this->PreferredOption = $PreferredOption;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerCount()
    {
      return $this->PassengerCount;
    }

    /**
     * @param string $PassengerCount
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setPassengerCount($PassengerCount)
    {
      $this->PassengerCount = $PassengerCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumberOfDoors()
    {
      return $this->NumberOfDoors;
    }

    /**
     * @param string $NumberOfDoors
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setNumberOfDoors($NumberOfDoors)
    {
      $this->NumberOfDoors = $NumberOfDoors;
      return $this;
    }

    /**
     * @return string
     */
    public function getBagCount()
    {
      return $this->BagCount;
    }

    /**
     * @param string $BagCount
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setBagCount($BagCount)
    {
      $this->BagCount = $BagCount;
      return $this;
    }

    /**
     * @return typeVehicleClass
     */
    public function getClass()
    {
      return $this->Class;
    }

    /**
     * @param typeVehicleClass $Class
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setClass($Class)
    {
      $this->Class = $Class;
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setAirConditioning($AirConditioning)
    {
      $this->AirConditioning = $AirConditioning;
      return $this;
    }

    /**
     * @return typeVehicleTransmission
     */
    public function getTransmission()
    {
      return $this->Transmission;
    }

    /**
     * @param typeVehicleTransmission $Transmission
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setTransmission($Transmission)
    {
      $this->Transmission = $Transmission;
      return $this;
    }

    /**
     * @return string
     */
    public function getMakeModel()
    {
      return $this->MakeModel;
    }

    /**
     * @param string $MakeModel
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setMakeModel($MakeModel)
    {
      $this->MakeModel = $MakeModel;
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
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setFuelType($FuelType)
    {
      $this->FuelType = $FuelType;
      return $this;
    }

    /**
     * @return anonymous572
     */
    public function getAcrissVehicleCode()
    {
      return $this->AcrissVehicleCode;
    }

    /**
     * @param anonymous572 $AcrissVehicleCode
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setAcrissVehicleCode($AcrissVehicleCode)
    {
      $this->AcrissVehicleCode = $AcrissVehicleCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferredOption()
    {
      return $this->PreferredOption;
    }

    /**
     * @param boolean $PreferredOption
     * @return \FilippoToso\Travelport\GDSQueue\VehicleDetail
     */
    public function setPreferredOption($PreferredOption)
    {
      $this->PreferredOption = $PreferredOption;
      return $this;
    }

}
