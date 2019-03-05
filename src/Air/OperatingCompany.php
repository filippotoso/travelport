<?php

namespace FilippoToso\Travelport\Air;

class OperatingCompany
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string $_
     * @param string $Code
     * @param string $Name
     */
    public function __construct($_ = null, $Code = null, $Name = null)
    {
      $this->_ = $_;
      $this->Code = $Code;
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\Air\OperatingCompany
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\Air\OperatingCompany
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FilippoToso\Travelport\Air\OperatingCompany
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
