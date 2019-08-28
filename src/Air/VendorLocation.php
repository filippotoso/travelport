<?php

namespace FilippoToso\Travelport\Air;

class VendorLocation extends typeVendorLocation
{

    /**
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $VendorCode
     * @param boolean $PreferredOption
     * @param anonymous7 $VendorLocationID
     * @param typeRef $Key
     * @param anonymous8 $MoreRatesToken
     */
    public function __construct($ProviderCode = null, $VendorCode = null, $PreferredOption = null, $VendorLocationID = null, $Key = null, $MoreRatesToken = null)
    {
      parent::__construct($ProviderCode, $VendorCode, $PreferredOption, $VendorLocationID, $Key, $MoreRatesToken);
    }

}
