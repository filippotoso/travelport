<?php

namespace FilippoToso\Travelport\Vehicle;

class BillingPointOfSaleInfo
{

    /**
     * @var string $OriginApplication
     */
    protected $OriginApplication = null;

    /**
     * @var anonymous398 $CIDBNumber
     */
    protected $CIDBNumber = null;

    /**
     * @param string $OriginApplication
     * @param anonymous398 $CIDBNumber
     */
    public function __construct($OriginApplication = null, $CIDBNumber = null)
    {
      $this->OriginApplication = $OriginApplication;
      $this->CIDBNumber = $CIDBNumber;
    }

    /**
     * @return string
     */
    public function getOriginApplication()
    {
      return $this->OriginApplication;
    }

    /**
     * @param string $OriginApplication
     * @return \FilippoToso\Travelport\Vehicle\BillingPointOfSaleInfo
     */
    public function setOriginApplication($OriginApplication)
    {
      $this->OriginApplication = $OriginApplication;
      return $this;
    }

    /**
     * @return anonymous398
     */
    public function getCIDBNumber()
    {
      return $this->CIDBNumber;
    }

    /**
     * @param anonymous398 $CIDBNumber
     * @return \FilippoToso\Travelport\Vehicle\BillingPointOfSaleInfo
     */
    public function setCIDBNumber($CIDBNumber)
    {
      $this->CIDBNumber = $CIDBNumber;
      return $this;
    }

}
