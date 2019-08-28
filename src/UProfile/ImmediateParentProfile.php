<?php

namespace FilippoToso\Travelport\UProfile;

class ImmediateParentProfile
{

    /**
     * @var typeImmediateParentRef $ImmediateParentRef
     */
    protected $ImmediateParentRef = null;

    /**
     * @var boolean $ControlBranch
     */
    protected $ControlBranch = null;

    /**
     * @param typeImmediateParentRef $ImmediateParentRef
     * @param boolean $ControlBranch
     */
    public function __construct($ImmediateParentRef = null, $ControlBranch = null)
    {
      $this->ImmediateParentRef = $ImmediateParentRef;
      $this->ControlBranch = $ControlBranch;
    }

    /**
     * @return typeImmediateParentRef
     */
    public function getImmediateParentRef()
    {
      return $this->ImmediateParentRef;
    }

    /**
     * @param typeImmediateParentRef $ImmediateParentRef
     * @return \FilippoToso\Travelport\UProfile\ImmediateParentProfile
     */
    public function setImmediateParentRef($ImmediateParentRef)
    {
      $this->ImmediateParentRef = $ImmediateParentRef;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getControlBranch()
    {
      return $this->ControlBranch;
    }

    /**
     * @param boolean $ControlBranch
     * @return \FilippoToso\Travelport\UProfile\ImmediateParentProfile
     */
    public function setControlBranch($ControlBranch)
    {
      $this->ControlBranch = $ControlBranch;
      return $this;
    }

}
