<?php

namespace FilippoToso\Travelport\UProfile;

class typeSearchPhone
{

    /**
     * @var anonymous838 $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var anonymous839 $AreaCode
     */
    protected $AreaCode = null;

    /**
     * @var anonymous840 $LocalNumber
     */
    protected $LocalNumber = null;

    /**
     * @param anonymous838 $CountryCode
     * @param anonymous839 $AreaCode
     * @param anonymous840 $LocalNumber
     */
    public function __construct($CountryCode = null, $AreaCode = null, $LocalNumber = null)
    {
      $this->CountryCode = $CountryCode;
      $this->AreaCode = $AreaCode;
      $this->LocalNumber = $LocalNumber;
    }

    /**
     * @return anonymous838
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param anonymous838 $CountryCode
     * @return \FilippoToso\Travelport\UProfile\typeSearchPhone
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return anonymous839
     */
    public function getAreaCode()
    {
      return $this->AreaCode;
    }

    /**
     * @param anonymous839 $AreaCode
     * @return \FilippoToso\Travelport\UProfile\typeSearchPhone
     */
    public function setAreaCode($AreaCode)
    {
      $this->AreaCode = $AreaCode;
      return $this;
    }

    /**
     * @return anonymous840
     */
    public function getLocalNumber()
    {
      return $this->LocalNumber;
    }

    /**
     * @param anonymous840 $LocalNumber
     * @return \FilippoToso\Travelport\UProfile\typeSearchPhone
     */
    public function setLocalNumber($LocalNumber)
    {
      $this->LocalNumber = $LocalNumber;
      return $this;
    }

}
