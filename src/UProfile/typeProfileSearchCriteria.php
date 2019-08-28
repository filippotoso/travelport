<?php

namespace FilippoToso\Travelport\UProfile;

class typeProfileSearchCriteria
{

    /**
     * @var typeSearchAddress $Address
     */
    protected $Address = null;

    /**
     * @var typeSearchPhone $Phone
     */
    protected $Phone = null;

    /**
     * @var typeSearchElectronicAddress $ElectronicAddress
     */
    protected $ElectronicAddress = null;

    /**
     * @var typeSearchExternalIdentifier $ExternalIdentifier
     */
    protected $ExternalIdentifier = null;

    /**
     * @var typeWildcard $AdditionalIdentifier
     */
    protected $AdditionalIdentifier = null;

    /**
     * @param typeWildcard $AdditionalIdentifier
     */
    public function __construct($AdditionalIdentifier = null)
    {
      $this->AdditionalIdentifier = $AdditionalIdentifier;
    }

    /**
     * @return typeSearchAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeSearchAddress $Address
     * @return \FilippoToso\Travelport\UProfile\typeProfileSearchCriteria
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return typeSearchPhone
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param typeSearchPhone $Phone
     * @return \FilippoToso\Travelport\UProfile\typeProfileSearchCriteria
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return typeSearchElectronicAddress
     */
    public function getElectronicAddress()
    {
      return $this->ElectronicAddress;
    }

    /**
     * @param typeSearchElectronicAddress $ElectronicAddress
     * @return \FilippoToso\Travelport\UProfile\typeProfileSearchCriteria
     */
    public function setElectronicAddress($ElectronicAddress)
    {
      $this->ElectronicAddress = $ElectronicAddress;
      return $this;
    }

    /**
     * @return typeSearchExternalIdentifier
     */
    public function getExternalIdentifier()
    {
      return $this->ExternalIdentifier;
    }

    /**
     * @param typeSearchExternalIdentifier $ExternalIdentifier
     * @return \FilippoToso\Travelport\UProfile\typeProfileSearchCriteria
     */
    public function setExternalIdentifier($ExternalIdentifier)
    {
      $this->ExternalIdentifier = $ExternalIdentifier;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getAdditionalIdentifier()
    {
      return $this->AdditionalIdentifier;
    }

    /**
     * @param typeWildcard $AdditionalIdentifier
     * @return \FilippoToso\Travelport\UProfile\typeProfileSearchCriteria
     */
    public function setAdditionalIdentifier($AdditionalIdentifier)
    {
      $this->AdditionalIdentifier = $AdditionalIdentifier;
      return $this;
    }

}
