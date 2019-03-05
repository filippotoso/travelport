<?php

namespace FilippoToso\Travelport\Air;

class AvailableDiscount
{

    /**
     * @var LoyaltyProgram $LoyaltyProgram
     */
    protected $LoyaltyProgram = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var typePercentageWithDecimal $Percent
     */
    protected $Percent = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DiscountQualifier
     */
    protected $DiscountQualifier = null;

    /**
     * @param LoyaltyProgram $LoyaltyProgram
     * @param typeMoney $Amount
     * @param typePercentageWithDecimal $Percent
     * @param string $Description
     * @param string $DiscountQualifier
     */
    public function __construct($LoyaltyProgram = null, $Amount = null, $Percent = null, $Description = null, $DiscountQualifier = null)
    {
      $this->LoyaltyProgram = $LoyaltyProgram;
      $this->Amount = $Amount;
      $this->Percent = $Percent;
      $this->Description = $Description;
      $this->DiscountQualifier = $DiscountQualifier;
    }

    /**
     * @return LoyaltyProgram
     */
    public function getLoyaltyProgram()
    {
      return $this->LoyaltyProgram;
    }

    /**
     * @param LoyaltyProgram $LoyaltyProgram
     * @return \FilippoToso\Travelport\Air\AvailableDiscount
     */
    public function setLoyaltyProgram($LoyaltyProgram)
    {
      $this->LoyaltyProgram = $LoyaltyProgram;
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
     * @return \FilippoToso\Travelport\Air\AvailableDiscount
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return typePercentageWithDecimal
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param typePercentageWithDecimal $Percent
     * @return \FilippoToso\Travelport\Air\AvailableDiscount
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\Air\AvailableDiscount
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountQualifier()
    {
      return $this->DiscountQualifier;
    }

    /**
     * @param string $DiscountQualifier
     * @return \FilippoToso\Travelport\Air\AvailableDiscount
     */
    public function setDiscountQualifier($DiscountQualifier)
    {
      $this->DiscountQualifier = $DiscountQualifier;
      return $this;
    }

}
