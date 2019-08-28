<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileSummaryErrorInfo extends typeErrorInfo
{

    /**
     * @var ProfileSummary[] $ProfileSummary
     */
    protected $ProfileSummary = null;

    /**
     * @var int $NumberOfChildren
     */
    protected $NumberOfChildren = null;

    /**
     * @param string $Code
     * @param string $Service
     * @param string $Type
     * @param string $Description
     * @param string $TransactionId
     * @param Auxdata $Auxdata
     * @param ProfileSummary[] $ProfileSummary
     * @param int $NumberOfChildren
     */
    public function __construct($Code = null, $Service = null, $Type = null, $Description = null, $TransactionId = null, $Auxdata = null, array $ProfileSummary = null, $NumberOfChildren = null)
    {
      parent::__construct($Code, $Service, $Type, $Description, $TransactionId, $Auxdata);
      $this->ProfileSummary = $ProfileSummary;
      $this->NumberOfChildren = $NumberOfChildren;
    }

    /**
     * @return ProfileSummary[]
     */
    public function getProfileSummary()
    {
      return $this->ProfileSummary;
    }

    /**
     * @param ProfileSummary[] $ProfileSummary
     * @return \FilippoToso\Travelport\UProfile\ProfileSummaryErrorInfo
     */
    public function setProfileSummary(array $ProfileSummary)
    {
      $this->ProfileSummary = $ProfileSummary;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfChildren()
    {
      return $this->NumberOfChildren;
    }

    /**
     * @param int $NumberOfChildren
     * @return \FilippoToso\Travelport\UProfile\ProfileSummaryErrorInfo
     */
    public function setNumberOfChildren($NumberOfChildren)
    {
      $this->NumberOfChildren = $NumberOfChildren;
      return $this;
    }

}
