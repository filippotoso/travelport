<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AdditionalInfo
{

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @param string $Category
     */
    public function __construct($Category)
    {
      $this->Category = $Category;
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
     * @return \FilippoToso\Travelport\UniversalRecord\AdditionalInfo
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
