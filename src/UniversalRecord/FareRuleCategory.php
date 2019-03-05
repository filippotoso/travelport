<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FareRuleCategory
{

    /**
     * @var anonymous744 $Category
     */
    protected $Category = null;

    /**
     * @param anonymous744 $Category
     */
    public function __construct($Category = null)
    {
      $this->Category = $Category;
    }

    /**
     * @return anonymous744
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous744 $Category
     * @return \FilippoToso\Travelport\UniversalRecord\FareRuleCategory
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
