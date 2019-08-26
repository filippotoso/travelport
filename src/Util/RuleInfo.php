<?php

namespace FilippoToso\Travelport\Util;

class RuleInfo
{

    /**
     * @var ChargesRules $ChargesRules
     */
    protected $ChargesRules = null;

    /**
     * @param ChargesRules $ChargesRules
     */
    public function __construct($ChargesRules)
    {
      $this->ChargesRules = $ChargesRules;
    }

    /**
     * @return ChargesRules
     */
    public function getChargesRules()
    {
      return $this->ChargesRules;
    }

    /**
     * @param ChargesRules $ChargesRules
     * @return \FilippoToso\Travelport\Util\RuleInfo
     */
    public function setChargesRules($ChargesRules)
    {
      $this->ChargesRules = $ChargesRules;
      return $this;
    }

}
