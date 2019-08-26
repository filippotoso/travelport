<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailJourneyList
{

    /**
     * @var RailJourney $RailJourney
     */
    protected $RailJourney = null;

    /**
     * @param RailJourney $RailJourney
     */
    public function __construct($RailJourney)
    {
      $this->RailJourney = $RailJourney;
    }

    /**
     * @return RailJourney
     */
    public function getRailJourney()
    {
      return $this->RailJourney;
    }

    /**
     * @param RailJourney $RailJourney
     * @return \FilippoToso\Travelport\UniversalRecord\RailJourneyList
     */
    public function setRailJourney($RailJourney)
    {
      $this->RailJourney = $RailJourney;
      return $this;
    }

}
