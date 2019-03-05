<?php

namespace FilippoToso\Travelport\Util;

class AirFareDiscount
{

    /**
     * @var float $Percentage
     */
    protected $Percentage = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typeFareDiscount $DiscountMethod
     */
    protected $DiscountMethod = null;

    /**
     * @param float $Percentage
     * @param typeMoney $Amount
     * @param typeFareDiscount $DiscountMethod
     */
    public function __construct($Percentage = null, $Amount = null, $DiscountMethod = null)
    {
      $this->Percentage = $Percentage;
      $this->Amount = $Amount;
      $this->DiscountMethod = $DiscountMethod;
    }

    /**
     * @return float
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param float $Percentage
     * @return \FilippoToso\Travelport\Util\AirFareDiscount
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param typeMoney $Amount
     * @return \FilippoToso\Travelport\Util\AirFareDiscount
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typeFareDiscount
     */
    public function getDiscountMethod()
    {
      return $this->DiscountMethod;
    }

    /**
     * @param typeFareDiscount $DiscountMethod
     * @return \FilippoToso\Travelport\Util\AirFareDiscount
     */
    public function setDiscountMethod($DiscountMethod)
    {
      $this->DiscountMethod = $DiscountMethod;
      return $this;
    }

}
