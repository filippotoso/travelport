<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileTemplateSummary
{

    /**
     * @var typeTemplateID $ID
     */
    protected $ID = null;

    /**
     * @var UNKNOWN $Name
     */
    protected $Name = null;

    /**
     * @var UNKNOWN $Version
     */
    protected $Version = null;

    /**
     * @param typeTemplateID $ID
     * @param UNKNOWN $Name
     * @param UNKNOWN $Version
     */
    public function __construct($ID = null, $Name = null, $Version = null)
    {
      $this->ID = $ID;
      $this->Name = $Name;
      $this->Version = $Version;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplateSummary
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplateSummary
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param UNKNOWN $Version
     * @return \FilippoToso\Travelport\UProfile\ProfileTemplateSummary
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
