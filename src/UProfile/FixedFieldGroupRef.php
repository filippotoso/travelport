<?php

namespace FilippoToso\Travelport\UProfile;

class FixedFieldGroupRef
{

    /**
     * @var typeID $ID
     */
    protected $ID = null;

    /**
     * @param typeID $ID
     */
    public function __construct($ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return typeID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeID $ID
     * @return \FilippoToso\Travelport\UProfile\FixedFieldGroupRef
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
