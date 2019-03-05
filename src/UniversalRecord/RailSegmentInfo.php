<?php

namespace FilippoToso\Travelport\UniversalRecord;

class RailSegmentInfo
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var typeRailSegmentInfo $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param string $Category
     * @param typeRailSegmentInfo $Type
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegmentInfo
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
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
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegmentInfo
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return typeRailSegmentInfo
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeRailSegmentInfo $Type
     * @return \FilippoToso\Travelport\UniversalRecord\RailSegmentInfo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
