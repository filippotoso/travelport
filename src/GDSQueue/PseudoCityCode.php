<?php

namespace FilippoToso\Travelport\GDSQueue;

class PseudoCityCode
{

    /**
     * @var typePCC $Value
     */
    protected $Value = null;

    /**
     * @param typePCC $Value
     */
    public function __construct($Value = null)
    {
      $this->Value = $Value;
    }

    /**
     * @return typePCC
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param typePCC $Value
     * @return \FilippoToso\Travelport\GDSQueue\PseudoCityCode
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
