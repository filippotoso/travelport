<?php

namespace FilippoToso\Travelport\Rail;

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
     * @return \FilippoToso\Travelport\Rail\RailFareIDList
     */
    public function setRailFareID($RailFareID)
    {
      $this->RailFareID = $RailFareID;
      return $this;
    }

}
