<?php

namespace FilippoToso\Travelport\Air;

class MCOPriceData
{

    /**
     * @var typeTaxInfo[] $TaxInfo
     */
    protected $TaxInfo = null;

    /**
     * @var Commission $Commission
     */
    protected $Commission = null;

    /**
     * @var typeMoney $MCOAmount
     */
    protected $MCOAmount = null;

    /**
     * @var typeMoney $MCOEquivalentFare
     */
    protected $MCOEquivalentFare = null;

    /**
     * @var typeMoney $MCOTotalAmount
     */
    protected $MCOTotalAmount = null;

    /**
     * @param typeMoney $MCOAmount
     * @param typeMoney $MCOEquivalentFare
     * @param typeMoney $MCOTotalAmount
     */
    public function __construct($MCOAmount = null, $MCOEquivalentFare = null, $MCOTotalAmount = null)
    {
      $this->MCOAmount = $MCOAmount;
      $this->MCOEquivalentFare = $MCOEquivalentFare;
      $this->MCOTotalAmount = $MCOTotalAmount;
    }

    /**
     * @return typeTaxInfo[]
     */
    public function getTaxInfo()
    {
      return $this->TaxInfo;
    }

    /**
     * @param typeTaxInfo[] $TaxInfo
     * @return \FilippoToso\Travelport\Air\MCOPriceData
     */
    public function setTaxInfo(array $TaxInfo = null)
    {
      $this->TaxInfo = $TaxInfo;
      return $this;
    }

    /**
     * @return Commission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param Commission $Commission
     * @return \FilippoToso\Travelport\Air\MCOPriceData
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMCOAmount()
    {
      return $this->MCOAmount;
    }

    /**
     * @param typeMoney $MCOAmount
     * @return \FilippoToso\Travelport\Air\MCOPriceData
     */
    public function setMCOAmount($MCOAmount)
    {
      $this->MCOAmount = $MCOAmount;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMCOEquivalentFare()
    {
      return $this->MCOEquivalentFare;
    }

    /**
     * @param typeMoney $MCOEquivalentFare
     * @return \FilippoToso\Travelport\Air\MCOPriceData
     */
    public function setMCOEquivalentFare($MCOEquivalentFare)
    {
      $this->MCOEquivalentFare = $MCOEquivalentFare;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getMCOTotalAmount()
    {
      return $this->MCOTotalAmount;
    }

    /**
     * @param typeMoney $MCOTotalAmount
     * @return \FilippoToso\Travelport\Air\MCOPriceData
     */
    public function setMCOTotalAmount($MCOTotalAmount)
    {
      $this->MCOTotalAmount = $MCOTotalAmount;
      return $this;
    }

}
