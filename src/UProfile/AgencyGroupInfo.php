<?php

namespace FilippoToso\Travelport\UProfile;

class AgencyGroupInfo extends typeProfileInfo
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
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param Address $Address
     * @param Phone $Phone
     * @param ElectronicAddress $ElectronicAddress
     * @param ExternalIdentifier $ExternalIdentifier
     * @param StringLength1to128 $Name
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $Address = null, $Phone = null, $ElectronicAddress = null, $ExternalIdentifier = null, $Name = null)
    {
      parent::__construct($AdditionalIdentifier, $Description);
      $this->Address = $Address;
      $this->Phone = $Phone;
      $this->ElectronicAddress = $ElectronicAddress;
      $this->ExternalIdentifier = $ExternalIdentifier;
      $this->Name = $Name;
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
     * @return \FilippoToso\Travelport\UProfile\AgencyGroupInfo
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
     * @return \FilippoToso\Travelport\UProfile\AgencyGroupInfo
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
     * @return \FilippoToso\Travelport\UProfile\AgencyGroupInfo
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
     * @return \FilippoToso\Travelport\UProfile\AgencyGroupInfo
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
     * @return \FilippoToso\Travelport\UProfile\AgencyGroupInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
