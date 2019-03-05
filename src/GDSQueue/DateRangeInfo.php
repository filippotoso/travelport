<?php

namespace FilippoToso\Travelport\GDSQueue;

class DateRangeInfo
{

    /**
     * @var string $DateRange
     */
    protected $DateRange = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @param string $DateRange
     * @param string $Title
     * @param int $Count
     */
    public function __construct($DateRange = null, $Title = null, $Count = null)
    {
      $this->DateRange = $DateRange;
      $this->Title = $Title;
      $this->Count = $Count;
    }

    /**
     * @return string
     */
    public function getDateRange()
    {
      return $this->DateRange;
    }

    /**
     * @param string $DateRange
     * @return \FilippoToso\Travelport\GDSQueue\DateRangeInfo
     */
    public function setDateRange($DateRange)
    {
      $this->DateRange = $DateRange;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \FilippoToso\Travelport\GDSQueue\DateRangeInfo
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->Count;
    }

    /**
     * @param int $Count
     * @return \FilippoToso\Travelport\GDSQueue\DateRangeInfo
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

}
