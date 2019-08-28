<?php

namespace FilippoToso\Travelport\GDSQueue;

class RailSupplier
{

    /**
     * @var typeSupplierCode $Code
     */
    protected $Code = null;

    /**
     * @param typeSupplierCode $Code
     */
    public function __construct($Code = null)
    {
      $this->Code = $Code;
    }

    /**
     * @return typeSupplierCode
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param typeSupplierCode $Code
     * @return \FilippoToso\Travelport\GDSQueue\RailSupplier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
