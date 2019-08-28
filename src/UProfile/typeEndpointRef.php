<?php

namespace FilippoToso\Travelport\UProfile;

class typeEndpointRef
{

    /**
     * @var typeEndpointID $ID
     */
    protected $ID = null;

    /**
     * @param typeEndpointID $ID
     */
    public function __construct($ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return typeEndpointID
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param typeEndpointID $ID
     * @return \FilippoToso\Travelport\UProfile\typeEndpointRef
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
