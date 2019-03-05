<?php

namespace FilippoToso\Travelport\GDSQueue;

class ExemptOBFee
{

    /**
     * @var typeSubCode[] $SubCode
     */
    protected $SubCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeSubCode[]
     */
    public function getSubCode()
    {
      return $this->SubCode;
    }

    /**
     * @param typeSubCode[] $SubCode
     * @return \FilippoToso\Travelport\GDSQueue\ExemptOBFee
     */
    public function setSubCode(array $SubCode = null)
    {
      $this->SubCode = $SubCode;
      return $this;
    }

}
