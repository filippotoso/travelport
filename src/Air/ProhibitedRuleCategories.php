<?php

namespace FilippoToso\Travelport\Air;

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
     * @return \FilippoToso\Travelport\Air\ProhibitedRuleCategories
     */
    public function setFareRuleCategory($FareRuleCategory)
    {
      $this->FareRuleCategory = $FareRuleCategory;
      return $this;
    }

}
