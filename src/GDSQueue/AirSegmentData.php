<?php

namespace FilippoToso\Travelport\GDSQueue;

class AirSegmentData
{

    /**
     * @var AirSegmentRef $AirSegmentRef
     */
    protected $AirSegmentRef = null;

    /**
     * @var BaggageAllowance $BaggageAllowance
     */
    protected $BaggageAllowance = null;

    /**
     * @var Brand $Brand
     */
    protected $Brand = null;

    /**
     * @var string $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var typeClassOfService $ClassOfService
     */
    protected $ClassOfService = null;

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @param BaggageAllowance $BaggageAllowance
     * @param Brand $Brand
     * @param string $CabinClass
     * @param typeClassOfService $ClassOfService
     */
    public function __construct($AirSegmentRef = null, $BaggageAllowance = null, $Brand = null, $CabinClass = null, $ClassOfService = null)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      $this->BaggageAllowance = $BaggageAllowance;
      $this->Brand = $Brand;
      $this->CabinClass = $CabinClass;
      $this->ClassOfService = $ClassOfService;
    }

    /**
     * @return AirSegmentRef
     */
    public function getAirSegmentRef()
    {
      return $this->AirSegmentRef;
    }

    /**
     * @param AirSegmentRef $AirSegmentRef
     * @return \FilippoToso\Travelport\GDSQueue\AirSegmentData
     */
    public function setAirSegmentRef($AirSegmentRef)
    {
      $this->AirSegmentRef = $AirSegmentRef;
      return $this;
    }

    /**
     * @return BaggageAllowance
     */
    public function getBaggageAllowance()
    {
      return $this->BaggageAllowance;
    }

    /**
     * @param BaggageAllowance $BaggageAllowance
     * @return \FilippoToso\Travelport\GDSQueue\AirSegmentData
     */
    public function setBaggageAllowance($BaggageAllowance)
    {
      $this->BaggageAllowance = $BaggageAllowance;
      return $this;
    }

    /**
     * @return Brand
     */
    public function getBrand()
    {
      return $this->Brand;
    }

    /**
     * @param Brand $Brand
     * @return \FilippoToso\Travelport\GDSQueue\AirSegmentData
     */
    public function setBrand($Brand)
    {
      $this->Brand = $Brand;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param string $CabinClass
     * @return \FilippoToso\Travelport\GDSQueue\AirSegmentData
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return typeClassOfService
     */
    public function getClassOfService()
    {
      return $this->ClassOfService;
    }

    /**
     * @param typeClassOfService $ClassOfService
     * @return \FilippoToso\Travelport\GDSQueue\AirSegmentData
     */
    public function setClassOfService($ClassOfService)
    {
      $this->ClassOfService = $ClassOfService;
      return $this;
    }

}
