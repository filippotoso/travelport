<?php

namespace FilippoToso\Travelport\UniversalRecord;

class FareStatusFailureInfo
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @param string $Code
     * @param string $Reason
     */
    public function __construct($Code = null, $Reason = null)
    {
      $this->Code = $Code;
      $this->Reason = $Reason;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FilippoToso\Travelport\UniversalRecord\FareStatusFailureInfo
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return \FilippoToso\Travelport\UniversalRecord\FareStatusFailureInfo
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}
