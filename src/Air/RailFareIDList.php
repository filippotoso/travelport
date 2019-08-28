<?php

namespace FilippoToso\Travelport\Air;

class RailFareIDList
{

    /**
     * @var RailFareID $RailFareID
     */
    protected $RailFareID = null;

    /**
     * @param RailFareID $RailFareID
     */
    public function __construct($RailFareID = null)
    {
      $this->RailFareID = $RailFareID;
    }

    /**
     * @return RailFareID
     */
    public function getRailFareID()
    {
      return $this->RailFareID;
    }

    /**
     * @param RailFareID $RailFareID
     * @return \FilippoToso\Travelport\Air\RailFareIDList
     */
    public function setRailFareID($RailFareID)
    {
      $this->RailFareID = $RailFareID;
      return $this;
    }

}
