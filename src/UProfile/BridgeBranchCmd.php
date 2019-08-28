<?php

namespace FilippoToso\Travelport\UProfile;

class BridgeBranchCmd
{

    /**
     * @var typeBridgeBranchCmd $BridgeBranchAdd
     */
    protected $BridgeBranchAdd = null;

    /**
     * @var typeBridgeBranchCmd $BridgeBranchDelete
     */
    protected $BridgeBranchDelete = null;

    /**
     * @param typeBridgeBranchCmd $BridgeBranchAdd
     * @param typeBridgeBranchCmd $BridgeBranchDelete
     */
    public function __construct($BridgeBranchAdd = null, $BridgeBranchDelete = null)
    {
      $this->BridgeBranchAdd = $BridgeBranchAdd;
      $this->BridgeBranchDelete = $BridgeBranchDelete;
    }

    /**
     * @return typeBridgeBranchCmd
     */
    public function getBridgeBranchAdd()
    {
      return $this->BridgeBranchAdd;
    }

    /**
     * @param typeBridgeBranchCmd $BridgeBranchAdd
     * @return \FilippoToso\Travelport\UProfile\BridgeBranchCmd
     */
    public function setBridgeBranchAdd($BridgeBranchAdd)
    {
      $this->BridgeBranchAdd = $BridgeBranchAdd;
      return $this;
    }

    /**
     * @return typeBridgeBranchCmd
     */
    public function getBridgeBranchDelete()
    {
      return $this->BridgeBranchDelete;
    }

    /**
     * @param typeBridgeBranchCmd $BridgeBranchDelete
     * @return \FilippoToso\Travelport\UProfile\BridgeBranchCmd
     */
    public function setBridgeBranchDelete($BridgeBranchDelete)
    {
      $this->BridgeBranchDelete = $BridgeBranchDelete;
      return $this;
    }

}
