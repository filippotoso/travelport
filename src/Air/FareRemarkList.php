<?php

namespace FilippoToso\Travelport\Air;

class FareRemarkList
{

    /**
     * @var FareRemark $FareRemark
     */
    protected $FareRemark = null;

    /**
     * @param FareRemark $FareRemark
     */
    public function __construct($FareRemark = null)
    {
      $this->FareRemark = $FareRemark;
    }

    /**
     * @return FareRemark
     */
    public function getFareRemark()
    {
      return $this->FareRemark;
    }

    /**
     * @param FareRemark $FareRemark
     * @return \FilippoToso\Travelport\Air\FareRemarkList
     */
    public function setFareRemark($FareRemark)
    {
      $this->FareRemark = $FareRemark;
      return $this;
    }

}
