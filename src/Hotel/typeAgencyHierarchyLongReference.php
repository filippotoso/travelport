<?php

namespace FilippoToso\Travelport\Hotel;

class typeAgencyHierarchyLongReference extends typeAgencyHierarchyReference
{

    /**
     * @var int $ProfileVersion
     */
    protected $ProfileVersion = null;

    /**
     * @var anonymous372 $ProfileName
     */
    protected $ProfileName = null;

    /**
     * @param typeProfileID $ProfileID
     * @param typeAgencyProfileLevel $ProfileType
     * @param int $ProfileVersion
     * @param anonymous372 $ProfileName
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
     * @return \FilippoToso\Travelport\Hotel\typeAgencyHierarchyLongReference
     */
    public function setProfileVersion($ProfileVersion)
    {
      $this->ProfileVersion = $ProfileVersion;
      return $this;
    }

    /**
     * @return anonymous372
     */
    public function getProfileName()
    {
      return $this->ProfileName;
    }

    /**
     * @param anonymous372 $ProfileName
     * @return \FilippoToso\Travelport\Hotel\typeAgencyHierarchyLongReference
     */
    public function setProfileName($ProfileName)
    {
      $this->ProfileName = $ProfileName;
      return $this;
    }

}
