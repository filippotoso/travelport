<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Entry
{

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @param string $Reason
     * @param string $Description
     */
    public function __construct($Reason = null, $Description = null)
    {
      $this->Reason = $Reason;
      $this->Description = $Description;
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
     * @return \FilippoToso\Travelport\UniversalRecord\Entry
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FilippoToso\Travelport\UniversalRecord\Entry
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

}
