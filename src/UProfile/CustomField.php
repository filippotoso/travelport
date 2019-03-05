<?php

namespace FilippoToso\Travelport\UProfile;

class CustomField extends typeCustomField
{

    /**
     * @var ActionRef $ActionRef
     */
    protected $ActionRef = null;

    /**
     * @var string $Label
     */
    protected $Label = null;

    /**
     * @var UNKNOWN $Searchable
     */
    protected $Searchable = null;

    /**
     * @var boolean $SearchOption
     */
    protected $SearchOption = null;

    /**
     * @var int $SearchOptionDisplayOrder
     */
    protected $SearchOptionDisplayOrder = null;

    /**
     * @var boolean $Hide
     */
    protected $Hide = null;

    /**
     * @var int $MinOccursOverride
     */
    protected $MinOccursOverride = null;

    /**
     * @var int $MaxOccursOverride
     */
    protected $MaxOccursOverride = null;

    /**
     * @var boolean $InheritableControlInd
     */
    protected $InheritableControlInd = null;

    /**
     * @var boolean $ReadOnly
     */
    protected $ReadOnly = null;

    /**
     * @var boolean $Overriden
     */
    protected $Overriden = null;

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
     * @param ActionRef $ActionRef
     * @param string $Label
     * @param UNKNOWN $Searchable
     * @param boolean $SearchOption
     * @param int $SearchOptionDisplayOrder
     * @param boolean $Hide
     * @param int $MinOccursOverride
     * @param int $MaxOccursOverride
     * @param boolean $InheritableControlInd
     * @param boolean $ReadOnly
     * @param boolean $Overriden
     */
    public function __construct($FreeformTextRestriction = null, $WholeNumberRestriction = null, $DecimalRestriction = null, $TextRestriction = null, $AlphaNumericRestriction = null, $PercentageRestriction = null, $ID = null, $Name = null, $Description = null, $Type = null, $Encrypted = null, $Masked = null, $DefaultValue = null, $Protected = null, $DisplayOrder = null, $Inheritable = null, $MinOccurs = null, $MaxOccurs = null, $ActionRef = null, $Label = null, $Searchable = null, $SearchOption = null, $SearchOptionDisplayOrder = null, $Hide = null, $MinOccursOverride = null, $MaxOccursOverride = null, $InheritableControlInd = null, $ReadOnly = null, $Overriden = null)
    {
      parent::__construct($FreeformTextRestriction, $WholeNumberRestriction, $DecimalRestriction, $TextRestriction, $AlphaNumericRestriction, $PercentageRestriction, $ID, $Name, $Description, $Type, $Encrypted, $Masked, $DefaultValue, $Protected, $DisplayOrder, $Inheritable, $MinOccurs, $MaxOccurs);
      $this->ActionRef = $ActionRef;
      $this->Label = $Label;
      $this->Searchable = $Searchable;
      $this->SearchOption = $SearchOption;
      $this->SearchOptionDisplayOrder = $SearchOptionDisplayOrder;
      $this->Hide = $Hide;
      $this->MinOccursOverride = $MinOccursOverride;
      $this->MaxOccursOverride = $MaxOccursOverride;
      $this->InheritableControlInd = $InheritableControlInd;
      $this->ReadOnly = $ReadOnly;
      $this->Overriden = $Overriden;
    }

    /**
     * @return ActionRef
     */
    public function getActionRef()
    {
      return $this->ActionRef;
    }

    /**
     * @param ActionRef $ActionRef
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setActionRef($ActionRef)
    {
      $this->ActionRef = $ActionRef;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->Label;
    }

    /**
     * @param string $Label
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setLabel($Label)
    {
      $this->Label = $Label;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getSearchable()
    {
      return $this->Searchable;
    }

    /**
     * @param UNKNOWN $Searchable
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setSearchable($Searchable)
    {
      $this->Searchable = $Searchable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSearchOption()
    {
      return $this->SearchOption;
    }

    /**
     * @param boolean $SearchOption
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setSearchOption($SearchOption)
    {
      $this->SearchOption = $SearchOption;
      return $this;
    }

    /**
     * @return int
     */
    public function getSearchOptionDisplayOrder()
    {
      return $this->SearchOptionDisplayOrder;
    }

    /**
     * @param int $SearchOptionDisplayOrder
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setSearchOptionDisplayOrder($SearchOptionDisplayOrder)
    {
      $this->SearchOptionDisplayOrder = $SearchOptionDisplayOrder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHide()
    {
      return $this->Hide;
    }

    /**
     * @param boolean $Hide
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setHide($Hide)
    {
      $this->Hide = $Hide;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinOccursOverride()
    {
      return $this->MinOccursOverride;
    }

    /**
     * @param int $MinOccursOverride
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setMinOccursOverride($MinOccursOverride)
    {
      $this->MinOccursOverride = $MinOccursOverride;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxOccursOverride()
    {
      return $this->MaxOccursOverride;
    }

    /**
     * @param int $MaxOccursOverride
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setMaxOccursOverride($MaxOccursOverride)
    {
      $this->MaxOccursOverride = $MaxOccursOverride;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInheritableControlInd()
    {
      return $this->InheritableControlInd;
    }

    /**
     * @param boolean $InheritableControlInd
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setInheritableControlInd($InheritableControlInd)
    {
      $this->InheritableControlInd = $InheritableControlInd;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReadOnly()
    {
      return $this->ReadOnly;
    }

    /**
     * @param boolean $ReadOnly
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setReadOnly($ReadOnly)
    {
      $this->ReadOnly = $ReadOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverriden()
    {
      return $this->Overriden;
    }

    /**
     * @param boolean $Overriden
     * @return \FilippoToso\Travelport\UProfile\CustomField
     */
    public function setOverriden($Overriden)
    {
      $this->Overriden = $Overriden;
      return $this;
    }

}
