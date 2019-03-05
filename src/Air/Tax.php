<?php

namespace FilippoToso\Travelport\Air;

class Tax
{

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @param string $Category
     * @param typeMoney $Amount
     */
    public function __construct($Category = null, $Amount = null)
    {
      $this->Category = $Category;
      $this->Amount = $Amount;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \FilippoToso\Travelport\Air\Tax
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
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
     * @return \FilippoToso\Travelport\Air\Tax
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

}
