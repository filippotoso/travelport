<?php

namespace FilippoToso\Travelport\UProfile;

class BranchGroupInfo extends typeProfileInfo
{

    /**
     * @var Address $Address
     */
    protected $Address = null;

    /**
     * @var Phone $Phone
     */
    protected $Phone = null;

    /**
     * @var ElectronicAddress $ElectronicAddress
     */
    protected $ElectronicAddress = null;

    /**
     * @var ExternalIdentifier $ExternalIdentifier
     */
    protected $ExternalIdentifier = null;

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var typeProvisioningCode $BranchGroupCode
     */
    protected $BranchGroupCode = null;

    /**
     * @var boolean $URSyncTo
     */
    protected $URSyncTo = null;

    /**
     * @var boolean $ProfileSyncTo
     */
    protected $ProfileSyncTo = null;

    /**
     * @var boolean $ProfileSyncFrom
     */
    protected $ProfileSyncFrom = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param Address $Address
     * @param Phone $Phone
     * @param ElectronicAddress $ElectronicAddress
     * @param ExternalIdentifier $ExternalIdentifier
     * @param StringLength1to128 $Name
     * @param typeProvisioningCode $BranchGroupCode
     * @param boolean $URSyncTo
     * @param boolean $ProfileSyncTo
     * @param boolean $ProfileSyncFrom
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $Address = null, $Phone = null, $ElectronicAddress = null, $ExternalIdentifier = null, $Name = null, $BranchGroupCode = null, $URSyncTo = null, $ProfileSyncTo = null, $ProfileSyncFrom = null)
    {
      parent::__construct($AdditionalIdentifier, $Description);
      $this->Address = $Address;
      $this->Phone = $Phone;
      $this->ElectronicAddress = $ElectronicAddress;
      $this->ExternalIdentifier = $ExternalIdentifier;
      $this->Name = $Name;
      $this->BranchGroupCode = $BranchGroupCode;
      $this->URSyncTo = $URSyncTo;
      $this->ProfileSyncTo = $ProfileSyncTo;
      $this->ProfileSyncFrom = $ProfileSyncFrom;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param Address $Address
     * @return \FilippoToso\Travelport\UProfile\BranchGroupInfo
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return Phone
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param Phone $Phone
     * @return \FilippoToso\Travelport\UProfile\BranchGroupInfo
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return ElectronicAddress
     */
    public function getElectronicAddress()
    {
      return $this->ElectronicAddress;
    }

    /**
     * @param ElectronicAddress $ElectronicAddress
     * @return \FilippoToso\Travelport\UProfile\BranchGroupInfo
     */
    public function setElectronicAddress($ElectronicAddress)
    {
      $this->ElectronicAddress = $ElectronicAddress;
      return $this;
    }

    /**
     * @return ExternalIdentifier
     */
    public function getExternalIdentifier()
    {
      return $this->ExternalIdentifier;
    }

    /**
     * @param ExternalIdentifier $ExternalIdentifier
     * @return \FilippoToso\Travelport\UProfile\BranchGroupInfo
     */
    public function setExternalIdentifier($ExternalIdentifier)
    {
      $this->ExternalIdentifier = $ExternalIdentifier;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param StringLength1to128 $Name
     * @return \FilippoToso\Travelport\UProfile\BranchGroupInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getBranchGroupCode()
    {
      return $this->BranchGroupCode;
    }

    /**
     * @param typeProvisioningCode $BranchGroupCode
     * @return \FilippoToso\Travelport\UProfile\BranchGroupInfo
     */
    public function setBranchGroupCode($BranchGroupCode)
    {
      $this->BranchGroupCode = $BranchGroupCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getURSyncTo()
    {
      return $this->URSyncTo;
    }

    /**
     * @param boolean $URSyncTo
     * @return \FilippoToso\Travelport\UProfile\BranchGroupInfo
     */
    public function setURSyncTo($URSyncTo)
    {
      $this->URSyncTo = $URSyncTo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProfileSyncTo()
    {
      return $this->ProfileSyncTo;
    }

    /**
     * @param boolean $ProfileSyncTo
     * @return \FilippoToso\Travelport\UProfile\BranchGroupInfo
     */
    public function setProfileSyncTo($ProfileSyncTo)
    {
      $this->ProfileSyncTo = $ProfileSyncTo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProfileSyncFrom()
    {
      return $this->ProfileSyncFrom;
    }

    /**
     * @param boolean $ProfileSyncFrom
     * @return \FilippoToso\Travelport\UProfile\BranchGroupInfo
     */
    public function setProfileSyncFrom($ProfileSyncFrom)
    {
      $this->ProfileSyncFrom = $ProfileSyncFrom;
      return $this;
    }

}
