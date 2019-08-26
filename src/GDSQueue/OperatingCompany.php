<?php

namespace FilippoToso\Travelport\GDSQueue;

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
    public function __construct($_, $Code, $Name)
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
     * @return \FilippoToso\Travelport\GDSQueue\OperatingCompany
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
     * @return \FilippoToso\Travelport\GDSQueue\OperatingCompany
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
     * @return \FilippoToso\Travelport\GDSQueue\OperatingCompany
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
