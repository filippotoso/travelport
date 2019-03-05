<?php

namespace FilippoToso\Travelport\Air;

class FareRuleCategory
{

    /**
     * @var anonymous810 $Category
     */
    protected $Category = null;

    /**
     * @param anonymous810 $Category
     */
    public function __construct($Category = null)
    {
      $this->Category = $Category;
    }

    /**
     * @return anonymous810
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous810 $Category
     * @return \FilippoToso\Travelport\Air\FareRuleCategory
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
