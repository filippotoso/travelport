<?php

namespace FilippoToso\Travelport\UProfile;

class typeSearchContact
{

    /**
     * @var typeWildcard $GivenName
     */
    protected $GivenName = null;

    /**
     * @var typeWildcard $OtherName
     */
    protected $OtherName = null;

    /**
     * @var typeWildcard $Surname
     */
    protected $Surname = null;

    /**
     * @var typeWildcard $NickName
     */
    protected $NickName = null;

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
     * @var typeContactType $Type
     */
    protected $Type = null;

    /**
     * @param typeContactType $Type
     */
    public function __construct($Type = null)
    {
      $this->Type = $Type;
    }

    /**
     * @return typeWildcard
     */
    public function getGivenName()
    {
      return $this->GivenName;
    }

    /**
     * @param typeWildcard $GivenName
     * @return \FilippoToso\Travelport\UProfile\typeSearchContact
     */
    public function setGivenName($GivenName)
    {
      $this->GivenName = $GivenName;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getOtherName()
    {
      return $this->OtherName;
    }

    /**
     * @param typeWildcard $OtherName
     * @return \FilippoToso\Travelport\UProfile\typeSearchContact
     */
    public function setOtherName($OtherName)
    {
      $this->OtherName = $OtherName;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param typeWildcard $Surname
     * @return \FilippoToso\Travelport\UProfile\typeSearchContact
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getNickName()
    {
      return $this->NickName;
    }

    /**
     * @param typeWildcard $NickName
     * @return \FilippoToso\Travelport\UProfile\typeSearchContact
     */
    public function setNickName($NickName)
    {
      $this->NickName = $NickName;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\typeSearchContact
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
     * @return \FilippoToso\Travelport\UProfile\typeSearchContact
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
     * @return \FilippoToso\Travelport\UProfile\typeSearchContact
     */
    public function setElectronicAddress($ElectronicAddress)
    {
      $this->ElectronicAddress = $ElectronicAddress;
      return $this;
    }

    /**
     * @return typeContactType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeContactType $Type
     * @return \FilippoToso\Travelport\UProfile\typeSearchContact
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
