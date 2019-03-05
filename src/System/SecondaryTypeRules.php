<?php

namespace FilippoToso\Travelport\System;

class SecondaryTypeRules
{

    /**
     * @var SecondaryTypeRule[] $SecondaryTypeRule
     */
    protected $SecondaryTypeRule = null;

    /**
     * @param SecondaryTypeRule[] $SecondaryTypeRule
     */
    public function __construct(array $SecondaryTypeRule = null)
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
     * @return \FilippoToso\Travelport\System\SecondaryTypeRules
     */
    public function setSecondaryTypeRule(array $SecondaryTypeRule)
    {
      $this->SecondaryTypeRule = $SecondaryTypeRule;
      return $this;
    }

}
