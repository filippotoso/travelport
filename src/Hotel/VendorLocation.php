<?php

namespace FilippoToso\Travelport\Hotel;

class VendorLocation extends typeVendorLocation
{

    /**
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $VendorCode
     * @param boolean $PreferredOption
     * @param anonymous4 $VendorLocationID
     * @param typeRef $Key
     * @param anonymous5 $MoreRatesToken
     */
    public function __construct($ProviderCode, $VendorCode, $PreferredOption, $VendorLocationID, $Key, $MoreRatesToken)
    {
      parent::__construct($ProviderCode, $VendorCode, $PreferredOption, $VendorLocationID, $Key, $MoreRatesToken);
    }

}
