<?php

namespace FilippoToso\Travelport\GDSQueue;

class VoluntaryRefunds
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
    public function __construct($Penalty, $VolChangeInd)
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
     * @return \FilippoToso\Travelport\GDSQueue\VoluntaryRefunds
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
     * @return \FilippoToso\Travelport\GDSQueue\VoluntaryRefunds
     */
    public function setVolChangeInd($VolChangeInd)
    {
      $this->VolChangeInd = $VolChangeInd;
      return $this;
    }

}
