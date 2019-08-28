<?php

namespace FilippoToso\Travelport\Util;

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
     * @return \FilippoToso\Travelport\Util\typeTicketModifierAccountingType
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
