<?php

namespace FilippoToso\Travelport\UProfile;

class TravelerCriteria extends typeAccountTypeProfileSearchCriteria
{

    /**
     * @var typeWildcard $GivenName
     */
    protected $GivenName = null;

    /**
     * @var typeWildcard $Surname
     */
    protected $Surname = null;

    /**
     * @param typeWildcard $AdditionalIdentifier
     * @param typeWildcard $MidOfficeID
     * @param typeWildcard $GivenName
     * @param typeWildcard $Surname
     */
    public function __construct($AdditionalIdentifier = null, $MidOfficeID = null, $GivenName = null, $Surname = null)
    {
      parent::__construct($AdditionalIdentifier, $MidOfficeID);
      $this->GivenName = $GivenName;
      $this->Surname = $Surname;
    }

    /**
     * @return typeWildcard
     */
    public function getGivenName()
    {
      return $this->GivenName;
    }

    /**
     * @param typeWildcard $GivenName
     * @return \FilippoToso\Travelport\UProfile\TravelerCriteria
     */
    public function setGivenName($GivenName)
    {
      $this->GivenName = $GivenName;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getSurname()
    {
      return $this->Surname;
    }

    /**
     * @param typeWildcard $Surname
     * @return \FilippoToso\Travelport\UProfile\TravelerCriteria
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

}
