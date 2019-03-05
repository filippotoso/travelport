<?php

namespace FilippoToso\Travelport\Rail;

class SearchEvent extends typeTimeRange
{

    /**
     * @var typeEventType $Type
     */
    protected $Type = null;

    /**
     * @param string $EarliestTime
     * @param string $LatestTime
     * @param typeEventType $Type
     */
    public function __construct($EarliestTime = null, $LatestTime = null, $Type = null)
    {
      parent::__construct($EarliestTime, $LatestTime);
      $this->Type = $Type;
    }

    /**
     * @return typeEventType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeEventType $Type
     * @return \FilippoToso\Travelport\Rail\SearchEvent
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
