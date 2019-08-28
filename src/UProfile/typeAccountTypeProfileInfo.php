<?php

namespace FilippoToso\Travelport\UProfile;

class typeAccountTypeProfileInfo extends typeProfileInfo
{

    /**
     * @var StringLength1to255 $MidOfficeID
     */
    protected $MidOfficeID = null;

    /**
     * @param StringLength1to255 $AdditionalIdentifier
     * @param typeDescription $Description
     * @param StringLength1to255 $MidOfficeID
     */
    public function __construct($AdditionalIdentifier = null, $Description = null, $MidOfficeID = null)
    {
      parent::__construct($AdditionalIdentifier, $Description);
      $this->MidOfficeID = $MidOfficeID;
    }

    /**
     * @return StringLength1to255
     */
    public function getMidOfficeID()
    {
      return $this->MidOfficeID;
    }

    /**
     * @param StringLength1to255 $MidOfficeID
     * @return \FilippoToso\Travelport\UProfile\typeAccountTypeProfileInfo
     */
    public function setMidOfficeID($MidOfficeID)
    {
      $this->MidOfficeID = $MidOfficeID;
      return $this;
    }

}
