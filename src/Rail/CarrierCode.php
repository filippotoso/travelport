<?php

namespace FilippoToso\Travelport\Rail;

class CarrierCode
{

    /**
     * @var typeCarrier $_
     */
    protected $_ = null;

    /**
     * @param typeCarrier $_
     */
    public function __construct($_ = null)
    {
      $this->_ = $_;
    }

    /**
     * @return typeCarrier
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeCarrier $_
     * @return \FilippoToso\Travelport\Rail\CarrierCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

}
