<?php

namespace FilippoToso\Travelport\UProfile;

class HierarchyLevel
{

    /**
     * @var DefaultTemplate $DefaultTemplate
     */
    protected $DefaultTemplate = null;

    /**
     * @var typeHierarchyName $Name
     */
    protected $Name = null;

    /**
     * @var int $LevelNumber
     */
    protected $LevelNumber = null;

    /**
     * @var StringLength1to255 $Description
     */
    protected $Description = null;

    /**
     * @var typeTemplateID $TemplateID
     */
    protected $TemplateID = null;

    /**
     * @var typeVersion $TemplateVersion
     */
    protected $TemplateVersion = null;

    /**
     * @var typeID $HierarchyLevelID
     */
    protected $HierarchyLevelID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @param DefaultTemplate $DefaultTemplate
     * @param typeHierarchyName $Name
     * @param int $LevelNumber
     * @param StringLength1to255 $Description
     * @param typeTemplateID $TemplateID
     * @param typeVersion $TemplateVersion
     * @param typeID $HierarchyLevelID
     * @param typeProfileType $ProfileType
     */
    public function __construct($DefaultTemplate = null, $Name = null, $LevelNumber = null, $Description = null, $TemplateID = null, $TemplateVersion = null, $HierarchyLevelID = null, $ProfileType = null)
    {
      $this->DefaultTemplate = $DefaultTemplate;
      $this->Name = $Name;
      $this->LevelNumber = $LevelNumber;
      $this->Description = $Description;
      $this->TemplateID = $TemplateID;
      $this->TemplateVersion = $TemplateVersion;
      $this->HierarchyLevelID = $HierarchyLevelID;
      $this->ProfileType = $ProfileType;
    }

    /**
     * @return DefaultTemplate
     */
    public function getDefaultTemplate()
    {
      return $this->DefaultTemplate;
    }

    /**
     * @param DefaultTemplate $DefaultTemplate
     * @return \FilippoToso\Travelport\UProfile\HierarchyLevel
     */
    public function setDefaultTemplate($DefaultTemplate)
    {
      $this->DefaultTemplate = $DefaultTemplate;
      return $this;
    }

    /**
     * @return typeHierarchyName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeHierarchyName $Name
     * @return \FilippoToso\Travelport\UProfile\HierarchyLevel
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getLevelNumber()
    {
      return $this->LevelNumber;
    }

    /**
     * @param int $LevelNumber
     * @return \FilippoToso\Travelport\UProfile\HierarchyLevel
     */
    public function setLevelNumber($LevelNumber)
    {
      $this->LevelNumber = $LevelNumber;
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
     * @return \FilippoToso\Travelport\UProfile\HierarchyLevel
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return typeTemplateID
     */
    public function getTemplateID()
    {
      return $this->TemplateID;
    }

    /**
     * @param typeTemplateID $TemplateID
     * @return \FilippoToso\Travelport\UProfile\HierarchyLevel
     */
    public function setTemplateID($TemplateID)
    {
      $this->TemplateID = $TemplateID;
      return $this;
    }

    /**
     * @return typeVersion
     */
    public function getTemplateVersion()
    {
      return $this->TemplateVersion;
    }

    /**
     * @param typeVersion $TemplateVersion
     * @return \FilippoToso\Travelport\UProfile\HierarchyLevel
     */
    public function setTemplateVersion($TemplateVersion)
    {
      $this->TemplateVersion = $TemplateVersion;
      return $this;
    }

    /**
     * @return typeID
     */
    public function getHierarchyLevelID()
    {
      return $this->HierarchyLevelID;
    }

    /**
     * @param typeID $HierarchyLevelID
     * @return \FilippoToso\Travelport\UProfile\HierarchyLevel
     */
    public function setHierarchyLevelID($HierarchyLevelID)
    {
      $this->HierarchyLevelID = $HierarchyLevelID;
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
     * @return \FilippoToso\Travelport\UProfile\HierarchyLevel
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

}
