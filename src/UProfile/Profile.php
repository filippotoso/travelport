<?php

namespace FilippoToso\Travelport\UProfile;

class Profile
{

    /**
     * @var ProfileData $ProfileData
     */
    protected $ProfileData = null;

    /**
     * @var ProfileLink $ProfileLink
     */
    protected $ProfileLink = null;

    /**
     * @var typeProfileParentWithData $ProfileParent
     */
    protected $ProfileParent = null;

    /**
     * @var ProfileParentSummary $ProfileParentSummary
     */
    protected $ProfileParentSummary = null;

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeProfileType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @var typeEntityName $Name
     */
    protected $Name = null;

    /**
     * @var typeProfileEntityStatusWithDelete $Status
     */
    protected $Status = null;

    /**
     * @var typeID $HierarchyLevelID
     */
    protected $HierarchyLevelID = null;

    /**
     * @var typeVersion $Version
     */
    protected $Version = null;

    /**
     * @var typeTemplateID $TemplateID
     */
    protected $TemplateID = null;

    /**
     * @var typeVersion $TemplateVersion
     */
    protected $TemplateVersion = null;

    /**
     * @param ProfileData $ProfileData
     * @param ProfileLink $ProfileLink
     * @param typeProfileParentWithData $ProfileParent
     * @param ProfileParentSummary $ProfileParentSummary
     * @param typeProfileID $ProfileID
     * @param typeProfileType $ProfileType
     * @param typeEntityName $Name
     * @param typeProfileEntityStatusWithDelete $Status
     * @param typeID $HierarchyLevelID
     * @param typeVersion $Version
     * @param typeTemplateID $TemplateID
     * @param typeVersion $TemplateVersion
     */
    public function __construct($ProfileData = null, $ProfileLink = null, $ProfileParent = null, $ProfileParentSummary = null, $ProfileID = null, $ProfileType = null, $Name = null, $Status = null, $HierarchyLevelID = null, $Version = null, $TemplateID = null, $TemplateVersion = null)
    {
      $this->ProfileData = $ProfileData;
      $this->ProfileLink = $ProfileLink;
      $this->ProfileParent = $ProfileParent;
      $this->ProfileParentSummary = $ProfileParentSummary;
      $this->ProfileID = $ProfileID;
      $this->ProfileType = $ProfileType;
      $this->Name = $Name;
      $this->Status = $Status;
      $this->HierarchyLevelID = $HierarchyLevelID;
      $this->Version = $Version;
      $this->TemplateID = $TemplateID;
      $this->TemplateVersion = $TemplateVersion;
    }

    /**
     * @return ProfileData
     */
    public function getProfileData()
    {
      return $this->ProfileData;
    }

    /**
     * @param ProfileData $ProfileData
     * @return \FilippoToso\Travelport\UProfile\Profile
     */
    public function setProfileData($ProfileData)
    {
      $this->ProfileData = $ProfileData;
      return $this;
    }

    /**
     * @return ProfileLink
     */
    public function getProfileLink()
    {
      return $this->ProfileLink;
    }

    /**
     * @param ProfileLink $ProfileLink
     * @return \FilippoToso\Travelport\UProfile\Profile
     */
    public function setProfileLink($ProfileLink)
    {
      $this->ProfileLink = $ProfileLink;
      return $this;
    }

    /**
     * @return typeProfileParentWithData
     */
    public function getProfileParent()
    {
      return $this->ProfileParent;
    }

    /**
     * @param typeProfileParentWithData $ProfileParent
     * @return \FilippoToso\Travelport\UProfile\Profile
     */
    public function setProfileParent($ProfileParent)
    {
      $this->ProfileParent = $ProfileParent;
      return $this;
    }

    /**
     * @return ProfileParentSummary
     */
    public function getProfileParentSummary()
    {
      return $this->ProfileParentSummary;
    }

    /**
     * @param ProfileParentSummary $ProfileParentSummary
     * @return \FilippoToso\Travelport\UProfile\Profile
     */
    public function setProfileParentSummary($ProfileParentSummary)
    {
      $this->ProfileParentSummary = $ProfileParentSummary;
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
     * @return \FilippoToso\Travelport\UProfile\Profile
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
     * @return \FilippoToso\Travelport\UProfile\Profile
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
      return $this;
    }

    /**
     * @return typeEntityName
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeEntityName $Name
     * @return \FilippoToso\Travelport\UProfile\Profile
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeProfileEntityStatusWithDelete
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeProfileEntityStatusWithDelete $Status
     * @return \FilippoToso\Travelport\UProfile\Profile
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
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
     * @return \FilippoToso\Travelport\UProfile\Profile
     */
    public function setHierarchyLevelID($HierarchyLevelID)
    {
      $this->HierarchyLevelID = $HierarchyLevelID;
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
     * @return \FilippoToso\Travelport\UProfile\Profile
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
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
     * @return \FilippoToso\Travelport\UProfile\Profile
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
     * @return \FilippoToso\Travelport\UProfile\Profile
     */
    public function setTemplateVersion($TemplateVersion)
    {
      $this->TemplateVersion = $TemplateVersion;
      return $this;
    }

}
