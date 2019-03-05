<?php

namespace FilippoToso\Travelport\UniversalRecord;

class TravelArranger
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var string $CompanyShortName
     */
    protected $CompanyShortName = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $_
     * @param string $CompanyShortName
     * @param string $Code
     */
    public function __construct($_ = null, $CompanyShortName = null, $Code = null)
    {
      $this->_ = $_;
      $this->CompanyShortName = $CompanyShortName;
      $this->Code = $Code;
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
     * @return \FilippoToso\Travelport\UniversalRecord\TravelArranger
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyShortName()
    {
      return $this->CompanyShortName;
    }

    /**
     * @param string $CompanyShortName
     * @return \FilippoToso\Travelport\UniversalRecord\TravelArranger
     */
    public function setCompanyShortName($CompanyShortName)
    {
      $this->CompanyShortName = $CompanyShortName;
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
     * @return \FilippoToso\Travelport\UniversalRecord\TravelArranger
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
