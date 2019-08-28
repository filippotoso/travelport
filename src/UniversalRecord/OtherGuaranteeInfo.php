<?php

namespace FilippoToso\Travelport\UniversalRecord;

class OtherGuaranteeInfo
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var anonymous312 $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param anonymous312 $Type
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
     * @return \FilippoToso\Travelport\UniversalRecord\OtherGuaranteeInfo
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous312
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous312 $Type
     * @return \FilippoToso\Travelport\UniversalRecord\OtherGuaranteeInfo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
