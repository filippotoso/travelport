<?php

namespace FilippoToso\Travelport\Terminal;

class OtherGuaranteeInfo
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var anonymous300 $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param anonymous300 $Type
     */
    public function __construct($_ = null, $Type = null)
    {
      $this->_ = $_;
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
     * @return \FilippoToso\Travelport\Terminal\OtherGuaranteeInfo
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous300
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous300 $Type
     * @return \FilippoToso\Travelport\Terminal\OtherGuaranteeInfo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
