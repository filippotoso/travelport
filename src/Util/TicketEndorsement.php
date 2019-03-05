<?php

namespace FilippoToso\Travelport\Util;

class TicketEndorsement
{

    /**
     * @var typeEndorsement $Value
     */
    protected $Value = null;

    /**
     * @param typeEndorsement $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return typeEndorsement
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param typeEndorsement $Value
     * @return \FilippoToso\Travelport\Util\TicketEndorsement
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
