<?php

namespace FilippoToso\Travelport\Vehicle;

class typeAgencyHierarchyLongReference extends typeAgencyHierarchyReference
{

    /**
     * @var int $ProfileVersion
     */
    protected $ProfileVersion = null;

    /**
     * @var anonymous375 $ProfileName
     */
    protected $ProfileName = null;

    /**
     * @param typeProfileID $ProfileID
     * @param typeAgencyProfileLevel $ProfileType
     * @param int $ProfileVersion
     * @param anonymous375 $ProfileName
     */
    public function __construct($ProfileID = null, $ProfileType = null, $ProfileVersion = null, $ProfileName = null)
    {
      parent::__construct($ProfileID, $ProfileType);
      $this->ProfileVersion = $ProfileVersion;
      $this->ProfileName = $ProfileName;
    }

    /**
     * @return int
     */
    public function getProfileVersion()
    {
      return $this->ProfileVersion;
    }

    /**
     * @param int $ProfileVersion
     * @return \FilippoToso\Travelport\Vehicle\typeAgencyHierarchyLongReference
     */
    public function setProfileVersion($ProfileVersion)
    {
      $this->ProfileVersion = $ProfileVersion;
      return $this;
    }

    /**
     * @return anonymous375
     */
    public function getProfileName()
    {
      return $this->ProfileName;
    }

    /**
     * @param anonymous375 $ProfileName
     * @return \FilippoToso\Travelport\Vehicle\typeAgencyHierarchyLongReference
     */
    public function setProfileName($ProfileName)
    {
      $this->ProfileName = $ProfileName;
      return $this;
    }

}
