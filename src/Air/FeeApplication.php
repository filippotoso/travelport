<?php

namespace FilippoToso\Travelport\Air;

class FeeApplication
{

    /**
     * @var typeFeeApplication $_
     */
    protected $_ = null;

    /**
     * @var anonymous907 $Code
     */
    protected $Code = null;

    /**
     * @param typeFeeApplication $_
     * @param anonymous907 $Code
     */
    public function __construct($_ = null, $Code = null)
    {
      $this->_ = $_;
      $this->Code = $Code;
    }

    /**
     * @return typeFeeApplication
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param typeFeeApplication $_
     * @return \FilippoToso\Travelport\Air\FeeApplication
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous907
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param anonymous907 $Code
     * @return \FilippoToso\Travelport\Air\FeeApplication
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
