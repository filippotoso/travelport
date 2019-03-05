<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileLinkDelete
{

    /**
     * @var typeProfileID $TravelerID
     */
    protected $TravelerID = null;

    /**
     * @var typeProfileLinkRelationship $Relationship
     */
    protected $Relationship = null;

    /**
     * @param typeProfileID $TravelerID
     * @param typeProfileLinkRelationship $Relationship
     */
    public function __construct($TravelerID = null, $Relationship = null)
    {
      $this->TravelerID = $TravelerID;
      $this->Relationship = $Relationship;
    }

    /**
     * @return typeProfileID
     */
    public function getTravelerID()
    {
      return $this->TravelerID;
    }

    /**
     * @param typeProfileID $TravelerID
     * @return \FilippoToso\Travelport\UProfile\ProfileLinkDelete
     */
    public function setTravelerID($TravelerID)
    {
      $this->TravelerID = $TravelerID;
      return $this;
    }

    /**
     * @return typeProfileLinkRelationship
     */
    public function getRelationship()
    {
      return $this->Relationship;
    }

    /**
     * @param typeProfileLinkRelationship $Relationship
     * @return \FilippoToso\Travelport\UProfile\ProfileLinkDelete
     */
    public function setRelationship($Relationship)
    {
      $this->Relationship = $Relationship;
      return $this;
    }

}
