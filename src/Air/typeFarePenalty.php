<?php

namespace FilippoToso\Travelport\Air;

class typeFarePenalty
{

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typePercentageWithDecimal $Percentage
     */
    protected $Percentage = null;

    /**
     * @var anonymous877 $PenaltyApplies
     */
    protected $PenaltyApplies = null;

    /**
     * @var boolean $NoShow
     */
    protected $NoShow = null;

    /**
     * @param anonymous877 $PenaltyApplies
     * @param boolean $NoShow
     */
    public function __construct($PenaltyApplies = null, $NoShow = null)
    {
      $this->PenaltyApplies = $PenaltyApplies;
      $this->NoShow = $NoShow;
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
     * @return \FilippoToso\Travelport\Air\typeFarePenalty
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePercentageWithDecimal
     */
    public function getPercentage()
    {
      return $this->Percentage;
    }

    /**
     * @param typePercentageWithDecimal $Percentage
     * @return \FilippoToso\Travelport\Air\typeFarePenalty
     */
    public function setPercentage($Percentage)
    {
      $this->Percentage = $Percentage;
      return $this;
    }

    /**
     * @return anonymous877
     */
    public function getPenaltyApplies()
    {
      return $this->PenaltyApplies;
    }

    /**
     * @param anonymous877 $PenaltyApplies
     * @return \FilippoToso\Travelport\Air\typeFarePenalty
     */
    public function setPenaltyApplies($PenaltyApplies)
    {
      $this->PenaltyApplies = $PenaltyApplies;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNoShow()
    {
      return $this->NoShow;
    }

    /**
     * @param boolean $NoShow
     * @return \FilippoToso\Travelport\Air\typeFarePenalty
     */
    public function setNoShow($NoShow)
    {
      $this->NoShow = $NoShow;
      return $this;
    }

}
