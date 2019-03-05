<?php

namespace FilippoToso\Travelport\Terminal;

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
     * @var anonymous219 $Type
     */
    protected $Type = null;

    /**
     * @param string $_
     * @param int $Code
     * @param anonymous219 $Type
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
     * @return \FilippoToso\Travelport\Terminal\typeResultMessage
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
     * @return \FilippoToso\Travelport\Terminal\typeResultMessage
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return anonymous219
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param anonymous219 $Type
     * @return \FilippoToso\Travelport\Terminal\typeResultMessage
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
