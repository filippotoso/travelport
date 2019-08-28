<?php

namespace FilippoToso\Travelport\UProfile;

class typeAccountTypeProfileSearchCriteria extends typeProfileSearchCriteria
{

    /**
     * @var typeWildcard $MidOfficeID
     */
    protected $MidOfficeID = null;

    /**
     * @param typeWildcard $AdditionalIdentifier
     * @param typeWildcard $MidOfficeID
     */
    public function __construct($AdditionalIdentifier = null, $MidOfficeID = null)
    {
      parent::__construct($AdditionalIdentifier);
      $this->MidOfficeID = $MidOfficeID;
    }

    /**
     * @return typeWildcard
     */
    public function getMidOfficeID()
    {
      return $this->MidOfficeID;
    }

    /**
     * @param typeWildcard $MidOfficeID
     * @return \FilippoToso\Travelport\UProfile\typeAccountTypeProfileSearchCriteria
     */
    public function setMidOfficeID($MidOfficeID)
    {
      $this->MidOfficeID = $MidOfficeID;
      return $this;
    }

}
