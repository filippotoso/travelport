<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AppliedProfileCriteria
{

    /**
     * @var anonymous1415 $TravelerProfileId
     */
    protected $TravelerProfileId = null;

    /**
     * @param anonymous1415 $TravelerProfileId
     */
    public function __construct($TravelerProfileId = null)
    {
      $this->TravelerProfileId = $TravelerProfileId;
    }

    /**
     * @return anonymous1415
     */
    public function getTravelerProfileId()
    {
      return $this->TravelerProfileId;
    }

    /**
     * @param anonymous1415 $TravelerProfileId
     * @return \FilippoToso\Travelport\UniversalRecord\AppliedProfileCriteria
     */
    public function setTravelerProfileId($TravelerProfileId)
    {
      $this->TravelerProfileId = $TravelerProfileId;
      return $this;
    }

}
