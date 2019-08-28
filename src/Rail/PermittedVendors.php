<?php

namespace FilippoToso\Travelport\Rail;

class PermittedVendors
{

    /**
     * @var Vendor $Vendor
     */
    protected $Vendor = null;

    /**
     * @param Vendor $Vendor
     */
    public function __construct($Vendor = null)
    {
      $this->Vendor = $Vendor;
    }

    /**
     * @return Vendor
     */
    public function getVendor()
    {
      return $this->Vendor;
    }

    /**
     * @param Vendor $Vendor
     * @return \FilippoToso\Travelport\Rail\PermittedVendors
     */
    public function setVendor($Vendor)
    {
      $this->Vendor = $Vendor;
      return $this;
    }

}
