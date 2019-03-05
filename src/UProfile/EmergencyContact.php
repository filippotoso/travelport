<?php

namespace FilippoToso\Travelport\UProfile;

class EmergencyContact
{

    /**
     * @var PhoneNumber $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var UNKNOWN $Name
     */
    protected $Name = null;

    /**
     * @var UNKNOWN $Relationship
     */
    protected $Relationship = null;

    /**
     * @param PhoneNumber $PhoneNumber
     * @param UNKNOWN $Name
     * @param UNKNOWN $Relationship
     */
    public function __construct($PhoneNumber = null, $Name = null, $Relationship = null)
    {
      $this->PhoneNumber = $PhoneNumber;
      $this->Name = $Name;
      $this->Relationship = $Relationship;
    }

    /**
     * @return PhoneNumber
     */
    public function getPhoneNumber()
    {
      return $this->PhoneNumber;
    }

    /**
     * @param PhoneNumber $PhoneNumber
     * @return \FilippoToso\Travelport\UProfile\EmergencyContact
     */
    public function setPhoneNumber($PhoneNumber)
    {
      $this->PhoneNumber = $PhoneNumber;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param UNKNOWN $Name
     * @return \FilippoToso\Travelport\UProfile\EmergencyContact
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getRelationship()
    {
      return $this->Relationship;
    }

    /**
     * @param UNKNOWN $Relationship
     * @return \FilippoToso\Travelport\UProfile\EmergencyContact
     */
    public function setRelationship($Relationship)
    {
      $this->Relationship = $Relationship;
      return $this;
    }

}
