<?php

namespace FilippoToso\Travelport\UniversalRecord;

class State
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @param string $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
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
     * @return \FilippoToso\Travelport\UniversalRecord\State
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
