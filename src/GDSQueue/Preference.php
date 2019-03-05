<?php

namespace FilippoToso\Travelport\GDSQueue;

class Preference
{

    /**
     * @var anonymous1450 $Owner
     */
    protected $Owner = null;

    /**
     * @param anonymous1450 $Owner
     */
    public function __construct($Owner = null)
    {
      $this->Owner = $Owner;
    }

    /**
     * @return anonymous1450
     */
    public function getOwner()
    {
      return $this->Owner;
    }

    /**
     * @param anonymous1450 $Owner
     * @return \FilippoToso\Travelport\GDSQueue\Preference
     */
    public function setOwner($Owner)
    {
      $this->Owner = $Owner;
      return $this;
    }

}
