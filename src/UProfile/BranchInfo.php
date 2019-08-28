<?php

namespace FilippoToso\Travelport\UProfile;

class BranchInfo extends typeProfileInfo
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
     * @var ProviderInfo $ProviderInfo
     */
    protected $ProviderInfo = null;

    /**
     * @var ExternalIdentifier $ExternalIdentifier
     */
    protected $ExternalIdentifier = null;

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var typeGeoCityCode $GeoCityCode
     */
    protected $GeoCityCode = null;

    /**
     * @var boolean $Control
     */
    protected $Control = null;

    /**
     * @var typeProvisioningCode $BranchCode
     */
    protected $BranchCode = null;

    /**
     * @var typeCurrency $Currency
     */
    protected $Currency = null;

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
     * @param ProviderInfo $ProviderInfo
     * @param ExternalIdentifier $ExternalIdentifier
     * @param StringLength1to128 $Name
     * @param typeGeoCityCode $GeoCityCode
     * @param boolean $Control
     * @param typeProvisioningCode $BranchCode
     * @param typeCurrency $Currency
     * @param boolean $URSyncTo
     * @param boolean $ProfileSyncTo
     * @param boolean $ProfileSyncFrom
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $Address = null, $Phone = null, $ElectronicAddress = null, $ProviderInfo = null, $ExternalIdentifier = null, $Name = null, $GeoCityCode = null, $Control = null, $BranchCode = null, $Currency = null, $URSyncTo = null, $ProfileSyncTo = null, $ProfileSyncFrom = null)
    {
      parent::__construct($AdditionalIdentifier, $Description);
      $this->Address = $Address;
      $this->Phone = $Phone;
      $this->ElectronicAddress = $ElectronicAddress;
      $this->ProviderInfo = $ProviderInfo;
      $this->ExternalIdentifier = $ExternalIdentifier;
      $this->Name = $Name;
      $this->GeoCityCode = $GeoCityCode;
      $this->Control = $Control;
      $this->BranchCode = $BranchCode;
      $this->Currency = $Currency;
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
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
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
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
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
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
     */
    public function setElectronicAddress($ElectronicAddress)
    {
      $this->ElectronicAddress = $ElectronicAddress;
      return $this;
    }

    /**
     * @return ProviderInfo
     */
    public function getProviderInfo()
    {
      return $this->ProviderInfo;
    }

    /**
     * @param ProviderInfo $ProviderInfo
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
     */
    public function setProviderInfo($ProviderInfo)
    {
      $this->ProviderInfo = $ProviderInfo;
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
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
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
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeGeoCityCode
     */
    public function getGeoCityCode()
    {
      return $this->GeoCityCode;
    }

    /**
     * @param typeGeoCityCode $GeoCityCode
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
     */
    public function setGeoCityCode($GeoCityCode)
    {
      $this->GeoCityCode = $GeoCityCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getControl()
    {
      return $this->Control;
    }

    /**
     * @param boolean $Control
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
     */
    public function setControl($Control)
    {
      $this->Control = $Control;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getBranchCode()
    {
      return $this->BranchCode;
    }

    /**
     * @param typeProvisioningCode $BranchCode
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
     */
    public function setBranchCode($BranchCode)
    {
      $this->BranchCode = $BranchCode;
      return $this;
    }

    /**
     * @return typeCurrency
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param typeCurrency $Currency
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
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
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
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
     * @return \FilippoToso\Travelport\UProfile\BranchInfo
     */
    public function setProfileSyncFrom($ProfileSyncFrom)
    {
      $this->ProfileSyncFrom = $ProfileSyncFrom;
      return $this;
    }

}
