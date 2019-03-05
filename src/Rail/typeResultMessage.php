<?php

namespace FilippoToso\Travelport\Rail;

class typeResultMessage
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var anonymous229 $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param int $Code
     * @param anonymous229 $Type
     */
    public function __construct($_ = null, $Code = null, $Type = null)
    {
      $this->_ = $_;
      $this->Code = $Code;
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
     * @return \FilippoToso\Travelport\Rail\typeResultMessage
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \FilippoToso\Travelport\Rail\typeResultMessage
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous229
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous229 $Type
     * @return \FilippoToso\Travelport\Rail\typeResultMessage
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
