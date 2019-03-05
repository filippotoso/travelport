<?php

namespace FilippoToso\Travelport\Air;

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
    public function __construct($_ = null, $Number = null)
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
     * @return \FilippoToso\Travelport\Air\Rating
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
     * @return \FilippoToso\Travelport\Air\Rating
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
