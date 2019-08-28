<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VendorLocation extends typeVendorLocation
{

    /**
     * @var Distance $Distance
     */
    protected $Distance = null;

    /**
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $VendorCode
     * @param boolean $PreferredOption
     * @param anonymous7 $VendorLocationID
     * @param typeRef $Key
     * @param anonymous8 $MoreRatesToken
     * @param Distance $Distance
     */
    public function __construct($ProviderCode = null, $VendorCode = null, $PreferredOption = null, $VendorLocationID = null, $Key = null, $MoreRatesToken = null, $Distance = null)
    {
      parent::__construct($ProviderCode, $VendorCode, $PreferredOption, $VendorLocationID, $Key, $MoreRatesToken);
      $this->Distance = $Distance;
    }

    /**
     * @return Distance
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param Distance $Distance
     * @return \FilippoToso\Travelport\UniversalRecord\VendorLocation
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

}
