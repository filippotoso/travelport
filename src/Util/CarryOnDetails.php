<?php

namespace FilippoToso\Travelport\Util;

class CarryOnDetails
{

    /**
     * @var BaggageRestriction $BaggageRestriction
     */
    protected $BaggageRestriction = null;

    /**
     * @var string $ApplicableCarryOnBags
     */
    protected $ApplicableCarryOnBags = null;

    /**
     * @var typeMoney $BasePrice
     */
    protected $BasePrice = null;

    /**
     * @var typeMoney $ApproximateBasePrice
     */
    protected $ApproximateBasePrice = null;

    /**
     * @var typeMoney $Taxes
     */
    protected $Taxes = null;

    /**
     * @var typeMoney $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var typeMoney $ApproximateTotalPrice
     */
    protected $ApproximateTotalPrice = null;

    /**
     * @param BaggageRestriction $BaggageRestriction
     * @param string $ApplicableCarryOnBags
     * @param typeMoney $BasePrice
     * @param typeMoney $ApproximateBasePrice
     * @param typeMoney $Taxes
     * @param typeMoney $TotalPrice
     * @param typeMoney $ApproximateTotalPrice
     */
    public function __construct($BaggageRestriction = null, $ApplicableCarryOnBags = null, $BasePrice = null, $ApproximateBasePrice = null, $Taxes = null, $TotalPrice = null, $ApproximateTotalPrice = null)
    {
      $this->BaggageRestriction = $BaggageRestriction;
      $this->ApplicableCarryOnBags = $ApplicableCarryOnBags;
      $this->BasePrice = $BasePrice;
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      $this->Taxes = $Taxes;
      $this->TotalPrice = $TotalPrice;
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
    }

    /**
     * @return BaggageRestriction
     */
    public function getBaggageRestriction()
    {
      return $this->BaggageRestriction;
    }

    /**
     * @param BaggageRestriction $BaggageRestriction
     * @return \FilippoToso\Travelport\Util\CarryOnDetails
     */
    public function setBaggageRestriction($BaggageRestriction)
    {
      $this->BaggageRestriction = $BaggageRestriction;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplicableCarryOnBags()
    {
      return $this->ApplicableCarryOnBags;
    }

    /**
     * @param string $ApplicableCarryOnBags
     * @return \FilippoToso\Travelport\Util\CarryOnDetails
     */
    public function setApplicableCarryOnBags($ApplicableCarryOnBags)
    {
      $this->ApplicableCarryOnBags = $ApplicableCarryOnBags;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getBasePrice()
    {
      return $this->BasePrice;
    }

    /**
     * @param typeMoney $BasePrice
     * @return \FilippoToso\Travelport\Util\CarryOnDetails
     */
    public function setBasePrice($BasePrice)
    {
      $this->BasePrice = $BasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateBasePrice()
    {
      return $this->ApproximateBasePrice;
    }

    /**
     * @param typeMoney $ApproximateBasePrice
     * @return \FilippoToso\Travelport\Util\CarryOnDetails
     */
    public function setApproximateBasePrice($ApproximateBasePrice)
    {
      $this->ApproximateBasePrice = $ApproximateBasePrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param typeMoney $Taxes
     * @return \FilippoToso\Travelport\Util\CarryOnDetails
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param typeMoney $TotalPrice
     * @return \FilippoToso\Travelport\Util\CarryOnDetails
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getApproximateTotalPrice()
    {
      return $this->ApproximateTotalPrice;
    }

    /**
     * @param typeMoney $ApproximateTotalPrice
     * @return \FilippoToso\Travelport\Util\CarryOnDetails
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

}
