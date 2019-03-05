<?php

namespace FilippoToso\Travelport\UProfile;

class typeProfileParentHistory
{

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @var string $ProfileName
     */
    protected $ProfileName = null;

    /**
     * @var typeProvisioningCode $ProvisioningCode
     */
    protected $ProvisioningCode = null;

    /**
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     * @param string $ProfileName
     * @param typeProvisioningCode $ProvisioningCode
     */
    public function __construct($ProfileID = null, $ProfileType = null, $ProfileName = null, $ProvisioningCode = null)
    {
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
      $this->ProfileName = $ProfileName;
      $this->ProvisioningCode = $ProvisioningCode;
    }

    /**
     * @return typeProfileID
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param typeProfileID $ProfileID
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentHistory
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeProfileType $ProfileType
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentHistory
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileName()
    {
      return $this->ProfileName;
    }

    /**
     * @param string $ProfileName
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentHistory
     */
    public function setProfileName($ProfileName)
    {
      $this->ProfileName = $ProfileName;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getProvisioningCode()
    {
      return $this->ProvisioningCode;
    }

    /**
     * @param typeProvisioningCode $ProvisioningCode
     * @return \FilippoToso\Travelport\UProfile\typeProfileParentHistory
     */
    public function setProvisioningCode($ProvisioningCode)
    {
      $this->ProvisioningCode = $ProvisioningCode;
      return $this;
    }

}
