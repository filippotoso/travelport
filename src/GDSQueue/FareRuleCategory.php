<?php

namespace FilippoToso\Travelport\GDSQueue;

class FareRuleCategory
{

    /**
     * @var anonymous818 $Category
     */
    protected $Category = null;

    /**
     * @param anonymous818 $Category
     */
    public function __construct($Category = null)
    {
      $this->Category = $Category;
    }

    /**
     * @return anonymous818
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous818 $Category
     * @return \FilippoToso\Travelport\GDSQueue\FareRuleCategory
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
