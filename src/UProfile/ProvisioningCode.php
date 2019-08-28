<?php

namespace FilippoToso\Travelport\UProfile;

class ProvisioningCode
{

    /**
     * @var StringLength1to128 $_
     */
    protected $_ = null;

    /**
     * @var anonymous876 $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param StringLength1to128 $_
     * @param anonymous876 $ProfileType
     */
    public function __construct($_ = null, $ProfileType = null)
    {
      $this->_ = $_;
      $this->ProfileType = $ProfileType;
    }

    /**
     * @return StringLength1to128
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StringLength1to128 $_
     * @return \FilippoToso\Travelport\UProfile\ProvisioningCode
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous876
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param anonymous876 $ProfileType
     * @return \FilippoToso\Travelport\UProfile\ProvisioningCode
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
