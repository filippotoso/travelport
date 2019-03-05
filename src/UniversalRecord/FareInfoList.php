<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FareInfoList
{

    /**
     * @var FareInfo $FareInfo
     */
    protected $FareInfo = null;

    /**
     * @param FareInfo $FareInfo
     */
    public function __construct($FareInfo = null)
    {
      $this->FareInfo = $FareInfo;
    }

    /**
     * @return FareInfo
     */
    public function getFareInfo()
    {
      return $this->FareInfo;
    }

    /**
     * @param FareInfo $FareInfo
     * @return \FilippoToso\Travelport\UniversalRecord\FareInfoList
     */
    public function setFareInfo($FareInfo)
    {
      $this->FareInfo = $FareInfo;
      return $this;
    }

}
