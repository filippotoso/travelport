<?php

namespace FilippoToso\Travelport\Air;

class FareRuleCategory
{

    /**
     * @var anonymous807 $Category
     */
    protected $Category = null;

    /**
     * @param anonymous807 $Category
     */
    public function __construct($Category = null)
    {
      $this->Category = $Category;
    }

    /**
     * @return anonymous807
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous807 $Category
     * @return \FilippoToso\Travelport\Air\FareRuleCategory
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
