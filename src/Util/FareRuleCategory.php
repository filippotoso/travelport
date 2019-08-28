<?php

namespace FilippoToso\Travelport\Util;

class FareRuleCategory
{

    /**
     * @var anonymous738 $Category
     */
    protected $Category = null;

    /**
     * @param anonymous738 $Category
     */
    public function __construct($Category = null)
    {
      $this->Category = $Category;
    }

    /**
     * @return anonymous738
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous738 $Category
     * @return \FilippoToso\Travelport\Util\FareRuleCategory
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
