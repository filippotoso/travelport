<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RuleCharges
{

    /**
     * @var string $PenaltyType
     */
    protected $PenaltyType = null;

    /**
     * @var string $DepartureStatus
     */
    protected $DepartureStatus = null;

    /**
     * @var typeMoney $Amount
     */
    protected $Amount = null;

    /**
     * @var float $Percent
     */
    protected $Percent = null;

    /**
     * @var boolean $MoreRulesPresent
     */
    protected $MoreRulesPresent = null;

    /**
     * @param string $PenaltyType
     * @param string $DepartureStatus
     * @param typeMoney $Amount
     * @param float $Percent
     * @param boolean $MoreRulesPresent
     */
    public function __construct($PenaltyType, $DepartureStatus, $Amount, $Percent, $MoreRulesPresent)
    {
      $this->PenaltyType = $PenaltyType;
      $this->DepartureStatus = $DepartureStatus;
      $this->Amount = $Amount;
      $this->Percent = $Percent;
      $this->MoreRulesPresent = $MoreRulesPresent;
    }

    /**
     * @return string
     */
    public function getPenaltyType()
    {
      return $this->PenaltyType;
    }

    /**
     * @param string $PenaltyType
     * @return \FilippoToso\Travelport\UniversalRecord\RuleCharges
     */
    public function setPenaltyType($PenaltyType)
    {
      $this->PenaltyType = $PenaltyType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartureStatus()
    {
      return $this->DepartureStatus;
    }

    /**
     * @param string $DepartureStatus
     * @return \FilippoToso\Travelport\UniversalRecord\RuleCharges
     */
    public function setDepartureStatus($DepartureStatus)
    {
      $this->DepartureStatus = $DepartureStatus;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RuleCharges
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
      return $this->Percent;
    }

    /**
     * @param float $Percent
     * @return \FilippoToso\Travelport\UniversalRecord\RuleCharges
     */
    public function setPercent($Percent)
    {
      $this->Percent = $Percent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoreRulesPresent()
    {
      return $this->MoreRulesPresent;
    }

    /**
     * @param boolean $MoreRulesPresent
     * @return \FilippoToso\Travelport\UniversalRecord\RuleCharges
     */
    public function setMoreRulesPresent($MoreRulesPresent)
    {
      $this->MoreRulesPresent = $MoreRulesPresent;
      return $this;
    }

}
