<?php

namespace FilippoToso\Travelport\GDSQueue;

class AirFareRuleCategory
{

    /**
     * @var typeFareRuleCategoryCode[] $CategoryCode
     */
    protected $CategoryCode = null;

    /**
     * @var typeRef $FareInfoRef
     */
    protected $FareInfoRef = null;

    /**
     * @param typeFareRuleCategoryCode[] $CategoryCode
     * @param typeRef $FareInfoRef
     */
    public function __construct(array $CategoryCode, $FareInfoRef)
    {
      $this->CategoryCode = $CategoryCode;
      $this->FareInfoRef = $FareInfoRef;
    }

    /**
     * @return typeFareRuleCategoryCode[]
     */
    public function getCategoryCode()
    {
      return $this->CategoryCode;
    }

    /**
     * @param typeFareRuleCategoryCode[] $CategoryCode
     * @return \FilippoToso\Travelport\GDSQueue\AirFareRuleCategory
     */
    public function setCategoryCode(array $CategoryCode)
    {
      $this->CategoryCode = $CategoryCode;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getFareInfoRef()
    {
      return $this->FareInfoRef;
    }

    /**
     * @param typeRef $FareInfoRef
     * @return \FilippoToso\Travelport\GDSQueue\AirFareRuleCategory
     */
    public function setFareInfoRef($FareInfoRef)
    {
      $this->FareInfoRef = $FareInfoRef;
      return $this;
    }

}
