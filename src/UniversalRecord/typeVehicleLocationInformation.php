<?php

namespace FilippoToso\Travelport\UniversalRecord;

class typeVehicleLocationInformation
{

    /**
     * @var typeStructuredAddress $Address
     */
    protected $Address = null;

    /**
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $OperationTime
     */
    protected $OperationTime = null;

    /**
     * @var string $LocationName
     */
    protected $LocationName = null;

    /**
     * @var string $CounterLocation
     */
    protected $CounterLocation = null;

    /**
     * @var typeSupplierCode $VendorCode
     */
    protected $VendorCode = null;

    /**
     * @var typeIATACode $LocationCode
     */
    protected $LocationCode = null;

    /**
     * @var typeVehicleLocation $LocationType
     */
    protected $LocationType = null;

    /**
     * @var StringLength3 $LocationNumber
     */
    protected $LocationNumber = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param string $OperationTime
     * @param string $LocationName
     * @param string $CounterLocation
     * @param typeSupplierCode $VendorCode
     * @param typeIATACode $LocationCode
     * @param typeVehicleLocation $LocationType
     * @param StringLength3 $LocationNumber
     */
    public function __construct($PhoneNumber = null, $OperationTime = null, $LocationName = null, $CounterLocation = null, $VendorCode = null, $LocationCode = null, $LocationType = null, $LocationNumber = null)
    {
      $this->PhoneNumber = $PhoneNumber;
      $this->OperationTime = $OperationTime;
      $this->LocationName = $LocationName;
      $this->CounterLocation = $CounterLocation;
      $this->VendorCode = $VendorCode;
      $this->LocationCode = $LocationCode;
      $this->LocationType = $LocationType;
      $this->LocationNumber = $LocationNumber;
    }

    /**
     * @return typeStructuredAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeStructuredAddress $Address
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleLocationInformation
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleLocationInformation
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperationTime()
    {
      return $this->OperationTime;
    }

    /**
     * @param string $OperationTime
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleLocationInformation
     */
    public function setOperationTime($OperationTime)
    {
      $this->OperationTime = $OperationTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationName()
    {
      return $this->LocationName;
    }

    /**
     * @param string $LocationName
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleLocationInformation
     */
    public function setLocationName($LocationName)
    {
      $this->LocationName = $LocationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCounterLocation()
    {
      return $this->CounterLocation;
    }

    /**
     * @param string $CounterLocation
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleLocationInformation
     */
    public function setCounterLocation($CounterLocation)
    {
      $this->CounterLocation = $CounterLocation;
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleLocationInformation
     */
    public function setVendorCode($VendorCode)
    {
      $this->VendorCode = $VendorCode;
      return $this;
    }

    /**
     * @return typeIATACode
     */
    public function getLocationCode()
    {
      return $this->LocationCode;
    }

    /**
     * @param typeIATACode $LocationCode
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleLocationInformation
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
      return $this;
    }

    /**
     * @return typeVehicleLocation
     */
    public function getLocationType()
    {
      return $this->LocationType;
    }

    /**
     * @param typeVehicleLocation $LocationType
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleLocationInformation
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
      return $this;
    }

    /**
     * @return StringLength3
     */
    public function getLocationNumber()
    {
      return $this->LocationNumber;
    }

    /**
     * @param StringLength3 $LocationNumber
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleLocationInformation
     */
    public function setLocationNumber($LocationNumber)
    {
      $this->LocationNumber = $LocationNumber;
      return $this;
    }

}
