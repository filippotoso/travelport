<?php

namespace FilippoToso\Travelport\UProfile;

class AgencyCriteria extends typeProfileSearchCriteria
{

    /**
     * @var typeWildcard $Name
     */
    protected $Name = null;

    /**
     * @var typeWildcard $AgencyCode
     */
    protected $AgencyCode = null;

    /**
     * @var typeWildcard $IataNumber
     */
    protected $IataNumber = null;

    /**
     * @param typeWildcard $AdditionalIdentifier
     * @param typeWildcard $Name
     * @param typeWildcard $AgencyCode
     * @param typeWildcard $IataNumber
     */
    public function __construct($AdditionalIdentifier = null, $Name = null, $AgencyCode = null, $IataNumber = null)
    {
      parent::__construct($AdditionalIdentifier);
      $this->Name = $Name;
      $this->AgencyCode = $AgencyCode;
      $this->IataNumber = $IataNumber;
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
     * @return \FilippoToso\Travelport\UProfile\AgencyCriteria
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getAgencyCode()
    {
      return $this->AgencyCode;
    }

    /**
     * @param typeWildcard $AgencyCode
     * @return \FilippoToso\Travelport\UProfile\AgencyCriteria
     */
    public function setAgencyCode($AgencyCode)
    {
      $this->AgencyCode = $AgencyCode;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getIataNumber()
    {
      return $this->IataNumber;
    }

    /**
     * @param typeWildcard $IataNumber
     * @return \FilippoToso\Travelport\UProfile\AgencyCriteria
     */
    public function setIataNumber($IataNumber)
    {
      $this->IataNumber = $IataNumber;
      return $this;
    }

}
