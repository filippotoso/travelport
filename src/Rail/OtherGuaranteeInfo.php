<?php

namespace FilippoToso\Travelport\Rail;

class OtherGuaranteeInfo
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var anonymous309 $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param anonymous309 $Type
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
     * @return \FilippoToso\Travelport\Rail\OtherGuaranteeInfo
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous309
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous309 $Type
     * @return \FilippoToso\Travelport\Rail\OtherGuaranteeInfo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
