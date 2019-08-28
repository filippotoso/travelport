<?php

namespace FilippoToso\Travelport\Util;

class PenaltyFareInformation
{

    /**
     * @var typeFarePenalty $PenaltyInfo
     */
    protected $PenaltyInfo = null;

    /**
     * @var boolean $ProhibitPenaltyFares
     */
    protected $ProhibitPenaltyFares = null;

    /**
     * @param boolean $ProhibitPenaltyFares
     */
    public function __construct($ProhibitPenaltyFares = null)
    {
      $this->ProhibitPenaltyFares = $ProhibitPenaltyFares;
    }

    /**
     * @return typeFarePenalty
     */
    public function getPenaltyInfo()
    {
      return $this->PenaltyInfo;
    }

    /**
     * @param typeFarePenalty $PenaltyInfo
     * @return \FilippoToso\Travelport\Util\PenaltyFareInformation
     */
    public function setPenaltyInfo($PenaltyInfo)
    {
      $this->PenaltyInfo = $PenaltyInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProhibitPenaltyFares()
    {
      return $this->ProhibitPenaltyFares;
    }

    /**
     * @param boolean $ProhibitPenaltyFares
     * @return \FilippoToso\Travelport\Util\PenaltyFareInformation
     */
    public function setProhibitPenaltyFares($ProhibitPenaltyFares)
    {
      $this->ProhibitPenaltyFares = $ProhibitPenaltyFares;
      return $this;
    }

}
