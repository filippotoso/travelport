<?php

namespace FilippoToso\Travelport\Rail;

class DriversLicense
{

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @var anonymous374 $LicenseNumber
     */
    protected $LicenseNumber = null;

    /**
     * @var typeElementStatus $ElStat
     */
    protected $ElStat = null;

    /**
     * @var boolean $KeyOverride
     */
    protected $KeyOverride = null;

    /**
     * @param typeRef $Key
     * @param anonymous374 $LicenseNumber
     * @param typeElementStatus $ElStat
     * @param boolean $KeyOverride
     */
    public function __construct($Key = null, $LicenseNumber = null, $ElStat = null, $KeyOverride = null)
    {
      $this->Key = $Key;
      $this->LicenseNumber = $LicenseNumber;
      $this->ElStat = $ElStat;
      $this->KeyOverride = $KeyOverride;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\Rail\DriversLicense
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return anonymous374
     */
    public function getLicenseNumber()
    {
      return $this->LicenseNumber;
    }

    /**
     * @param anonymous374 $LicenseNumber
     * @return \FilippoToso\Travelport\Rail\DriversLicense
     */
    public function setLicenseNumber($LicenseNumber)
    {
      $this->LicenseNumber = $LicenseNumber;
      return $this;
    }

    /**
     * @return typeElementStatus
     */
    public function getElStat()
    {
      return $this->ElStat;
    }

    /**
     * @param typeElementStatus $ElStat
     * @return \FilippoToso\Travelport\Rail\DriversLicense
     */
    public function setElStat($ElStat)
    {
      $this->ElStat = $ElStat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeyOverride()
    {
      return $this->KeyOverride;
    }

    /**
     * @param boolean $KeyOverride
     * @return \FilippoToso\Travelport\Rail\DriversLicense
     */
    public function setKeyOverride($KeyOverride)
    {
      $this->KeyOverride = $KeyOverride;
      return $this;
    }

}
