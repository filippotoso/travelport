<?php

namespace FilippoToso\Travelport\UniversalRecord;

class VoluntaryChanges
{

    /**
     * @var Penalty $Penalty
     */
    protected $Penalty = null;

    /**
     * @var boolean $VolChangeInd
     */
    protected $VolChangeInd = null;

    /**
     * @param Penalty $Penalty
     * @param boolean $VolChangeInd
     */
    public function __construct($Penalty = null, $VolChangeInd = null)
    {
      $this->Penalty = $Penalty;
      $this->VolChangeInd = $VolChangeInd;
    }

    /**
     * @return Penalty
     */
    public function getPenalty()
    {
      return $this->Penalty;
    }

    /**
     * @param Penalty $Penalty
     * @return \FilippoToso\Travelport\UniversalRecord\VoluntaryChanges
     */
    public function setPenalty($Penalty)
    {
      $this->Penalty = $Penalty;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getVolChangeInd()
    {
      return $this->VolChangeInd;
    }

    /**
     * @param boolean $VolChangeInd
     * @return \FilippoToso\Travelport\UniversalRecord\VoluntaryChanges
     */
    public function setVolChangeInd($VolChangeInd)
    {
      $this->VolChangeInd = $VolChangeInd;
      return $this;
    }

}
