<?php

namespace FilippoToso\Travelport\UProfile;

class TravelerGroupInfo extends typeAccountTypeProfileInfo
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
     * @var StringLength1to128 $LocalLanguageName
     */
    protected $LocalLanguageName = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param StringLength1to255 $MidOfficeID
     * @param Address $Address
     * @param Phone $Phone
     * @param ElectronicAddress $ElectronicAddress
     * @param ExternalIdentifier $ExternalIdentifier
     * @param StringLength1to128 $Name
     * @param StringLength1to128 $LocalLanguageName
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $MidOfficeID = null, $Address = null, $Phone = null, $ElectronicAddress = null, $ExternalIdentifier = null, $Name = null, $LocalLanguageName = null)
    {
      parent::__construct($AdditionalIdentifier, $Description, $MidOfficeID);
      $this->Address = $Address;
      $this->Phone = $Phone;
      $this->ElectronicAddress = $ElectronicAddress;
      $this->ExternalIdentifier = $ExternalIdentifier;
      $this->Name = $Name;
      $this->LocalLanguageName = $LocalLanguageName;
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
     * @return \FilippoToso\Travelport\UProfile\TravelerGroupInfo
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
     * @return \FilippoToso\Travelport\UProfile\TravelerGroupInfo
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
     * @return \FilippoToso\Travelport\UProfile\TravelerGroupInfo
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
     * @return \FilippoToso\Travelport\UProfile\TravelerGroupInfo
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
     * @return \FilippoToso\Travelport\UProfile\TravelerGroupInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getLocalLanguageName()
    {
      return $this->LocalLanguageName;
    }

    /**
     * @param StringLength1to128 $LocalLanguageName
     * @return \FilippoToso\Travelport\UProfile\TravelerGroupInfo
     */
    public function setLocalLanguageName($LocalLanguageName)
    {
      $this->LocalLanguageName = $LocalLanguageName;
      return $this;
    }

}
