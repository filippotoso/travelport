<?php

namespace FilippoToso\Travelport\UProfile;

class typeBridgeBranchCmd
{

    /**
     * @var typeProfileID $BranchID
     */
    protected $BranchID = null;

    /**
     * @var typeProvisioningCode $BranchCode
     */
    protected $BranchCode = null;

    /**
     * @param typeProfileID $BranchID
     * @param typeProvisioningCode $BranchCode
     */
    public function __construct($BranchID = null, $BranchCode = null)
    {
      $this->BranchID = $BranchID;
      $this->BranchCode = $BranchCode;
    }

    /**
     * @return typeProfileID
     */
    public function getBranchID()
    {
      return $this->BranchID;
    }

    /**
     * @param typeProfileID $BranchID
     * @return \FilippoToso\Travelport\UProfile\typeBridgeBranchCmd
     */
    public function setBranchID($BranchID)
    {
      $this->BranchID = $BranchID;
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
     * @return \FilippoToso\Travelport\UProfile\typeBridgeBranchCmd
     */
    public function setBranchCode($BranchCode)
    {
      $this->BranchCode = $BranchCode;
      return $this;
    }

}
