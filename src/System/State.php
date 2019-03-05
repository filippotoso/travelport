<?php

namespace FilippoToso\Travelport\System;

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
     * @return \FilippoToso\Travelport\System\State
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
