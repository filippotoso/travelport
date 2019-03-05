<?php

namespace FilippoToso\Travelport\UProfile;

class Field extends typeCustomField
{

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
     * @param typeStringRestriction $FreeformTextRestriction
     * @param typeIntegerRestriction $WholeNumberRestriction
     * @param typeFloatRestriction $DecimalRestriction
     * @param typeStringRestriction $TextRestriction
     * @param typeStringRestriction $AlphaNumericRestriction
     * @param typeFloatRestriction $PercentageRestriction
     * @param typeFieldID $ID
     * @param typeFieldName $Name
     * @param StringLength1to255 $Description
     * @param typeCustomFieldDataFormat $Type
     * @param boolean $Encrypted
     * @param typeMasked $Masked
     * @param StringLength1to255 $DefaultValue
     * @param boolean $Protected
     * @param int $DisplayOrder
     * @param boolean $Inheritable
     * @param int $MinOccurs
     * @param int $MaxOccurs
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     * @param boolean $IsUsed
     */
    public function __construct($FreeformTextRestriction = null, $WholeNumberRestriction = null, $DecimalRestriction = null, $TextRestriction = null, $AlphaNumericRestriction = null, $PercentageRestriction = null, $ID = null, $Name = null, $Description = null, $Type = null, $Encrypted = null, $Masked = null, $DefaultValue = null, $Protected = null, $DisplayOrder = null, $Inheritable = null, $MinOccurs = null, $MaxOccurs = null, $ProfileID = null, $ProfileType = null, $IsUsed = null)
    {
      parent::__construct($FreeformTextRestriction, $WholeNumberRestriction, $DecimalRestriction, $TextRestriction, $AlphaNumericRestriction, $PercentageRestriction, $ID, $Name, $Description, $Type, $Encrypted, $Masked, $DefaultValue, $Protected, $DisplayOrder, $Inheritable, $MinOccurs, $MaxOccurs);
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
      $this->IsUsed = $IsUsed;
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
     * @return \FilippoToso\Travelport\UProfile\Field
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
     * @return \FilippoToso\Travelport\UProfile\Field
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
     * @return \FilippoToso\Travelport\UProfile\Field
     */
    public function setIsUsed($IsUsed)
    {
      $this->IsUsed = $IsUsed;
      return $this;
    }

}
