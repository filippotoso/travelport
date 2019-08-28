<?php

namespace FilippoToso\Travelport\Rail;

class VehicleDateLocation extends typeVehicleVendorLocation
{

    /**
     * @var VendorLocation[] $VendorLocation
     */
    protected $VendorLocation = null;

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
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $VendorCode
     * @param boolean $PreferredOption
     * @param anonymous4 $VendorLocationID
     * @param typeRef $Key
     * @param anonymous5 $MoreRatesToken
     * @param typeVehicleLocation $LocationType
     * @param typeIATACode $LocationCode
     * @param anonymous543 $Type
     * @param string $PickupDateTime
     * @param typeIATACode $PickupLocation
     * @param string $ReturnDateTime
     * @param typeIATACode $ReturnLocation
     * @param typeVehicleLocation $PickupLocationType
     * @param typeVehicleLocation $ReturnLocationType
     * @param string $PickupLocationNumber
     * @param string $ReturnLocationNumber
     * @param typeRef $Key
     */
    public function __construct($ProviderCode = null, $VendorCode = null, $PreferredOption = null, $VendorLocationID = null, $Key = null, $MoreRatesToken = null, $LocationType = null, $LocationCode = null, $Type = null, $PickupDateTime = null, $PickupLocation = null, $ReturnDateTime = null, $ReturnLocation = null, $PickupLocationType = null, $ReturnLocationType = null, $PickupLocationNumber = null, $ReturnLocationNumber = null)
    {
      parent::__construct($ProviderCode, $VendorCode, $PreferredOption, $VendorLocationID, $Key, $MoreRatesToken, $LocationType, $LocationCode, $Type);
      $this->PickupDateTime = $PickupDateTime;
      $this->PickupLocation = $PickupLocation;
      $this->ReturnDateTime = $ReturnDateTime;
      $this->ReturnLocation = $ReturnLocation;
      $this->PickupLocationType = $PickupLocationType;
      $this->ReturnLocationType = $ReturnLocationType;
      $this->PickupLocationNumber = $PickupLocationNumber;
      $this->ReturnLocationNumber = $ReturnLocationNumber;
      $this->Key = $Key;
    }

    /**
     * @return VendorLocation[]
     */
    public function getVendorLocation()
    {
      return $this->VendorLocation;
    }

    /**
     * @param VendorLocation[] $VendorLocation
     * @return \FilippoToso\Travelport\Rail\VehicleDateLocation
     */
    public function setVendorLocation(array $VendorLocation = null)
    {
      $this->VendorLocation = $VendorLocation;
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
     * @return \FilippoToso\Travelport\Rail\VehicleDateLocation
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
     * @return \FilippoToso\Travelport\Rail\VehicleDateLocation
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
     * @return \FilippoToso\Travelport\Rail\VehicleDateLocation
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
     * @return \FilippoToso\Travelport\Rail\VehicleDateLocation
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
     * @return \FilippoToso\Travelport\Rail\VehicleDateLocation
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
     * @return \FilippoToso\Travelport\Rail\VehicleDateLocation
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
     * @return \FilippoToso\Travelport\Rail\VehicleDateLocation
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
     * @return \FilippoToso\Travelport\Rail\VehicleDateLocation
     */
    public function setReturnLocationNumber($ReturnLocationNumber)
    {
      $this->ReturnLocationNumber = $ReturnLocationNumber;
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
     * @return \FilippoToso\Travelport\Rail\VehicleDateLocation
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
