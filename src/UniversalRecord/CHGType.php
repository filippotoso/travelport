<?php

namespace FilippoToso\Travelport\UniversalRecord;

class CHGType
{

    /**
     * @var PenFeeType[] $PenFee
     */
    protected $PenFee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PenFeeType[]
     */
    public function getPenFee()
    {
      return $this->PenFee;
    }

    /**
     * @param PenFeeType[] $PenFee
     * @return \FilippoToso\Travelport\UniversalRecord\CHGType
     */
    public function setPenFee(array $PenFee = null)
    {
      $this->PenFee = $PenFee;
      return $this;
    }

}
