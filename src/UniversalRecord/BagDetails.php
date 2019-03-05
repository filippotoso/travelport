<?php

namespace FilippoToso\Travelport\UniversalRecord;

class BagDetails
{

    /**
     * @var BaggageRestriction $BaggageRestriction
     */
    protected $BaggageRestriction = null;

    /**
     * @var AvailableDiscount $AvailableDiscount
     */
    protected $AvailableDiscount = null;

    /**
     * @var string $ApplicableBags
     */
    protected $ApplicableBags = null;

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
     * @param AvailableDiscount $AvailableDiscount
     * @param string $ApplicableBags
     * @param typeMoney $BasePrice
     * @param typeMoney $ApproximateBasePrice
     * @param typeMoney $Taxes
     * @param typeMoney $TotalPrice
     * @param typeMoney $ApproximateTotalPrice
     */
    public function __construct($BaggageRestriction = null, $AvailableDiscount = null, $ApplicableBags = null, $BasePrice = null, $ApproximateBasePrice = null, $Taxes = null, $TotalPrice = null, $ApproximateTotalPrice = null)
    {
      $this->BaggageRestriction = $BaggageRestriction;
      $this->AvailableDiscount = $AvailableDiscount;
      $this->ApplicableBags = $ApplicableBags;
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
     * @return \FilippoToso\Travelport\UniversalRecord\BagDetails
     */
    public function setBaggageRestriction($BaggageRestriction)
    {
      $this->BaggageRestriction = $BaggageRestriction;
      return $this;
    }

    /**
     * @return AvailableDiscount
     */
    public function getAvailableDiscount()
    {
      return $this->AvailableDiscount;
    }

    /**
     * @param AvailableDiscount $AvailableDiscount
     * @return \FilippoToso\Travelport\UniversalRecord\BagDetails
     */
    public function setAvailableDiscount($AvailableDiscount)
    {
      $this->AvailableDiscount = $AvailableDiscount;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplicableBags()
    {
      return $this->ApplicableBags;
    }

    /**
     * @param string $ApplicableBags
     * @return \FilippoToso\Travelport\UniversalRecord\BagDetails
     */
    public function setApplicableBags($ApplicableBags)
    {
      $this->ApplicableBags = $ApplicableBags;
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
     * @return \FilippoToso\Travelport\UniversalRecord\BagDetails
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
     * @return \FilippoToso\Travelport\UniversalRecord\BagDetails
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
     * @return \FilippoToso\Travelport\UniversalRecord\BagDetails
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
     * @return \FilippoToso\Travelport\UniversalRecord\BagDetails
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
     * @return \FilippoToso\Travelport\UniversalRecord\BagDetails
     */
    public function setApproximateTotalPrice($ApproximateTotalPrice)
    {
      $this->ApproximateTotalPrice = $ApproximateTotalPrice;
      return $this;
    }

}
