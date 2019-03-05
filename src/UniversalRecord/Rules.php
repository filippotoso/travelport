<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Rules
{

    /**
     * @var string $RulesText
     */
    protected $RulesText = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRulesText()
    {
      return $this->RulesText;
    }

    /**
     * @param string $RulesText
     * @return \FilippoToso\Travelport\UniversalRecord\Rules
     */
    public function setRulesText($RulesText)
    {
      $this->RulesText = $RulesText;
      return $this;
    }

}
