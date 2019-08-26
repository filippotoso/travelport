<?php

namespace FilippoToso\Travelport\Rail;

class RateInclusions
{

    /**
     * @var IncludedItem $IncludedItem
     */
    protected $IncludedItem = null;

    /**
     * @param IncludedItem $IncludedItem
     */
    public function __construct($IncludedItem)
    {
      $this->IncludedItem = $IncludedItem;
    }

    /**
     * @return IncludedItem
     */
    public function getIncludedItem()
    {
      return $this->IncludedItem;
    }

    /**
     * @param IncludedItem $IncludedItem
     * @return \FilippoToso\Travelport\Rail\RateInclusions
     */
    public function setIncludedItem($IncludedItem)
    {
      $this->IncludedItem = $IncludedItem;
      return $this;
    }

}
