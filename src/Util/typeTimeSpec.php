<?php

namespace FilippoToso\Travelport\Util;

class typeTimeSpec
{

    /**
     * @var typeTimeRange $TimeRange
     */
    protected $TimeRange = null;

    /**
     * @var typeSpecificTime $SpecificTime
     */
    protected $SpecificTime = null;

    /**
     * @var string $PreferredTime
     */
    protected $PreferredTime = null;

    /**
     * @param string $PreferredTime
     */
    public function __construct($PreferredTime)
    {
      $this->PreferredTime = $PreferredTime;
    }

    /**
     * @return typeTimeRange
     */
    public function getTimeRange()
    {
      return $this->TimeRange;
    }

    /**
     * @param typeTimeRange $TimeRange
     * @return \FilippoToso\Travelport\Util\typeTimeSpec
     */
    public function setTimeRange($TimeRange)
    {
      $this->TimeRange = $TimeRange;
      return $this;
    }

    /**
     * @return typeSpecificTime
     */
    public function getSpecificTime()
    {
      return $this->SpecificTime;
    }

    /**
     * @param typeSpecificTime $SpecificTime
     * @return \FilippoToso\Travelport\Util\typeTimeSpec
     */
    public function setSpecificTime($SpecificTime)
    {
      $this->SpecificTime = $SpecificTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredTime()
    {
      return $this->PreferredTime;
    }

    /**
     * @param string $PreferredTime
     * @return \FilippoToso\Travelport\Util\typeTimeSpec
     */
    public function setPreferredTime($PreferredTime)
    {
      $this->PreferredTime = $PreferredTime;
      return $this;
    }

}
