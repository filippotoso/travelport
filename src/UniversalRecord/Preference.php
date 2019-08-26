<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Preference
{

    /**
     * @var anonymous1451 $Owner
     */
    protected $Owner = null;

    /**
     * @param anonymous1451 $Owner
     */
    public function __construct($Owner)
    {
      $this->Owner = $Owner;
    }

    /**
     * @return anonymous1451
     */
    public function getOwner()
    {
      return $this->Owner;
    }

    /**
     * @param anonymous1451 $Owner
     * @return \FilippoToso\Travelport\UniversalRecord\Preference
     */
    public function setOwner($Owner)
    {
      $this->Owner = $Owner;
      return $this;
    }

}
