<?php

namespace FilippoToso\Travelport\UProfile;

class Restriction
{

    /**
     * @var string $Operation
     */
    protected $Operation = null;

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @param string $Operation
     * @param string $Reason
     */
    public function __construct($Operation, $Reason)
    {
      $this->Operation = $Operation;
      $this->Reason = $Reason;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
      return $this->Operation;
    }

    /**
     * @param string $Operation
     * @return \FilippoToso\Travelport\UProfile\Restriction
     */
    public function setOperation($Operation)
    {
      $this->Operation = $Operation;
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
     * @return \FilippoToso\Travelport\UProfile\Restriction
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

}
