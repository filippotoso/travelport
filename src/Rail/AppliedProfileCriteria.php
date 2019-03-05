<?php

namespace FilippoToso\Travelport\Rail;

class AppliedProfileCriteria
{

    /**
     * @var anonymous1412 $TravelerProfileId
     */
    protected $TravelerProfileId = null;

    /**
     * @param anonymous1412 $TravelerProfileId
     */
    public function __construct($TravelerProfileId = null)
    {
      $this->TravelerProfileId = $TravelerProfileId;
    }

    /**
     * @return anonymous1412
     */
    public function getTravelerProfileId()
    {
      return $this->TravelerProfileId;
    }

    /**
     * @param anonymous1412 $TravelerProfileId
     * @return \FilippoToso\Travelport\Rail\AppliedProfileCriteria
     */
    public function setTravelerProfileId($TravelerProfileId)
    {
      $this->TravelerProfileId = $TravelerProfileId;
      return $this;
    }

}
