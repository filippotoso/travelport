<?php

namespace FilippoToso\Travelport\UProfile;

class AlternateContact
{

    /**
     * @var typeTaggableAddress $Address
     */
    protected $Address = null;

    /**
     * @var typeTaggablePhone $Phone
     */
    protected $Phone = null;

    /**
     * @var typeTaggableElectronicAddress $ElectronicAddress
     */
    protected $ElectronicAddress = null;

    /**
     * @param typeTaggableAddress $Address
     * @param typeTaggablePhone $Phone
     * @param typeTaggableElectronicAddress $ElectronicAddress
     */
    public function __construct($Address = null, $Phone = null, $ElectronicAddress = null)
    {
      $this->Address = $Address;
      $this->Phone = $Phone;
      $this->ElectronicAddress = $ElectronicAddress;
    }

    /**
     * @return typeTaggableAddress
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param typeTaggableAddress $Address
     * @return \FilippoToso\Travelport\UProfile\AlternateContact
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return typeTaggablePhone
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param typeTaggablePhone $Phone
     * @return \FilippoToso\Travelport\UProfile\AlternateContact
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return typeTaggableElectronicAddress
     */
    public function getElectronicAddress()
    {
      return $this->ElectronicAddress;
    }

    /**
     * @param typeTaggableElectronicAddress $ElectronicAddress
     * @return \FilippoToso\Travelport\UProfile\AlternateContact
     */
    public function setElectronicAddress($ElectronicAddress)
    {
      $this->ElectronicAddress = $ElectronicAddress;
      return $this;
    }

}
