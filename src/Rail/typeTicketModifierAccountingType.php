<?php

namespace FilippoToso\Travelport\Rail;

class typeTicketModifierAccountingType
{

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param string $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FilippoToso\Travelport\Rail\typeTicketModifierAccountingType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
