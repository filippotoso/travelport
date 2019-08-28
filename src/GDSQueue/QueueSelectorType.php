<?php

namespace FilippoToso\Travelport\GDSQueue;

class QueueSelectorType
{

    /**
     * @var string $Surname
     */
    protected $Surname = null;

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
     * @param string $Surname
     * @param string $Queue
     * @param string $Category
     * @param string $DateRange
     */
    public function __construct($Surname = null, $Queue = null, $Category = null, $DateRange = null)
    {
      $this->Surname = $Surname;
      $this->Queue = $Queue;
      $this->Category = $Category;
      $this->DateRange = $DateRange;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param string $Surname
     * @return \FilippoToso\Travelport\GDSQueue\QueueSelectorType
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
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
     * @return \FilippoToso\Travelport\GDSQueue\QueueSelectorType
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
     * @return \FilippoToso\Travelport\GDSQueue\QueueSelectorType
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
     * @return \FilippoToso\Travelport\GDSQueue\QueueSelectorType
     */
    public function setDateRange($DateRange)
    {
      $this->DateRange = $DateRange;
      return $this;
    }

}
