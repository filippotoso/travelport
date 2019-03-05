<?php

namespace FilippoToso\Travelport\UProfile;

class DefaultTemplate
{

    /**
     * @var typeHierarchyOverrideType $ProfileType
     */
    protected $ProfileType = null;

    /**
     * @var typeTemplateID $TemplateID
     */
    protected $TemplateID = null;

    /**
     * @var typeVersion $TemplateVersion
     */
    protected $TemplateVersion = null;

    /**
     * @param typeHierarchyOverrideType $ProfileType
     * @param typeTemplateID $TemplateID
     * @param typeVersion $TemplateVersion
     */
    public function __construct($ProfileType = null, $TemplateID = null, $TemplateVersion = null)
    {
      $this->ProfileType = $ProfileType;
      $this->TemplateID = $TemplateID;
      $this->TemplateVersion = $TemplateVersion;
    }

    /**
     * @return typeHierarchyOverrideType
     */
    public function getProfileType()
    {
      return $this->ProfileType;
    }

    /**
     * @param typeHierarchyOverrideType $ProfileType
     * @return \FilippoToso\Travelport\UProfile\DefaultTemplate
     */
    public function setProfileType($ProfileType)
    {
      $this->ProfileType = $ProfileType;
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
     * @return \FilippoToso\Travelport\UProfile\DefaultTemplate
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
     * @return \FilippoToso\Travelport\UProfile\DefaultTemplate
     */
    public function setTemplateVersion($TemplateVersion)
    {
      $this->TemplateVersion = $TemplateVersion;
      return $this;
    }

}
