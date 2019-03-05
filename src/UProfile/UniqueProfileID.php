<?php

namespace FilippoToso\Travelport\UProfile;

class UniqueProfileID
{

    /**
     * @var StringLength6to128 $_
     */
    protected $_ = null;

    /**
     * @var anonymous878 $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @var typeProvisioningCode $AgencyCode
     */
    protected $AgencyCode = null;

    /**
     * @param StringLength6to128 $_
     * @param anonymous878 $ProfileType
     * @param typeProvisioningCode $AgencyCode
     */
    public function __construct($_ = null, $ProfileType = null, $AgencyCode = null)
    {
      $this->_ = $_;
      $this->ProfileType = $ProfileType;
      $this->AgencyCode = $AgencyCode;
    }

    /**
     * @return StringLength6to128
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param StringLength6to128 $_
     * @return \FilippoToso\Travelport\UProfile\UniqueProfileID
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return anonymous878
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param anonymous878 $ProfileType
     * @return \FilippoToso\Travelport\UProfile\UniqueProfileID
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getAgencyCode()
    {
      return $this->AgencyCode;
    }

    /**
     * @param typeProvisioningCode $AgencyCode
     * @return \FilippoToso\Travelport\UProfile\UniqueProfileID
     */
    public function setAgencyCode($AgencyCode)
    {
      $this->AgencyCode = $AgencyCode;
      return $this;
    }

}
