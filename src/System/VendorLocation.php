<?php

namespace FilippoToso\Travelport\System;

class VendorLocation extends typeVendorLocation
{

    /**
     * @param typeProviderCode $ProviderCode
     * @param typeSupplierCode $VendorCode
     * @param anonymous4 $VendorLocationID
     * @param typeRef $Key
     */
    public function __construct($ProviderCode = null, $VendorCode = null, $VendorLocationID = null, $Key = null)
    {
      parent::__construct($ProviderCode, $VendorCode, $VendorLocationID, $Key);
    }

}
