<?php

namespace FilippoToso\Travelport\UProfile;

class FieldGroup
{

    /**
     * @var Field $Field
     */
    protected $Field = null;

    /**
     * @var typeID $ID
     */
    protected $ID = null;

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @var boolean $IsUsed
     */
    protected $IsUsed = null;

    /**
     * @var typeFieldName $Name
     */
    protected $Name = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var boolean $Protected
     */
    protected $Protected = null;

    /**
     * @var boolean $Inheritable
     */
    protected $Inheritable = null;

    /**
     * @var int $MinOccurs
     */
    protected $MinOccurs = null;

    /**
     * @var int $MaxOccurs
     */
    protected $MaxOccurs = null;

    /**
     * @param Field $Field
     * @param typeID $ID
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     * @param boolean $IsUsed
     * @param typeFieldName $Name
     * @param StringLength1to255 $Description
     * @param boolean $Protected
     * @param boolean $Inheritable
     * @param int $MinOccurs
     * @param int $MaxOccurs
     */
    public function __construct($Field = null, $ID = null, $ProfileID = null, $ProfileType = null, $IsUsed = null, $Name = null, $Description = null, $Protected = null, $Inheritable = null, $MinOccurs = null, $MaxOccurs = null)
    {
      $this->Field = $Field;
      $this->ID = $ID;
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
      $this->IsUsed = $IsUsed;
      $this->Name = $Name;
      $this->Description = $Description;
      $this->Protected = $Protected;
      $this->Inheritable = $Inheritable;
      $this->MinOccurs = $MinOccurs;
      $this->MaxOccurs = $MaxOccurs;
    }

    /**
     * @return Field
     */
    public function getField()
    {
      return $this->Field;
    }

    /**
     * @param Field $Field
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setField($Field)
    {
      $this->Field = $Field;
      return $this;
    }

    /**
     * @return typeID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeID $ID
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param typeProfileID $ProfileID
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeProfileType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeProfileType $ProfileType
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsUsed()
    {
      return $this->IsUsed;
    }

    /**
     * @param boolean $IsUsed
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setIsUsed($IsUsed)
    {
      $this->IsUsed = $IsUsed;
      return $this;
    }

    /**
     * @return typeFieldName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeFieldName $Name
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param StringLength1to255 $Description
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getProtected()
    {
      return $this->Protected;
    }

    /**
     * @param boolean $Protected
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setProtected($Protected)
    {
      $this->Protected = $Protected;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInheritable()
    {
      return $this->Inheritable;
    }

    /**
     * @param boolean $Inheritable
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setInheritable($Inheritable)
    {
      $this->Inheritable = $Inheritable;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinOccurs()
    {
      return $this->MinOccurs;
    }

    /**
     * @param int $MinOccurs
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setMinOccurs($MinOccurs)
    {
      $this->MinOccurs = $MinOccurs;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxOccurs()
    {
      return $this->MaxOccurs;
    }

    /**
     * @param int $MaxOccurs
     * @return \FilippoToso\Travelport\UProfile\FieldGroup
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
      return $this;
    }

}
