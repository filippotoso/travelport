<?php

namespace FilippoToso\Travelport\UProfile;

class CreateField
{

    /**
     * @var typeStringRestriction $FreeformTextRestriction
     */
    protected $FreeformTextRestriction = null;

    /**
     * @var typeIntegerRestriction $WholeNumberRestriction
     */
    protected $WholeNumberRestriction = null;

    /**
     * @var typeFloatRestriction $DecimalRestriction
     */
    protected $DecimalRestriction = null;

    /**
     * @var typeStringRestriction $TextRestriction
     */
    protected $TextRestriction = null;

    /**
     * @var typeStringRestriction $AlphaNumericRestriction
     */
    protected $AlphaNumericRestriction = null;

    /**
     * @var typeFloatRestriction $PercentageRestriction
     */
    protected $PercentageRestriction = null;

    /**
     * @var typeFieldName $Name
     */
    protected $Name = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var typeCustomFieldDataFormat $Type
     */
    protected $Type = null;

    /**
     * @var boolean $Encrypted
     */
    protected $Encrypted = null;

    /**
     * @var typeMasked $Masked
     */
    protected $Masked = null;

    /**
     * @var StringLength1to255 $DefaultValue
     */
    protected $DefaultValue = null;

    /**
     * @var boolean $Protected
     */
    protected $Protected = null;

    /**
     * @var int $DisplayOrder
     */
    protected $DisplayOrder = null;

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
     */
    public function __construct($Name = null, $Description = null, $Type = null, $Encrypted = null, $Masked = null, $DefaultValue = null, $Protected = null, $DisplayOrder = null, $Inheritable = null, $MinOccurs = null, $MaxOccurs = null)
    {
      $this->Name = $Name;
      $this->Description = $Description;
      $this->Type = $Type;
      $this->Encrypted = $Encrypted;
      $this->Masked = $Masked;
      $this->DefaultValue = $DefaultValue;
      $this->Protected = $Protected;
      $this->DisplayOrder = $DisplayOrder;
      $this->Inheritable = $Inheritable;
      $this->MinOccurs = $MinOccurs;
      $this->MaxOccurs = $MaxOccurs;
    }

    /**
     * @return typeStringRestriction
     */
    public function getFreeformTextRestriction()
    {
      return $this->FreeformTextRestriction;
    }

    /**
     * @param typeStringRestriction $FreeformTextRestriction
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setFreeformTextRestriction($FreeformTextRestriction)
    {
      $this->FreeformTextRestriction = $FreeformTextRestriction;
      return $this;
    }

    /**
     * @return typeIntegerRestriction
     */
    public function getWholeNumberRestriction()
    {
      return $this->WholeNumberRestriction;
    }

    /**
     * @param typeIntegerRestriction $WholeNumberRestriction
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setWholeNumberRestriction($WholeNumberRestriction)
    {
      $this->WholeNumberRestriction = $WholeNumberRestriction;
      return $this;
    }

    /**
     * @return typeFloatRestriction
     */
    public function getDecimalRestriction()
    {
      return $this->DecimalRestriction;
    }

    /**
     * @param typeFloatRestriction $DecimalRestriction
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setDecimalRestriction($DecimalRestriction)
    {
      $this->DecimalRestriction = $DecimalRestriction;
      return $this;
    }

    /**
     * @return typeStringRestriction
     */
    public function getTextRestriction()
    {
      return $this->TextRestriction;
    }

    /**
     * @param typeStringRestriction $TextRestriction
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setTextRestriction($TextRestriction)
    {
      $this->TextRestriction = $TextRestriction;
      return $this;
    }

    /**
     * @return typeStringRestriction
     */
    public function getAlphaNumericRestriction()
    {
      return $this->AlphaNumericRestriction;
    }

    /**
     * @param typeStringRestriction $AlphaNumericRestriction
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setAlphaNumericRestriction($AlphaNumericRestriction)
    {
      $this->AlphaNumericRestriction = $AlphaNumericRestriction;
      return $this;
    }

    /**
     * @return typeFloatRestriction
     */
    public function getPercentageRestriction()
    {
      return $this->PercentageRestriction;
    }

    /**
     * @param typeFloatRestriction $PercentageRestriction
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setPercentageRestriction($PercentageRestriction)
    {
      $this->PercentageRestriction = $PercentageRestriction;
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
     * @return \FilippoToso\Travelport\UProfile\CreateField
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
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typeCustomFieldDataFormat
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param typeCustomFieldDataFormat $Type
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEncrypted()
    {
      return $this->Encrypted;
    }

    /**
     * @param boolean $Encrypted
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setEncrypted($Encrypted)
    {
      $this->Encrypted = $Encrypted;
      return $this;
    }

    /**
     * @return typeMasked
     */
    public function getMasked()
    {
      return $this->Masked;
    }

    /**
     * @param typeMasked $Masked
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setMasked($Masked)
    {
      $this->Masked = $Masked;
      return $this;
    }

    /**
     * @return StringLength1to255
     */
    public function getDefaultValue()
    {
      return $this->DefaultValue;
    }

    /**
     * @param StringLength1to255 $DefaultValue
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setDefaultValue($DefaultValue)
    {
      $this->DefaultValue = $DefaultValue;
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
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setProtected($Protected)
    {
      $this->Protected = $Protected;
      return $this;
    }

    /**
     * @return int
     */
    public function getDisplayOrder()
    {
      return $this->DisplayOrder;
    }

    /**
     * @param int $DisplayOrder
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setDisplayOrder($DisplayOrder)
    {
      $this->DisplayOrder = $DisplayOrder;
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
     * @return \FilippoToso\Travelport\UProfile\CreateField
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
     * @return \FilippoToso\Travelport\UProfile\CreateField
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
     * @return \FilippoToso\Travelport\UProfile\CreateField
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
      return $this;
    }

}
