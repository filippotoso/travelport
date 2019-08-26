<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Requisition
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var anonymous34 $Category
     */
    protected $Category = null;

    /**
     * @var anonymous35 $Type
     */
    protected $Type = null;

    /**
     * @param string $Number
     * @param anonymous34 $Category
     * @param anonymous35 $Type
     */
    public function __construct($Number, $Category, $Type)
    {
      $this->Number = $Number;
      $this->Category = $Category;
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \FilippoToso\Travelport\UniversalRecord\Requisition
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return anonymous34
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous34 $Category
     * @return \FilippoToso\Travelport\UniversalRecord\Requisition
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return anonymous35
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous35 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\Requisition
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
