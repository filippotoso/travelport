<?php

namespace FilippoToso\Travelport\UProfile;

class BridgeBranch
{

    /**
     * @var typeProfileID $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeProvisioningCode $BranchCode
     */
    protected $BranchCode = null;

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var boolean $Default
     */
    protected $Default = null;

    /**
     * @param typeProfileID $ProfileID
     * @param typeProvisioningCode $BranchCode
     * @param StringLength1to128 $Name
     * @param boolean $Default
     */
    public function __construct($ProfileID = null, $BranchCode = null, $Name = null, $Default = null)
    {
      $this->ProfileID = $ProfileID;
      $this->BranchCode = $BranchCode;
      $this->Name = $Name;
      $this->Default = $Default;
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
     * @return \FilippoToso\Travelport\UProfile\BridgeBranch
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getBranchCode()
    {
      return $this->BranchCode;
    }

    /**
     * @param typeProvisioningCode $BranchCode
     * @return \FilippoToso\Travelport\UProfile\BridgeBranch
     */
    public function setBranchCode($BranchCode)
    {
      $this->BranchCode = $BranchCode;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param StringLength1to128 $Name
     * @return \FilippoToso\Travelport\UProfile\BridgeBranch
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefault()
    {
      return $this->Default;
    }

    /**
     * @param boolean $Default
     * @return \FilippoToso\Travelport\UProfile\BridgeBranch
     */
    public function setDefault($Default)
    {
      $this->Default = $Default;
      return $this;
    }

}
