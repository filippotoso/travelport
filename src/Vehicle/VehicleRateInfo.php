<?php

namespace FilippoToso\Travelport\Vehicle;

class VehicleRateInfo
{

    /**
     * @var string $TourCode
     */
    protected $TourCode = null;

    /**
     * @var typeDiscountNumber $DiscountNumber
     */
    protected $DiscountNumber = null;

    /**
     * @var string $PromotionalCode
     */
    protected $PromotionalCode = null;

    /**
     * @param string $TourCode
     * @param typeDiscountNumber $DiscountNumber
     * @param string $PromotionalCode
     */
    public function __construct($TourCode = null, $DiscountNumber = null, $PromotionalCode = null)
    {
      $this->TourCode = $TourCode;
      $this->DiscountNumber = $DiscountNumber;
      $this->PromotionalCode = $PromotionalCode;
    }

    /**
     * @return string
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param string $TourCode
     * @return \FilippoToso\Travelport\Vehicle\VehicleRateInfo
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

    /**
     * @return typeDiscountNumber
     */
    public function getDiscountNumber()
    {
      return $this->DiscountNumber;
    }

    /**
     * @param typeDiscountNumber $DiscountNumber
     * @return \FilippoToso\Travelport\Vehicle\VehicleRateInfo
     */
    public function setDiscountNumber($DiscountNumber)
    {
      $this->DiscountNumber = $DiscountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotionalCode()
    {
      return $this->PromotionalCode;
    }

    /**
     * @param string $PromotionalCode
     * @return \FilippoToso\Travelport\Vehicle\VehicleRateInfo
     */
    public function setPromotionalCode($PromotionalCode)
    {
      $this->PromotionalCode = $PromotionalCode;
      return $this;
    }

}
