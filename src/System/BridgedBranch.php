<?php

namespace FilippoToso\Travelport\System;

class BridgedBranch
{

    /**
     * @var string $BranchId
     */
    protected $BranchId = null;

    /**
     * @param string $BranchId
     */
    public function __construct($BranchId = null)
    {
      $this->BranchId = $BranchId;
    }

    /**
     * @return string
     */
    public function getBranchId()
    {
      return $this->BranchId;
    }

    /**
     * @param string $BranchId
     * @return \FilippoToso\Travelport\System\BridgedBranch
     */
    public function setBranchId($BranchId)
    {
      $this->BranchId = $BranchId;
      return $this;
    }

}
