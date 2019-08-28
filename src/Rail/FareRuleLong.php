<?php

namespace FilippoToso\Travelport\Rail;

class FareRuleLong
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var int $Category
     */
    protected $Category = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param int $Category
     * @param string $Type
     */
    public function __construct($_ = null, $Category = null, $Type = null)
    {
      $this->_ = $_;
      $this->Category = $Category;
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \FilippoToso\Travelport\Rail\FareRuleLong
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param int $Category
     * @return \FilippoToso\Travelport\Rail\FareRuleLong
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Rail\FareRuleLong
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
