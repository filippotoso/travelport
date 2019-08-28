<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileTemplate
{

    /**
     * @var FixedFieldGroup $FixedFieldGroup
     */
    protected $FixedFieldGroup = null;

    /**
     * @var CustomField $CustomField
     */
    protected $CustomField = null;

    /**
     * @var CustomFieldGroup $CustomFieldGroup
     */
    protected $CustomFieldGroup = null;

    /**
     * @var OverrideDefinition $OverrideDefinition
     */
    protected $OverrideDefinition = null;

    /**
     * @var typeTemplateID $ID
     */
    protected $ID = null;

    /**
     * @var typeTemplateName $Name
     */
    protected $Name = null;

    /**
     * @var typeTemplateDescription $Description
     */
    protected $Description = null;

    /**
     * @var typeVersion $Version
     */
    protected $Version = null;

    /**
     * @var typeTemplateID $BaseTemplateID
     */
    protected $BaseTemplateID = null;

    /**
     * @var typeProfileID $OwnerProfileID
     */
    protected $OwnerProfileID = null;

    /**
     * @param FixedFieldGroup $FixedFieldGroup
     * @param CustomField $CustomField
     * @param CustomFieldGroup $CustomFieldGroup
     * @param OverrideDefinition $OverrideDefinition
     * @param typeTemplateID $ID
     * @param typeTemplateName $Name
     * @param typeTemplateDescription $Description
     * @param typeVersion $Version
     * @param typeTemplateID $BaseTemplateID
     * @param typeProfileID $OwnerProfileID
     */
    public function __construct($FixedFieldGroup = null, $CustomField = null, $CustomFieldGroup = null, $OverrideDefinition = null, $ID = null, $Name = null, $Description = null, $Version = null, $BaseTemplateID = null, $OwnerProfileID = null)
    {
      $this->FixedFieldGroup = $FixedFieldGroup;
      $this->CustomField = $CustomField;
      $this->CustomFieldGroup = $CustomFieldGroup;
      $this->OverrideDefinition = $OverrideDefinition;
      $this->ID = $ID;
      $this->Name = $Name;
      $this->Description = $Description;
      $this->Version = $Version;
      $this->BaseTemplateID = $BaseTemplateID;
      $this->OwnerProfileID = $OwnerProfileID;
    }

    /**
     * @return FixedFieldGroup
     */
    public function getFixedFieldGroup()
    {
      return $this->FixedFieldGroup;
    }

    /**
     * @param FixedFieldGroup $FixedFieldGroup
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplate
     */
    public function setFixedFieldGroup($FixedFieldGroup)
    {
      $this->FixedFieldGroup = $FixedFieldGroup;
      return $this;
    }

    /**
     * @return CustomField
     */
    public function getCustomField()
    {
      return $this->CustomField;
    }

    /**
     * @param CustomField $CustomField
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplate
     */
    public function setCustomField($CustomField)
    {
      $this->CustomField = $CustomField;
      return $this;
    }

    /**
     * @return CustomFieldGroup
     */
    public function getCustomFieldGroup()
    {
      return $this->CustomFieldGroup;
    }

    /**
     * @param CustomFieldGroup $CustomFieldGroup
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplate
     */
    public function setCustomFieldGroup($CustomFieldGroup)
    {
      $this->CustomFieldGroup = $CustomFieldGroup;
      return $this;
    }

    /**
     * @return OverrideDefinition
     */
    public function getOverrideDefinition()
    {
      return $this->OverrideDefinition;
    }

    /**
     * @param OverrideDefinition $OverrideDefinition
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplate
     */
    public function setOverrideDefinition($OverrideDefinition)
    {
      $this->OverrideDefinition = $OverrideDefinition;
      return $this;
    }

    /**
     * @return typeTemplateID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeTemplateID $ID
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplate
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return typeTemplateName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeTemplateName $Name
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplate
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeTemplateDescription
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param typeTemplateDescription $Description
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplate
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typeVersion
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param typeVersion $Version
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplate
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

    /**
     * @return typeTemplateID
     */
    public function getBaseTemplateID()
    {
      return $this->BaseTemplateID;
    }

    /**
     * @param typeTemplateID $BaseTemplateID
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplate
     */
    public function setBaseTemplateID($BaseTemplateID)
    {
      $this->BaseTemplateID = $BaseTemplateID;
      return $this;
    }

    /**
     * @return typeProfileID
     */
    public function getOwnerProfileID()
    {
      return $this->OwnerProfileID;
    }

    /**
     * @param typeProfileID $OwnerProfileID
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplate
     */
    public function setOwnerProfileID($OwnerProfileID)
    {
      $this->OwnerProfileID = $OwnerProfileID;
      return $this;
    }

}
