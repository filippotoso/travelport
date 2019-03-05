<?php

namespace FilippoToso\Travelport\UProfile;

class TemplateInfoUpdate
{

    /**
     * @var UNKNOWN $Name
     */
    protected $Name = null;

    /**
     * @var UNKNOWN $Description
     */
    protected $Description = null;

    /**
     * @param UNKNOWN $Name
     * @param UNKNOWN $Description
     */
    public function __construct($Name = null, $Description = null)
    {
      $this->Name = $Name;
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\UProfile\TemplateInfoUpdate
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param UNKNOWN $Description
     * @return \FilippoToso\Travelport\UProfile\TemplateInfoUpdate
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
