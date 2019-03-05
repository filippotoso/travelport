<?php

namespace FilippoToso\Travelport\Air;

class PriceRange
{

    /**
     * @var boolean $DefaultCurrency
     */
    protected $DefaultCurrency = null;

    /**
     * @var typeMoney $StartPrice
     */
    protected $StartPrice = null;

    /**
     * @var typeMoney $EndPrice
     */
    protected $EndPrice = null;

    /**
     * @param boolean $DefaultCurrency
     * @param typeMoney $StartPrice
     * @param typeMoney $EndPrice
     */
    public function __construct($DefaultCurrency = null, $StartPrice = null, $EndPrice = null)
    {
      $this->DefaultCurrency = $DefaultCurrency;
      $this->StartPrice = $StartPrice;
      $this->EndPrice = $EndPrice;
    }

    /**
     * @return boolean
     */
    public function getDefaultCurrency()
    {
      return $this->DefaultCurrency;
    }

    /**
     * @param boolean $DefaultCurrency
     * @return \FilippoToso\Travelport\Air\PriceRange
     */
    public function setDefaultCurrency($DefaultCurrency)
    {
      $this->DefaultCurrency = $DefaultCurrency;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getStartPrice()
    {
      return $this->StartPrice;
    }

    /**
     * @param typeMoney $StartPrice
     * @return \FilippoToso\Travelport\Air\PriceRange
     */
    public function setStartPrice($StartPrice)
    {
      $this->StartPrice = $StartPrice;
      return $this;
    }

    /**
     * @return typeMoney
     */
    public function getEndPrice()
    {
      return $this->EndPrice;
    }

    /**
     * @param typeMoney $EndPrice
     * @return \FilippoToso\Travelport\Air\PriceRange
     */
    public function setEndPrice($EndPrice)
    {
      $this->EndPrice = $EndPrice;
      return $this;
    }

}
