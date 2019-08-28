<?php

namespace FilippoToso\Travelport\UProfile;

class AgencyGroupCriteria extends typeProfileSearchCriteria
{

    /**
     * @var typeWildcard $Name
     */
    protected $Name = null;

    /**
     * @param typeWildcard $AdditionalIdentifier
     * @param typeWildcard $Name
     */
    public function __construct($AdditionalIdentifier = null, $Name = null)
    {
      parent::__construct($AdditionalIdentifier);
      $this->Name = $Name;
    }

    /**
     * @return typeWildcard
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param typeWildcard $Name
     * @return \FilippoToso\Travelport\UProfile\AgencyGroupCriteria
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
