<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileLink
{

    /**
     * @var StringLength1to128 $GivenName
     */
    protected $GivenName = null;

    /**
     * @var StringLength1to128 $OtherName
     */
    protected $OtherName = null;

    /**
     * @var StringLength1to128 $Surname
     */
    protected $Surname = null;

    /**
     * @var StringLength1to128 $Nickname
     */
    protected $Nickname = null;

    /**
     * @var StringLength1to128 $ElectronicAddress
     */
    protected $ElectronicAddress = null;

    /**
     * @var typeProfileID $TravelerID
     */
    protected $TravelerID = null;

    /**
     * @var typeProfileLinkRelationship $Relationship
     */
    protected $Relationship = null;

    /**
     * @param StringLength1to128 $GivenName
     * @param StringLength1to128 $OtherName
     * @param StringLength1to128 $Surname
     * @param StringLength1to128 $Nickname
     * @param StringLength1to128 $ElectronicAddress
     * @param typeProfileID $TravelerID
     * @param typeProfileLinkRelationship $Relationship
     */
    public function __construct($GivenName = null, $OtherName = null, $Surname = null, $Nickname = null, $ElectronicAddress = null, $TravelerID = null, $Relationship = null)
    {
      $this->GivenName = $GivenName;
      $this->OtherName = $OtherName;
      $this->Surname = $Surname;
      $this->Nickname = $Nickname;
      $this->ElectronicAddress = $ElectronicAddress;
      $this->TravelerID = $TravelerID;
      $this->Relationship = $Relationship;
    }

    /**
     * @return StringLength1to128
     */
    public function getGivenName()
    {
      return $this->GivenName;
    }

    /**
     * @param StringLength1to128 $GivenName
     * @return \FilippoToso\Travelport\UProfile\ProfileLink
     */
    public function setGivenName($GivenName)
    {
      $this->GivenName = $GivenName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getOtherName()
    {
      return $this->OtherName;
    }

    /**
     * @param StringLength1to128 $OtherName
     * @return \FilippoToso\Travelport\UProfile\ProfileLink
     */
    public function setOtherName($OtherName)
    {
      $this->OtherName = $OtherName;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param StringLength1to128 $Surname
     * @return \FilippoToso\Travelport\UProfile\ProfileLink
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getNickname()
    {
      return $this->Nickname;
    }

    /**
     * @param StringLength1to128 $Nickname
     * @return \FilippoToso\Travelport\UProfile\ProfileLink
     */
    public function setNickname($Nickname)
    {
      $this->Nickname = $Nickname;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getElectronicAddress()
    {
      return $this->ElectronicAddress;
    }

    /**
     * @param StringLength1to128 $ElectronicAddress
     * @return \FilippoToso\Travelport\UProfile\ProfileLink
     */
    public function setElectronicAddress($ElectronicAddress)
    {
      $this->ElectronicAddress = $ElectronicAddress;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getTravelerID()
    {
      return $this->TravelerID;
    }

    /**
     * @param typeProfileID $TravelerID
     * @return \FilippoToso\Travelport\UProfile\ProfileLink
     */
    public function setTravelerID($TravelerID)
    {
      $this->TravelerID = $TravelerID;
      return $this;
    }

    /**
     * @return typeProfileLinkRelationship
     */
    public function getRelationship()
    {
      return $this->Relationship;
    }

    /**
     * @param typeProfileLinkRelationship $Relationship
     * @return \FilippoToso\Travelport\UProfile\ProfileLink
     */
    public function setRelationship($Relationship)
    {
      $this->Relationship = $Relationship;
      return $this;
    }

}
