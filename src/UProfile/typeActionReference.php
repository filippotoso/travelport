<?php

namespace FilippoToso\Travelport\UProfile;

class typeActionReference
{

    /**
     * @var typeActionID $ID
     */
    protected $ID = null;

    /**
     * @var string $ProfileActionCode
     */
    protected $ProfileActionCode = null;

    /**
     * @param typeActionID $ID
     * @param string $ProfileActionCode
     */
    public function __construct($ID = null, $ProfileActionCode = null)
    {
      $this->ID = $ID;
      $this->ProfileActionCode = $ProfileActionCode;
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
     * @return \FilippoToso\Travelport\UProfile\typeActionReference
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileActionCode()
    {
      return $this->ProfileActionCode;
    }

    /**
     * @param string $ProfileActionCode
     * @return \FilippoToso\Travelport\UProfile\typeActionReference
     */
    public function setProfileActionCode($ProfileActionCode)
    {
      $this->ProfileActionCode = $ProfileActionCode;
      return $this;
    }

}
