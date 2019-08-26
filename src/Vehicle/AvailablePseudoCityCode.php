<?php

namespace FilippoToso\Travelport\Vehicle;

class AvailablePseudoCityCode
{

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @param typePCC $PseudoCityCode
     */
    public function __construct($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\Vehicle\AvailablePseudoCityCode
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

}
