<?php

namespace FilippoToso\Travelport\Vehicle;

class StartEndTimes
{

    /**
     * @var typeStartEndTime $EarliestStart
     */
    protected $EarliestStart = null;

    /**
     * @var typeStartEndTime $LatestStart
     */
    protected $LatestStart = null;

    /**
     * @var typeStartEndTime $LatestEnd
     */
    protected $LatestEnd = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return typeStartEndTime
     */
    public function getEarliestStart()
    {
      return $this->EarliestStart;
    }

    /**
     * @param typeStartEndTime $EarliestStart
     * @return \FilippoToso\Travelport\Vehicle\StartEndTimes
     */
    public function setEarliestStart($EarliestStart)
    {
      $this->EarliestStart = $EarliestStart;
      return $this;
    }

    /**
     * @return typeStartEndTime
     */
    public function getLatestStart()
    {
      return $this->LatestStart;
    }

    /**
     * @param typeStartEndTime $LatestStart
     * @return \FilippoToso\Travelport\Vehicle\StartEndTimes
     */
    public function setLatestStart($LatestStart)
    {
      $this->LatestStart = $LatestStart;
      return $this;
    }

    /**
     * @return typeStartEndTime
     */
    public function getLatestEnd()
    {
      return $this->LatestEnd;
    }

    /**
     * @param typeStartEndTime $LatestEnd
     * @return \FilippoToso\Travelport\Vehicle\StartEndTimes
     */
    public function setLatestEnd($LatestEnd)
    {
      $this->LatestEnd = $LatestEnd;
      return $this;
    }

}
