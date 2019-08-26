<?php

namespace FilippoToso\Travelport\Util;

class Rating
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @param string $_
     * @param int $Number
     */
    public function __construct($_, $Number)
    {
      $this->_ = $_;
      $this->Number = $Number;
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
     * @return \FilippoToso\Travelport\Util\Rating
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \FilippoToso\Travelport\Util\Rating
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
