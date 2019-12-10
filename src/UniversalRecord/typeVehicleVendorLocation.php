<?php

namespace FilippoToso\Travelport\UniversalRecord;

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
     * @var anonymous1085 $Type
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
     * @param anonymous1085 $Type
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleVendorLocation
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
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleVendorLocation
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
      return $this;
    }

    /**
     * @return anonymous1085
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous1085 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\typeVehicleVendorLocation
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
