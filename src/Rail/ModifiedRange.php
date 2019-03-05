<?php

namespace FilippoToso\Travelport\Rail;

class ModifiedRange
{

    /**
     * @var date $ModifiedStart
     */
    protected $ModifiedStart = null;

    /**
     * @var date $ModifiedEnd
     */
    protected $ModifiedEnd = null;

    /**
     * @param date $ModifiedStart
     * @param date $ModifiedEnd
     */
    public function __construct($ModifiedStart = null, $ModifiedEnd = null)
    {
      $this->ModifiedStart = $ModifiedStart;
      $this->ModifiedEnd = $ModifiedEnd;
    }

    /**
     * @return date
     */
    public function getModifiedStart()
    {
      return $this->ModifiedStart;
    }

    /**
     * @param date $ModifiedStart
     * @return \FilippoToso\Travelport\Rail\ModifiedRange
     */
    public function setModifiedStart($ModifiedStart)
    {
      $this->ModifiedStart = $ModifiedStart;
      return $this;
    }

    /**
     * @return date
     */
    public function getModifiedEnd()
    {
      return $this->ModifiedEnd;
    }

    /**
     * @param date $ModifiedEnd
     * @return \FilippoToso\Travelport\Rail\ModifiedRange
     */
    public function setModifiedEnd($ModifiedEnd)
    {
      $this->ModifiedEnd = $ModifiedEnd;
      return $this;
    }

}
