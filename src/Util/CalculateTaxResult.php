<?php

namespace FilippoToso\Travelport\Util;

class CalculateTaxResult
{

    /**
     * @var TaxCalcInfo $TaxCalcInfo
     */
    protected $TaxCalcInfo = null;

    /**
     * @var typeMoney $TotalBaseFare
     */
    protected $TotalBaseFare = null;

    /**
     * @var typeMoney $TotalTax
     */
    protected $TotalTax = null;

    /**
     * @var typeMoney $TotalFare
     */
    protected $TotalFare = null;

    /**
     * @param TaxCalcInfo $TaxCalcInfo
     * @param typeMoney $TotalBaseFare
     * @param typeMoney $TotalTax
     * @param typeMoney $TotalFare
     */
    public function __construct($TaxCalcInfo = null, $TotalBaseFare = null, $TotalTax = null, $TotalFare = null)
    {
      $this->TaxCalcInfo = $TaxCalcInfo;
      $this->TotalBaseFare = $TotalBaseFare;
      $this->TotalTax = $TotalTax;
      $this->TotalFare = $TotalFare;
    }

    /**
     * @return TaxCalcInfo
     */
    public function getTaxCalcInfo()
    {
      return $this->TaxCalcInfo;
    }

    /**
     * @param TaxCalcInfo $TaxCalcInfo
     * @return \FilippoToso\Travelport\Util\CalculateTaxResult
     */
    public function setTaxCalcInfo($TaxCalcInfo)
    {
      $this->TaxCalcInfo = $TaxCalcInfo;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalBaseFare()
    {
      return $this->TotalBaseFare;
    }

    /**
     * @param typeMoney $TotalBaseFare
     * @return \FilippoToso\Travelport\Util\CalculateTaxResult
     */
    public function setTotalBaseFare($TotalBaseFare)
    {
      $this->TotalBaseFare = $TotalBaseFare;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param typeMoney $TotalTax
     * @return \FilippoToso\Travelport\Util\CalculateTaxResult
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalFare()
    {
      return $this->TotalFare;
    }

    /**
     * @param typeMoney $TotalFare
     * @return \FilippoToso\Travelport\Util\CalculateTaxResult
     */
    public function setTotalFare($TotalFare)
    {
      $this->TotalFare = $TotalFare;
      return $this;
    }

}
