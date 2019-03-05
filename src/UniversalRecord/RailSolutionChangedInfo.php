<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailSolutionChangedInfo
{

    /**
     * @var RailPricingSolution $RailPricingSolution
     */
    protected $RailPricingSolution = null;

    /**
     * @var anonymous1326 $ReasonCode
     */
    protected $ReasonCode = null;

    /**
     * @param RailPricingSolution $RailPricingSolution
     * @param anonymous1326 $ReasonCode
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailSolutionChangedInfo
     */
    public function setRailPricingSolution($RailPricingSolution)
    {
      $this->RailPricingSolution = $RailPricingSolution;
      return $this;
    }

    /**
     * @return anonymous1326
     */
    public function getReasonCode()
    {
      return $this->ReasonCode;
    }

    /**
     * @param anonymous1326 $ReasonCode
     * @return \FilippoToso\Travelport\UniversalRecord\RailSolutionChangedInfo
     */
    public function setReasonCode($ReasonCode)
    {
      $this->ReasonCode = $ReasonCode;
      return $this;
    }

}
