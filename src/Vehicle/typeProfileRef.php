<?php

namespace FilippoToso\Travelport\Vehicle;

class typeProfileRef
{

    /**
     * @var string $ProfileEntityID
     */
    protected $ProfileEntityID = null;

    /**
     * @var typeProfileLevel $ProfileLevel
     */
    protected $ProfileLevel = null;

    /**
     * @param string $ProfileEntityID
     * @param typeProfileLevel $ProfileLevel
     */
    public function __construct($ProfileEntityID, $ProfileLevel)
    {
      $this->ProfileEntityID = $ProfileEntityID;
      $this->ProfileLevel = $ProfileLevel;
    }

    /**
     * @return string
     */
    public function getProfileEntityID()
    {
      return $this->ProfileEntityID;
    }

    /**
     * @param string $ProfileEntityID
     * @return \FilippoToso\Travelport\Vehicle\typeProfileRef
     */
    public function setProfileEntityID($ProfileEntityID)
    {
      $this->ProfileEntityID = $ProfileEntityID;
      return $this;
    }

    /**
     * @return typeProfileLevel
     */
    public function getProfileLevel()
    {
      return $this->ProfileLevel;
    }

    /**
     * @param typeProfileLevel $ProfileLevel
     * @return \FilippoToso\Travelport\Vehicle\typeProfileRef
     */
    public function setProfileLevel($ProfileLevel)
    {
      $this->ProfileLevel = $ProfileLevel;
      return $this;
    }

}
