<?php

namespace FilippoToso\Travelport\UProfile;

class typeActionRef
{

    /**
     * @var typeActionID $ID
     */
    protected $ID = null;

    /**
     * @param typeActionID $ID
     */
    public function __construct($ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return typeActionID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeActionID $ID
     * @return \FilippoToso\Travelport\UProfile\typeActionRef
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
