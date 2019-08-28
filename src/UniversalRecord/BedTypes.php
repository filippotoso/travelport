<?php

namespace FilippoToso\Travelport\UniversalRecord;

class BedTypes
{

    /**
     * @var typeOTACode $Code
     */
    protected $Code = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @param typeOTACode $Code
     * @param int $Quantity
     */
    public function __construct($Code = null, $Quantity = null)
    {
      $this->Code = $Code;
      $this->Quantity = $Quantity;
    }

    /**
     * @return typeOTACode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeOTACode $Code
     * @return \FilippoToso\Travelport\UniversalRecord\BedTypes
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \FilippoToso\Travelport\UniversalRecord\BedTypes
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

}
