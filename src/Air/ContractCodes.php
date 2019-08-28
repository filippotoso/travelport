<?php

namespace FilippoToso\Travelport\Air;

class ContractCodes
{

    /**
     * @var ContractCode $ContractCode
     */
    protected $ContractCode = null;

    /**
     * @param ContractCode $ContractCode
     */
    public function __construct($ContractCode = null)
    {
      $this->ContractCode = $ContractCode;
    }

    /**
     * @return ContractCode
     */
    public function getContractCode()
    {
      return $this->ContractCode;
    }

    /**
     * @param ContractCode $ContractCode
     * @return \FilippoToso\Travelport\Air\ContractCodes
     */
    public function setContractCode($ContractCode)
    {
      $this->ContractCode = $ContractCode;
      return $this;
    }

}
