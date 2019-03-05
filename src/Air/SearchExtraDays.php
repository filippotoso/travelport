<?php

namespace FilippoToso\Travelport\Air;

class SearchExtraDays
{

    /**
     * @var int $DaysBefore
     */
    protected $DaysBefore = null;

    /**
     * @var int $DaysAfter
     */
    protected $DaysAfter = null;

    /**
     * @param int $DaysBefore
     * @param int $DaysAfter
     */
    public function __construct($DaysBefore = null, $DaysAfter = null)
    {
      $this->DaysBefore = $DaysBefore;
      $this->DaysAfter = $DaysAfter;
    }

    /**
     * @return int
     */
    public function getDaysBefore()
    {
      return $this->DaysBefore;
    }

    /**
     * @param int $DaysBefore
     * @return \FilippoToso\Travelport\Air\SearchExtraDays
     */
    public function setDaysBefore($DaysBefore)
    {
      $this->DaysBefore = $DaysBefore;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysAfter()
    {
      return $this->DaysAfter;
    }

    /**
     * @param int $DaysAfter
     * @return \FilippoToso\Travelport\Air\SearchExtraDays
     */
    public function setDaysAfter($DaysAfter)
    {
      $this->DaysAfter = $DaysAfter;
      return $this;
    }

}
