<?php

namespace FilippoToso\Travelport\UniversalRecord;

class ProhibitedAccountCodes
{

    /**
     * @var AccountCode $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @param AccountCode $AccountCode
     */
    public function __construct($AccountCode)
    {
      $this->AccountCode = $AccountCode;
    }

    /**
     * @return AccountCode
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param AccountCode $AccountCode
     * @return \FilippoToso\Travelport\UniversalRecord\ProhibitedAccountCodes
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

}
