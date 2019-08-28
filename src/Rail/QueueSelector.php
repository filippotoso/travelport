<?php

namespace FilippoToso\Travelport\Rail;

class QueueSelector
{

    /**
     * @var string $Queue
     */
    protected $Queue = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $DateRange
     */
    protected $DateRange = null;

    /**
     * @param string $Queue
     * @param string $Category
     * @param string $DateRange
     */
    public function __construct($Queue = null, $Category = null, $DateRange = null)
    {
      $this->Queue = $Queue;
      $this->Category = $Category;
      $this->DateRange = $DateRange;
    }

    /**
     * @return string
     */
    public function getQueue()
    {
      return $this->Queue;
    }

    /**
     * @param string $Queue
     * @return \FilippoToso\Travelport\Rail\QueueSelector
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \FilippoToso\Travelport\Rail\QueueSelector
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
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
     * @return \FilippoToso\Travelport\Rail\QueueSelector
     */
    public function setDateRange($DateRange)
    {
      $this->DateRange = $DateRange;
      return $this;
    }

}
