<?php

namespace FilippoToso\Travelport\UniversalRecord;

class PolicyCodesList
{

    /**
     * @var typePolicyCode[] $PolicyCode
     */
    protected $PolicyCode = null;

    /**
     * @param typePolicyCode[] $PolicyCode
     */
    public function __construct(array $PolicyCode)
    {
      $this->PolicyCode = $PolicyCode;
    }

    /**
     * @return typePolicyCode[]
     */
    public function getPolicyCode()
    {
      return $this->PolicyCode;
    }

    /**
     * @param typePolicyCode[] $PolicyCode
     * @return \FilippoToso\Travelport\UniversalRecord\PolicyCodesList
     */
    public function setPolicyCode(array $PolicyCode)
    {
      $this->PolicyCode = $PolicyCode;
      return $this;
    }

}
