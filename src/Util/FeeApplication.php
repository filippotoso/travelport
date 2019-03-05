<?php

namespace FilippoToso\Travelport\Util;

class FeeApplication
{

    /**
     * @var typeFeeApplication $_
     */
    protected $_ = null;

    /**
     * @var anonymous838 $Code
     */
    protected $Code = null;

    /**
     * @param typeFeeApplication $_
     * @param anonymous838 $Code
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
     * @return \FilippoToso\Travelport\Util\FeeApplication
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous838
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param anonymous838 $Code
     * @return \FilippoToso\Travelport\Util\FeeApplication
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
