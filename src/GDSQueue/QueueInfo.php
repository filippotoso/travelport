<?php

namespace FilippoToso\Travelport\GDSQueue;

class QueueInfo
{

    /**
     * @var CategoryInfo $CategoryInfo
     */
    protected $CategoryInfo = null;

    /**
     * @var string $Queue
     */
    protected $Queue = null;

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @var int $TotalPNRCount
     */
    protected $TotalPNRCount = null;

    /**
     * @var int $PNRCount
     */
    protected $PNRCount = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @param CategoryInfo $CategoryInfo
     * @param string $Queue
     * @param typePCC $PseudoCityCode
     * @param int $TotalPNRCount
     * @param int $PNRCount
     * @param string $Title
     */
    public function __construct($CategoryInfo = null, $Queue = null, $PseudoCityCode = null, $TotalPNRCount = null, $PNRCount = null, $Title = null)
    {
      $this->CategoryInfo = $CategoryInfo;
      $this->Queue = $Queue;
      $this->PseudoCityCode = $PseudoCityCode;
      $this->TotalPNRCount = $TotalPNRCount;
      $this->PNRCount = $PNRCount;
      $this->Title = $Title;
    }

    /**
     * @return CategoryInfo
     */
    public function getCategoryInfo()
    {
      return $this->CategoryInfo;
    }

    /**
     * @param CategoryInfo $CategoryInfo
     * @return \FilippoToso\Travelport\GDSQueue\QueueInfo
     */
    public function setCategoryInfo($CategoryInfo)
    {
      $this->CategoryInfo = $CategoryInfo;
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
     * @return \FilippoToso\Travelport\GDSQueue\QueueInfo
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\GDSQueue\QueueInfo
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalPNRCount()
    {
      return $this->TotalPNRCount;
    }

    /**
     * @param int $TotalPNRCount
     * @return \FilippoToso\Travelport\GDSQueue\QueueInfo
     */
    public function setTotalPNRCount($TotalPNRCount)
    {
      $this->TotalPNRCount = $TotalPNRCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPNRCount()
    {
      return $this->PNRCount;
    }

    /**
     * @param int $PNRCount
     * @return \FilippoToso\Travelport\GDSQueue\QueueInfo
     */
    public function setPNRCount($PNRCount)
    {
      $this->PNRCount = $PNRCount;
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
     * @return \FilippoToso\Travelport\GDSQueue\QueueInfo
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

}
