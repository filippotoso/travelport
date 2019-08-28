<?php

namespace FilippoToso\Travelport\UProfile;

class AgencyBaseInfo
{

    /**
     * @var Phone $Phone
     */
    protected $Phone = null;

    /**
     * @param Phone $Phone
     */
    public function __construct($Phone = null)
    {
      $this->Phone = $Phone;
    }

    /**
     * @return Phone
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param Phone $Phone
     * @return \FilippoToso\Travelport\UProfile\AgencyBaseInfo
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

}
