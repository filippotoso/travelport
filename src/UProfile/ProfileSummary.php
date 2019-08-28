<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileSummary
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var StringLength1to128 $ProvisioningCode
     */
    protected $ProvisioningCode = null;

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param string $Name
     * @param string $Description
     * @param StringLength1to128 $ProvisioningCode
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     */
    public function __construct($Name = null, $Description = null, $ProvisioningCode = null, $ProfileID = null, $ProfileType = null)
    {
      $this->Name = $Name;
      $this->Description = $Description;
      $this->ProvisioningCode = $ProvisioningCode;
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileSummary
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\UProfile\ProfileSummary
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getProvisioningCode()
    {
      return $this->ProvisioningCode;
    }

    /**
     * @param StringLength1to128 $ProvisioningCode
     * @return \FilippoToso\Travelport\UProfile\ProfileSummary
     */
    public function setProvisioningCode($ProvisioningCode)
    {
      $this->ProvisioningCode = $ProvisioningCode;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileSummary
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
     * @return \FilippoToso\Travelport\UProfile\ProfileSummary
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
