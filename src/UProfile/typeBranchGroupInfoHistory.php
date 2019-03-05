<?php

namespace FilippoToso\Travelport\UProfile;

class typeBranchGroupInfoHistory extends typeProfileInfo
{

    /**
     * @var StringLength1to128 $Name
     */
    protected $Name = null;

    /**
     * @var typeProvisioningCode $BranchGroupCode
     */
    protected $BranchGroupCode = null;

    /**
     * @var boolean $URSyncTo
     */
    protected $URSyncTo = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param StringLength1to128 $Name
     * @param typeProvisioningCode $BranchGroupCode
     * @param boolean $URSyncTo
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $Name = null, $BranchGroupCode = null, $URSyncTo = null)
    {
      parent::__construct($AdditionalIdentifier, $Description);
      $this->Name = $Name;
      $this->BranchGroupCode = $BranchGroupCode;
      $this->URSyncTo = $URSyncTo;
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
     * @return \FilippoToso\Travelport\UProfile\typeBranchGroupInfoHistory
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeProvisioningCode
     */
    public function getBranchGroupCode()
    {
      return $this->BranchGroupCode;
    }

    /**
     * @param typeProvisioningCode $BranchGroupCode
     * @return \FilippoToso\Travelport\UProfile\typeBranchGroupInfoHistory
     */
    public function setBranchGroupCode($BranchGroupCode)
    {
      $this->BranchGroupCode = $BranchGroupCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getURSyncTo()
    {
      return $this->URSyncTo;
    }

    /**
     * @param boolean $URSyncTo
     * @return \FilippoToso\Travelport\UProfile\typeBranchGroupInfoHistory
     */
    public function setURSyncTo($URSyncTo)
    {
      $this->URSyncTo = $URSyncTo;
      return $this;
    }

}
