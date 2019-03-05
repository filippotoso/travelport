<?php

namespace FilippoToso\Travelport\Hotel;

class typeFreeFormText
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
     * @return \FilippoToso\Travelport\Hotel\typeFreeFormText
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
