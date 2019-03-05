<?php

namespace FilippoToso\Travelport\UProfile;

class AgencyInfo extends typeProfileInfo
{

    /**
     * @var Advisory $Advisory
     */
    protected $Advisory = null;

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
     * @var StringLength1to8 $IataNumber
     */
    protected $IataNumber = null;

    /**
     * @var typeProvisioningCode $AgencyCode
     */
    protected $AgencyCode = null;

    /**
     * @var boolean $UsesTemplate
     */
    protected $UsesTemplate = null;

    /**
     * @var anonymous545 $URSyncData
     */
    protected $URSyncData = null;

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
     * @param Advisory $Advisory
     * @param Address $Address
     * @param Phone $Phone
     * @param ElectronicAddress $ElectronicAddress
     * @param ExternalIdentifier $ExternalIdentifier
     * @param StringLength1to128 $Name
     * @param StringLength1to8 $IataNumber
     * @param typeProvisioningCode $AgencyCode
     * @param boolean $UsesTemplate
     * @param anonymous545 $URSyncData
     * @param boolean $URSyncTo
     * @param boolean $ProfileSyncTo
     * @param boolean $ProfileSyncFrom
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $Advisory = null, $Address = null, $Phone = null, $ElectronicAddress = null, $ExternalIdentifier = null, $Name = null, $IataNumber = null, $AgencyCode = null, $UsesTemplate = null, $URSyncData = null, $URSyncTo = null, $ProfileSyncTo = null, $ProfileSyncFrom = null)
    {
      parent::__construct($AdditionalIdentifier, $Description);
      $this->Advisory = $Advisory;
      $this->Address = $Address;
      $this->Phone = $Phone;
      $this->ElectronicAddress = $ElectronicAddress;
      $this->ExternalIdentifier = $ExternalIdentifier;
      $this->Name = $Name;
      $this->IataNumber = $IataNumber;
      $this->AgencyCode = $AgencyCode;
      $this->UsesTemplate = $UsesTemplate;
      $this->URSyncData = $URSyncData;
      $this->URSyncTo = $URSyncTo;
      $this->ProfileSyncTo = $ProfileSyncTo;
      $this->ProfileSyncFrom = $ProfileSyncFrom;
    }

    /**
     * @return Advisory
     */
    public function getAdvisory()
    {
      return $this->Advisory;
    }

    /**
     * @param Advisory $Advisory
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
     */
    public function setAdvisory($Advisory)
    {
      $this->Advisory = $Advisory;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
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
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
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
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
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
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
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
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StringLength1to8
     */
    public function getIataNumber()
    {
      return $this->IataNumber;
    }

    /**
     * @param StringLength1to8 $IataNumber
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
     */
    public function setIataNumber($IataNumber)
    {
      $this->IataNumber = $IataNumber;
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
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
     */
    public function setAgencyCode($AgencyCode)
    {
      $this->AgencyCode = $AgencyCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUsesTemplate()
    {
      return $this->UsesTemplate;
    }

    /**
     * @param boolean $UsesTemplate
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
     */
    public function setUsesTemplate($UsesTemplate)
    {
      $this->UsesTemplate = $UsesTemplate;
      return $this;
    }

    /**
     * @return anonymous545
     */
    public function getURSyncData()
    {
      return $this->URSyncData;
    }

    /**
     * @param anonymous545 $URSyncData
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
     */
    public function setURSyncData($URSyncData)
    {
      $this->URSyncData = $URSyncData;
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
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
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
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
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
     * @return \FilippoToso\Travelport\UProfile\AgencyInfo
     */
    public function setProfileSyncFrom($ProfileSyncFrom)
    {
      $this->ProfileSyncFrom = $ProfileSyncFrom;
      return $this;
    }

}
