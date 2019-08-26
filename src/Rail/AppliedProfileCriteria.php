<?php

namespace FilippoToso\Travelport\Rail;

class AppliedProfileCriteria
{

    /**
     * @var anonymous1410 $TravelerProfileId
     */
    protected $TravelerProfileId = null;

    /**
     * @param anonymous1410 $TravelerProfileId
     */
    public function __construct($TravelerProfileId)
    {
      $this->TravelerProfileId = $TravelerProfileId;
    }

    /**
     * @return anonymous1410
     */
    public function getTravelerProfileId()
    {
      return $this->TravelerProfileId;
    }

    /**
     * @param anonymous1410 $TravelerProfileId
     * @return \FilippoToso\Travelport\Rail\AppliedProfileCriteria
     */
    public function setTravelerProfileId($TravelerProfileId)
    {
      $this->TravelerProfileId = $TravelerProfileId;
      return $this;
    }

}
