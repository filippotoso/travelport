<?php

namespace FilippoToso\Travelport\Vehicle;

class typeVehicleVendorLocation extends typeVendorLocation
{

    /**
     * @var typeVehicleLocation $LocationType
     */
    protected $LocationType = null;

    /**
     * @var typeIATACode $LocationCode
     */
    protected $LocationCode = null;

    /**
     * @var anonymous546 $Type
     */
    protected $Type = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $VendorCode
     * @param boolean $PreferredOption
     * @param anonymous7 $VendorLocationID
     * @param typeRef $Key
     * @param anonymous8 $MoreRatesToken
     * @param typeVehicleLocation $LocationType
     * @param typeIATACode $LocationCode
     * @param anonymous546 $Type
     */
    public function __construct($ProviderCode = null, $VendorCode = null, $PreferredOption = null, $VendorLocationID = null, $Key = null, $MoreRatesToken = null, $LocationType = null, $LocationCode = null, $Type = null)
    {
      parent::__construct($ProviderCode, $VendorCode, $PreferredOption, $VendorLocationID, $Key, $MoreRatesToken);
      $this->LocationType = $LocationType;
      $this->LocationCode = $LocationCode;
      $this->Type = $Type;
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
     * @return \FilippoToso\Travelport\Vehicle\typeVehicleVendorLocation
     */
    public function setLocationType($LocationType)
    {
      $this->LocationType = $LocationType;
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
     * @return \FilippoToso\Travelport\Vehicle\typeVehicleVendorLocation
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
      return $this;
    }

    /**
     * @return anonymous546
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous546 $Type
     * @return \FilippoToso\Travelport\Vehicle\typeVehicleVendorLocation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
