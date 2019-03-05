<?php

namespace FilippoToso\Travelport\UProfile;

class typeProfileLinkHistory
{

    /**
     * @var typeProfileID $TravelerID
     */
    protected $TravelerID = null;

    /**
     * @var typeProfileLinkRelationship $Relationship
     */
    protected $Relationship = null;

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
     * @param typeProfileID $TravelerID
     * @param typeProfileLinkRelationship $Relationship
     * @param StringLength1to128 $GivenName
     * @param StringLength1to128 $OtherName
     * @param StringLength1to128 $Surname
     * @param StringLength1to128 $Nickname
     * @param StringLength1to128 $ElectronicAddress
     */
    public function __construct($TravelerID = null, $Relationship = null, $GivenName = null, $OtherName = null, $Surname = null, $Nickname = null, $ElectronicAddress = null)
    {
      $this->TravelerID = $TravelerID;
      $this->Relationship = $Relationship;
      $this->GivenName = $GivenName;
      $this->OtherName = $OtherName;
      $this->Surname = $Surname;
      $this->Nickname = $Nickname;
      $this->ElectronicAddress = $ElectronicAddress;
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
     * @return \FilippoToso\Travelport\UProfile\typeProfileLinkHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeProfileLinkHistory
     */
    public function setRelationship($Relationship)
    {
      $this->Relationship = $Relationship;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\typeProfileLinkHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeProfileLinkHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeProfileLinkHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeProfileLinkHistory
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
     * @return \FilippoToso\Travelport\UProfile\typeProfileLinkHistory
     */
    public function setElectronicAddress($ElectronicAddress)
    {
      $this->ElectronicAddress = $ElectronicAddress;
      return $this;
    }

}
