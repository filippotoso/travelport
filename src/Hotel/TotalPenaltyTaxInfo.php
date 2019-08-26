<?php

namespace FilippoToso\Travelport\Hotel;

class TotalPenaltyTaxInfo
{

    /**
     * @var typeTax[] $PenaltyTaxInfo
     */
    protected $PenaltyTaxInfo = null;

    /**
     * @var typeMoney $TotalPenaltyTax
     */
    protected $TotalPenaltyTax = null;

    /**
     * @param typeMoney $TotalPenaltyTax
     */
    public function __construct($TotalPenaltyTax)
    {
      $this->TotalPenaltyTax = $TotalPenaltyTax;
    }

    /**
     * @return typeTax[]
     */
    public function getPenaltyTaxInfo()
    {
      return $this->PenaltyTaxInfo;
    }

    /**
     * @param typeTax[] $PenaltyTaxInfo
     * @return \FilippoToso\Travelport\Hotel\TotalPenaltyTaxInfo
     */
    public function setPenaltyTaxInfo(array $PenaltyTaxInfo = null)
    {
      $this->PenaltyTaxInfo = $PenaltyTaxInfo;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPenaltyTax()
    {
      return $this->TotalPenaltyTax;
    }

    /**
     * @param typeMoney $TotalPenaltyTax
     * @return \FilippoToso\Travelport\Hotel\TotalPenaltyTaxInfo
     */
    public function setTotalPenaltyTax($TotalPenaltyTax)
    {
      $this->TotalPenaltyTax = $TotalPenaltyTax;
      return $this;
    }

}
