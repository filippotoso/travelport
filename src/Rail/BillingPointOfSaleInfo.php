<?php

namespace FilippoToso\Travelport\Rail;

class BillingPointOfSaleInfo
{

    /**
     * @var string $OriginApplication
     */
    protected $OriginApplication = null;

    /**
     * @var anonymous395 $CIDBNumber
     */
    protected $CIDBNumber = null;

    /**
     * @param string $OriginApplication
     * @param anonymous395 $CIDBNumber
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
     * @return \FilippoToso\Travelport\Rail\BillingPointOfSaleInfo
     */
    public function setOriginApplication($OriginApplication)
    {
      $this->OriginApplication = $OriginApplication;
      return $this;
    }

    /**
     * @return anonymous395
     */
    public function getCIDBNumber()
    {
      return $this->CIDBNumber;
    }

    /**
     * @param anonymous395 $CIDBNumber
     * @return \FilippoToso\Travelport\Rail\BillingPointOfSaleInfo
     */
    public function setCIDBNumber($CIDBNumber)
    {
      $this->CIDBNumber = $CIDBNumber;
      return $this;
    }

}
