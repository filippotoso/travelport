<?php

namespace FilippoToso\Travelport\Vehicle;

class PaymentRule extends typeDepositGuarantee
{

    /**
     * @var CreditCard[] $CreditCard
     */
    protected $CreditCard = null;

    /**
     * @param typeReserveRequirement $Purpose
     * @param anonymous591 $Type
     * @param typeMoney $Amount
     * @param float $Percent
     * @param date $DueDate
     * @param int $NumberOfDays
     * @param anonymous592 $OptionType
     * @param boolean $Required
     * @param boolean $RequirementPassed
     */
    public function __construct($Purpose = null, $Type = null, $Amount = null, $Percent = null, $DueDate = null, $NumberOfDays = null, $OptionType = null, $Required = null, $RequirementPassed = null)
    {
      parent::__construct($Purpose, $Type, $Amount, $Percent, $DueDate, $NumberOfDays, $OptionType, $Required, $RequirementPassed);
    }

    /**
     * @return CreditCard[]
     */
    public function getCreditCard()
    {
      return $this->CreditCard;
    }

    /**
     * @param CreditCard[] $CreditCard
     * @return \FilippoToso\Travelport\Vehicle\PaymentRule
     */
    public function setCreditCard(array $CreditCard = null)
    {
      $this->CreditCard = $CreditCard;
      return $this;
    }

}
