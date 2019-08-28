<?php

namespace FilippoToso\Travelport\GDSQueue;

class AppliedProfileCriteria
{

    /**
     * @var anonymous1410 $TravelerProfileId
     */
    protected $TravelerProfileId = null;

    /**
     * @param anonymous1410 $TravelerProfileId
     */
    public function __construct($TravelerProfileId = null)
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
     * @return \FilippoToso\Travelport\GDSQueue\AppliedProfileCriteria
     */
    public function setTravelerProfileId($TravelerProfileId)
    {
      $this->TravelerProfileId = $TravelerProfileId;
      return $this;
    }

}
