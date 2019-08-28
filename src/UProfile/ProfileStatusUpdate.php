<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileStatusUpdate
{

    /**
     * @var typeProfileEntityStatus $Status
     */
    protected $Status = null;

    /**
     * @param typeProfileEntityStatus $Status
     */
    public function __construct($Status = null)
    {
      $this->Status = $Status;
    }

    /**
     * @return typeProfileEntityStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param typeProfileEntityStatus $Status
     * @return \FilippoToso\Travelport\UProfile\ProfileStatusUpdate
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
