<?php

namespace FilippoToso\Travelport\Air;

class SecondaryTypeRules
{

    /**
     * @var SecondaryTypeRule[] $SecondaryTypeRule
     */
    protected $SecondaryTypeRule = null;

    /**
     * @param SecondaryTypeRule[] $SecondaryTypeRule
     */
    public function __construct(array $SecondaryTypeRule)
    {
      $this->SecondaryTypeRule = $SecondaryTypeRule;
    }

    /**
     * @return SecondaryTypeRule[]
     */
    public function getSecondaryTypeRule()
    {
      return $this->SecondaryTypeRule;
    }

    /**
     * @param SecondaryTypeRule[] $SecondaryTypeRule
     * @return \FilippoToso\Travelport\Air\SecondaryTypeRules
     */
    public function setSecondaryTypeRule(array $SecondaryTypeRule)
    {
      $this->SecondaryTypeRule = $SecondaryTypeRule;
      return $this;
    }

}
