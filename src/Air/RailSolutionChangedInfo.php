<?php

namespace FilippoToso\Travelport\Air;

class RailSolutionChangedInfo
{

    /**
     * @var RailPricingSolution $RailPricingSolution
     */
    protected $RailPricingSolution = null;

    /**
     * @var anonymous598 $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @param RailPricingSolution $RailPricingSolution
     * @param anonymous598 $ReasonCode
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
     * @return \FilippoToso\Travelport\Air\RailSolutionChangedInfo
     */
    public function setRailPricingSolution($RailPricingSolution)
    {
      $this->RailPricingSolution = $RailPricingSolution;
      return $this;
    }

    /**
     * @return anonymous598
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param anonymous598 $ReasonCode
     * @return \FilippoToso\Travelport\Air\RailSolutionChangedInfo
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

}
