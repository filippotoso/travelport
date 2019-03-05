<?php

namespace FilippoToso\Travelport\GDSQueue;

class RailSolutionChangedInfo
{

    /**
     * @var RailPricingSolution $RailPricingSolution
     */
    protected $RailPricingSolution = null;

    /**
     * @var anonymous1332 $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @param RailPricingSolution $RailPricingSolution
     * @param anonymous1332 $ReasonCode
     */
    public function __construct($RailPricingSolution = null, $ReasonCode = null)
    {
      $this->RailPricingSolution = $RailPricingSolution;
      $this->ReasonCode = $ReasonCode;
    }

    /**
     * @return RailPricingSolution
     */
    public function getRailPricingSolution()
    {
      return $this->RailPricingSolution;
    }

    /**
     * @param RailPricingSolution $RailPricingSolution
     * @return \FilippoToso\Travelport\GDSQueue\RailSolutionChangedInfo
     */
    public function setRailPricingSolution($RailPricingSolution)
    {
      $this->RailPricingSolution = $RailPricingSolution;
      return $this;
    }

    /**
     * @return anonymous1332
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param anonymous1332 $ReasonCode
     * @return \FilippoToso\Travelport\GDSQueue\RailSolutionChangedInfo
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

}
