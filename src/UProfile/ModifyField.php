<?php

namespace FilippoToso\Travelport\UProfile;

class ModifyField extends typeStringRestriction
{

    /**
     * @var FreeformTextRestriction $FreeformTextRestriction
     */
    protected $FreeformTextRestriction = null;

    /**
     * @var WholeNumberRestriction $WholeNumberRestriction
     */
    protected $WholeNumberRestriction = null;

    /**
     * @var DecimalRestriction $DecimalRestriction
     */
    protected $DecimalRestriction = null;

    /**
     * @var TextRestriction $TextRestriction
     */
    protected $TextRestriction = null;

    /**
     * @var AlphaNumericRestriction $AlphaNumericRestriction
     */
    protected $AlphaNumericRestriction = null;

    /**
     * @var PercentageRestriction $PercentageRestriction
     */
    protected $PercentageRestriction = null;

    /**
     * @var typeFieldID $ID
     */
    protected $ID = null;

    /**
     * @var typeAction $Action
     */
    protected $Action = null;

    /**
     * @var boolean $Force
     */
    protected $Force = null;

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
     * @param int $MinLength
     * @param int $MaxLength
     * @param typeFieldID $ID
     * @param typeAction $Action
     * @param boolean $Force
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
    public function __construct($MinLength = null, $MaxLength = null, $ID = null, $Action = null, $Force = null, $Name = null, $Description = null, $Type = null, $Encrypted = null, $Masked = null, $DefaultValue = null, $Protected = null, $DisplayOrder = null, $Inheritable = null, $MinOccurs = null, $MaxOccurs = null)
    {
      parent::__construct($MinLength, $MaxLength);
      $this->ID = $ID;
      $this->Action = $Action;
      $this->Force = $Force;
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
     * @return FreeformTextRestriction
     */
    public function getFreeformTextRestriction()
    {
      return $this->FreeformTextRestriction;
    }

    /**
     * @param FreeformTextRestriction $FreeformTextRestriction
     * @return \FilippoToso\Travelport\UProfile\ModifyField
     */
    public function setFreeformTextRestriction($FreeformTextRestriction)
    {
      $this->FreeformTextRestriction = $FreeformTextRestriction;
      return $this;
    }

    /**
     * @return WholeNumberRestriction
     */
    public function getWholeNumberRestriction()
    {
      return $this->WholeNumberRestriction;
    }

    /**
     * @param WholeNumberRestriction $WholeNumberRestriction
     * @return \FilippoToso\Travelport\UProfile\ModifyField
     */
    public function setWholeNumberRestriction($WholeNumberRestriction)
    {
      $this->WholeNumberRestriction = $WholeNumberRestriction;
      return $this;
    }

    /**
     * @return DecimalRestriction
     */
    public function getDecimalRestriction()
    {
      return $this->DecimalRestriction;
    }

    /**
     * @param DecimalRestriction $DecimalRestriction
     * @return \FilippoToso\Travelport\UProfile\ModifyField
     */
    public function setDecimalRestriction($DecimalRestriction)
    {
      $this->DecimalRestriction = $DecimalRestriction;
      return $this;
    }

    /**
     * @return TextRestriction
     */
    public function getTextRestriction()
    {
      return $this->TextRestriction;
    }

    /**
     * @param TextRestriction $TextRestriction
     * @return \FilippoToso\Travelport\UProfile\ModifyField
     */
    public function setTextRestriction($TextRestriction)
    {
      $this->TextRestriction = $TextRestriction;
      return $this;
    }

    /**
     * @return AlphaNumericRestriction
     */
    public function getAlphaNumericRestriction()
    {
      return $this->AlphaNumericRestriction;
    }

    /**
     * @param AlphaNumericRestriction $AlphaNumericRestriction
     * @return \FilippoToso\Travelport\UProfile\ModifyField
     */
    public function setAlphaNumericRestriction($AlphaNumericRestriction)
    {
      $this->AlphaNumericRestriction = $AlphaNumericRestriction;
      return $this;
    }

    /**
     * @return PercentageRestriction
     */
    public function getPercentageRestriction()
    {
      return $this->PercentageRestriction;
    }

    /**
     * @param PercentageRestriction $PercentageRestriction
     * @return \FilippoToso\Travelport\UProfile\ModifyField
     */
    public function setPercentageRestriction($PercentageRestriction)
    {
      $this->PercentageRestriction = $PercentageRestriction;
      return $this;
    }

    /**
     * @return typeFieldID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeFieldID $ID
     * @return \FilippoToso\Travelport\UProfile\ModifyField
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return typeAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param typeAction $Action
     * @return \FilippoToso\Travelport\UProfile\ModifyField
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForce()
    {
      return $this->Force;
    }

    /**
     * @param boolean $Force
     * @return \FilippoToso\Travelport\UProfile\ModifyField
     */
    public function setForce($Force)
    {
      $this->Force = $Force;
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
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
     * @return \FilippoToso\Travelport\UProfile\ModifyField
     */
    public function setMaxOccurs($MaxOccurs)
    {
      $this->MaxOccurs = $MaxOccurs;
      return $this;
    }

}
