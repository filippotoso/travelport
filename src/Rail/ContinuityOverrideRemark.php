<?php

namespace FilippoToso\Travelport\Rail;

class ContinuityOverrideRemark
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var anonymous1404 $Category
     */
    protected $Category = null;

    /**
     * @param string $_
     * @param anonymous1404 $Category
     */
    public function __construct($_ = null, $Category = null)
    {
      $this->_ = $_;
      $this->Category = $Category;
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
     * @return \FilippoToso\Travelport\Rail\ContinuityOverrideRemark
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous1404
     */
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param anonymous1404 $Category
     * @return \FilippoToso\Travelport\Rail\ContinuityOverrideRemark
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

}
