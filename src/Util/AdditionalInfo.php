<?php

namespace FilippoToso\Travelport\Util;

class AdditionalInfo
{

    /**
     * @var StringLength1to255 $_
     */
    protected $_ = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @param StringLength1to255 $_
     * @param string $Type
     */
    public function __construct($_ = null, $Type = null)
    {
      $this->_ = $_;
      $this->Type = $Type;
    }

    /**
     * @return StringLength1to255
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StringLength1to255 $_
     * @return \FilippoToso\Travelport\Util\AdditionalInfo
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \FilippoToso\Travelport\Util\AdditionalInfo
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
