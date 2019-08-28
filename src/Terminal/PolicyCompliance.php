<?php

namespace FilippoToso\Travelport\Terminal;

class PolicyCompliance
{

    /**
     * @var boolean $InPolicy
     */
    protected $InPolicy = null;

    /**
     * @var StringLength1to128 $PolicyToken
     */
    protected $PolicyToken = null;

    /**
     * @param boolean $InPolicy
     * @param StringLength1to128 $PolicyToken
     */
    public function __construct($InPolicy = null, $PolicyToken = null)
    {
      $this->InPolicy = $InPolicy;
      $this->PolicyToken = $PolicyToken;
    }

    /**
     * @return boolean
     */
    public function getInPolicy()
    {
      return $this->InPolicy;
    }

    /**
     * @param boolean $InPolicy
     * @return \FilippoToso\Travelport\Terminal\PolicyCompliance
     */
    public function setInPolicy($InPolicy)
    {
      $this->InPolicy = $InPolicy;
      return $this;
    }

    /**
     * @return StringLength1to128
     */
    public function getPolicyToken()
    {
      return $this->PolicyToken;
    }

    /**
     * @param StringLength1to128 $PolicyToken
     * @return \FilippoToso\Travelport\Terminal\PolicyCompliance
     */
    public function setPolicyToken($PolicyToken)
    {
      $this->PolicyToken = $PolicyToken;
      return $this;
    }

}
