<?php

namespace FilippoToso\Travelport\Rail;

class AirExchangeBundle
{

    /**
     * @var AirExchangeInfo $AirExchangeInfo
     */
    protected $AirExchangeInfo = null;

    /**
     * @var AirPricingInfoRef $AirPricingInfoRef
     */
    protected $AirPricingInfoRef = null;

    /**
     * @var typeTaxInfo $TaxInfo
     */
    protected $TaxInfo = null;

    /**
     * @var Penalty $Penalty
     */
    protected $Penalty = null;

    /**
     * @param AirExchangeInfo $AirExchangeInfo
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @param typeTaxInfo $TaxInfo
     * @param Penalty $Penalty
     */
    public function __construct($AirExchangeInfo = null, $AirPricingInfoRef = null, $TaxInfo = null, $Penalty = null)
    {
      $this->AirExchangeInfo = $AirExchangeInfo;
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      $this->TaxInfo = $TaxInfo;
      $this->Penalty = $Penalty;
    }

    /**
     * @return AirExchangeInfo
     */
    public function getAirExchangeInfo()
    {
      return $this->AirExchangeInfo;
    }

    /**
     * @param AirExchangeInfo $AirExchangeInfo
     * @return \FilippoToso\Travelport\Rail\AirExchangeBundle
     */
    public function setAirExchangeInfo($AirExchangeInfo)
    {
      $this->AirExchangeInfo = $AirExchangeInfo;
      return $this;
    }

    /**
     * @return AirPricingInfoRef
     */
    public function getAirPricingInfoRef()
    {
      return $this->AirPricingInfoRef;
    }

    /**
     * @param AirPricingInfoRef $AirPricingInfoRef
     * @return \FilippoToso\Travelport\Rail\AirExchangeBundle
     */
    public function setAirPricingInfoRef($AirPricingInfoRef)
    {
      $this->AirPricingInfoRef = $AirPricingInfoRef;
      return $this;
    }

    /**
     * @return typeTaxInfo
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfo $TaxInfo
     * @return \FilippoToso\Travelport\Rail\AirExchangeBundle
     */
    public function setTaxInfo($TaxInfo)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return Penalty
     */
    public function getPenalty()
    {
      return $this->Penalty;
    }

    /**
     * @param Penalty $Penalty
     * @return \FilippoToso\Travelport\Rail\AirExchangeBundle
     */
    public function setPenalty($Penalty)
    {
      $this->Penalty = $Penalty;
      return $this;
    }

}
