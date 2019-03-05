<?php

namespace FilippoToso\Travelport\Util;

class VehicleUpsellOfferSearchCriteria
{

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
     * @param typeVehicleClass $VehicleClass
     * @param typeVehicleCategory $Category
     * @param boolean $AirConditioning
     * @param typeVehicleTransmission $TransmissionType
     * @param typeDoorCount $DoorCount
     */
    public function __construct($VehicleClass = null, $Category = null, $AirConditioning = null, $TransmissionType = null, $DoorCount = null)
    {
      $this->VehicleClass = $VehicleClass;
      $this->Category = $Category;
      $this->AirConditioning = $AirConditioning;
      $this->TransmissionType = $TransmissionType;
      $this->DoorCount = $DoorCount;
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOfferSearchCriteria
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOfferSearchCriteria
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOfferSearchCriteria
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOfferSearchCriteria
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
     * @return \FilippoToso\Travelport\Util\VehicleUpsellOfferSearchCriteria
     */
    public function setDoorCount($DoorCount)
    {
      $this->DoorCount = $DoorCount;
      return $this;
    }

}
