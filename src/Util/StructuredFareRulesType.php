<?php

namespace FilippoToso\Travelport\Util;

class StructuredFareRulesType
{

    /**
     * @var FareRuleCategoryTypes[] $FareRuleCategoryType
     */
    protected $FareRuleCategoryType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareRuleCategoryTypes[]
     */
    public function getFareRuleCategoryType()
    {
      return $this->FareRuleCategoryType;
    }

    /**
     * @param FareRuleCategoryTypes[] $FareRuleCategoryType
     * @return \FilippoToso\Travelport\Util\StructuredFareRulesType
     */
    public function setFareRuleCategoryType(array $FareRuleCategoryType = null)
    {
      $this->FareRuleCategoryType = $FareRuleCategoryType;
      return $this;
    }

}
