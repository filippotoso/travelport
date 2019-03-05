<?php

namespace FilippoToso\Travelport\Rail;

class FareDisplayRule
{

    /**
     * @var RuleAdvancedPurchase $RuleAdvancedPurchase
     */
    protected $RuleAdvancedPurchase = null;

    /**
     * @var RuleLengthOfStay $RuleLengthOfStay
     */
    protected $RuleLengthOfStay = null;

    /**
     * @var RuleCharges $RuleCharges
     */
    protected $RuleCharges = null;

    /**
     * @var string $RuleNumber
     */
    protected $RuleNumber = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    /**
     * @var string $TariffNumber
     */
    protected $TariffNumber = null;

    /**
     * @param RuleAdvancedPurchase $RuleAdvancedPurchase
     * @param RuleLengthOfStay $RuleLengthOfStay
     * @param RuleCharges $RuleCharges
     * @param string $RuleNumber
     * @param string $Source
     * @param string $TariffNumber
     */
    public function __construct($RuleAdvancedPurchase = null, $RuleLengthOfStay = null, $RuleCharges = null, $RuleNumber = null, $Source = null, $TariffNumber = null)
    {
      $this->RuleAdvancedPurchase = $RuleAdvancedPurchase;
      $this->RuleLengthOfStay = $RuleLengthOfStay;
      $this->RuleCharges = $RuleCharges;
      $this->RuleNumber = $RuleNumber;
      $this->Source = $Source;
      $this->TariffNumber = $TariffNumber;
    }

    /**
     * @return RuleAdvancedPurchase
     */
    public function getRuleAdvancedPurchase()
    {
      return $this->RuleAdvancedPurchase;
    }

    /**
     * @param RuleAdvancedPurchase $RuleAdvancedPurchase
     * @return \FilippoToso\Travelport\Rail\FareDisplayRule
     */
    public function setRuleAdvancedPurchase($RuleAdvancedPurchase)
    {
      $this->RuleAdvancedPurchase = $RuleAdvancedPurchase;
      return $this;
    }

    /**
     * @return RuleLengthOfStay
     */
    public function getRuleLengthOfStay()
    {
      return $this->RuleLengthOfStay;
    }

    /**
     * @param RuleLengthOfStay $RuleLengthOfStay
     * @return \FilippoToso\Travelport\Rail\FareDisplayRule
     */
    public function setRuleLengthOfStay($RuleLengthOfStay)
    {
      $this->RuleLengthOfStay = $RuleLengthOfStay;
      return $this;
    }

    /**
     * @return RuleCharges
     */
    public function getRuleCharges()
    {
      return $this->RuleCharges;
    }

    /**
     * @param RuleCharges $RuleCharges
     * @return \FilippoToso\Travelport\Rail\FareDisplayRule
     */
    public function setRuleCharges($RuleCharges)
    {
      $this->RuleCharges = $RuleCharges;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleNumber()
    {
      return $this->RuleNumber;
    }

    /**
     * @param string $RuleNumber
     * @return \FilippoToso\Travelport\Rail\FareDisplayRule
     */
    public function setRuleNumber($RuleNumber)
    {
      $this->RuleNumber = $RuleNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \FilippoToso\Travelport\Rail\FareDisplayRule
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffNumber()
    {
      return $this->TariffNumber;
    }

    /**
     * @param string $TariffNumber
     * @return \FilippoToso\Travelport\Rail\FareDisplayRule
     */
    public function setTariffNumber($TariffNumber)
    {
      $this->TariffNumber = $TariffNumber;
      return $this;
    }

}
