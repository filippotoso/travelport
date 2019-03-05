<?php

namespace FilippoToso\Travelport\UProfile;

class BranchGroupCriteria extends typeProfileSearchCriteria
{

    /**
     * @var typeWildcard $Name
     */
    protected $Name = null;

    /**
     * @var typeWildcard $BranchGroupCode
     */
    protected $BranchGroupCode = null;

    /**
     * @param typeWildcard $AdditionalIdentifier
     * @param typeWildcard $Name
     * @param typeWildcard $BranchGroupCode
     */
    public function __construct($AdditionalIdentifier = null, $Name = null, $BranchGroupCode = null)
    {
      parent::__construct($AdditionalIdentifier);
      $this->Name = $Name;
      $this->BranchGroupCode = $BranchGroupCode;
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
     * @return \FilippoToso\Travelport\UProfile\BranchGroupCriteria
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return typeWildcard
     */
    public function getBranchGroupCode()
    {
      return $this->BranchGroupCode;
    }

    /**
     * @param typeWildcard $BranchGroupCode
     * @return \FilippoToso\Travelport\UProfile\BranchGroupCriteria
     */
    public function setBranchGroupCode($BranchGroupCode)
    {
      $this->BranchGroupCode = $BranchGroupCode;
      return $this;
    }

}
