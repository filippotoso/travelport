<?php

namespace FilippoToso\Travelport\GDSQueue;

class PolicyCodesList
{

    /**
     * @var typePolicyCode $PolicyCode
     */
    protected $PolicyCode = null;

    /**
     * @param typePolicyCode $PolicyCode
     */
    public function __construct($PolicyCode = null)
    {
      $this->PolicyCode = $PolicyCode;
    }

    /**
     * @return typePolicyCode
     */
    public function getPolicyCode()
    {
      return $this->PolicyCode;
    }

    /**
     * @param typePolicyCode $PolicyCode
     * @return \FilippoToso\Travelport\GDSQueue\PolicyCodesList
     */
    public function setPolicyCode($PolicyCode)
    {
      $this->PolicyCode = $PolicyCode;
      return $this;
    }

}
