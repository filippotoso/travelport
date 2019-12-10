<?php

namespace FilippoToso\Travelport\UniversalRecord;

class Preference
{

    /**
     * @var anonymous1453 $Owner
     */
    protected $Owner = null;

    /**
     * @param anonymous1453 $Owner
     */
    public function __construct($Owner = null)
    {
      $this->Owner = $Owner;
    }

    /**
     * @return anonymous1453
     */
    public function getOwner()
    {
      return $this->Owner;
    }

    /**
     * @param anonymous1453 $Owner
     * @return \FilippoToso\Travelport\UniversalRecord\Preference
     */
    public function setOwner($Owner)
    {
      $this->Owner = $Owner;
      return $this;
    }

}
