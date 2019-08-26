<?php

namespace FilippoToso\Travelport\Rail;

class FareRuleCategory
{

    /**
     * @var anonymous815 $Category
     */
    protected $Category = null;

    /**
     * @param anonymous815 $Category
     */
    public function __construct($Category)
    {
      $this->Category = $Category;
    }

    /**
     * @return anonymous815
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous815 $Category
     * @return \FilippoToso\Travelport\Rail\FareRuleCategory
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
