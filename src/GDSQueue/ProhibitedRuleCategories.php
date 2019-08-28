<?php

namespace FilippoToso\Travelport\GDSQueue;

class ProhibitedRuleCategories
{

    /**
     * @var FareRuleCategory $FareRuleCategory
     */
    protected $FareRuleCategory = null;

    /**
     * @param FareRuleCategory $FareRuleCategory
     */
    public function __construct($FareRuleCategory = null)
    {
      $this->FareRuleCategory = $FareRuleCategory;
    }

    /**
     * @return FareRuleCategory
     */
    public function getFareRuleCategory()
    {
      return $this->FareRuleCategory;
    }

    /**
     * @param FareRuleCategory $FareRuleCategory
     * @return \FilippoToso\Travelport\GDSQueue\ProhibitedRuleCategories
     */
    public function setFareRuleCategory($FareRuleCategory)
    {
      $this->FareRuleCategory = $FareRuleCategory;
      return $this;
    }

}
