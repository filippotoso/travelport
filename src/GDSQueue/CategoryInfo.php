<?php

namespace FilippoToso\Travelport\GDSQueue;

class CategoryInfo
{

    /**
     * @var DateRangeInfo $DateRangeInfo
     */
    protected $DateRangeInfo = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var int $Count
     */
    protected $Count = null;

    /**
     * @var int $TotalCount
     */
    protected $TotalCount = null;

    /**
     * @param DateRangeInfo $DateRangeInfo
     * @param string $Title
     * @param string $Category
     * @param int $Count
     * @param int $TotalCount
     */
    public function __construct($DateRangeInfo = null, $Title = null, $Category = null, $Count = null, $TotalCount = null)
    {
      $this->DateRangeInfo = $DateRangeInfo;
      $this->Title = $Title;
      $this->Category = $Category;
      $this->Count = $Count;
      $this->TotalCount = $TotalCount;
    }

    /**
     * @return DateRangeInfo
     */
    public function getDateRangeInfo()
    {
      return $this->DateRangeInfo;
    }

    /**
     * @param DateRangeInfo $DateRangeInfo
     * @return \FilippoToso\Travelport\GDSQueue\CategoryInfo
     */
    public function setDateRangeInfo($DateRangeInfo)
    {
      $this->DateRangeInfo = $DateRangeInfo;
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
     * @return \FilippoToso\Travelport\GDSQueue\CategoryInfo
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
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
     * @return \FilippoToso\Travelport\GDSQueue\CategoryInfo
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
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
     * @return \FilippoToso\Travelport\GDSQueue\CategoryInfo
     */
    public function setCount($Count)
    {
      $this->Count = $Count;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
      return $this->TotalCount;
    }

    /**
     * @param int $TotalCount
     * @return \FilippoToso\Travelport\GDSQueue\CategoryInfo
     */
    public function setTotalCount($TotalCount)
    {
      $this->TotalCount = $TotalCount;
      return $this;
    }

}
