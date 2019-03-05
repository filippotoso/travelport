<?php

namespace FilippoToso\Travelport\UProfile;

class DebitCard
{

    /**
     * @var anonymous28 $IssueNumber
     */
    protected $IssueNumber = null;

    /**
     * @var string $ProfileID
     */
    protected $ProfileID = null;

    /**
     * @var typeRef $Key
     */
    protected $Key = null;

    /**
     * @param anonymous28 $IssueNumber
     * @param string $ProfileID
     * @param typeRef $Key
     */
    public function __construct($IssueNumber = null, $ProfileID = null, $Key = null)
    {
      $this->IssueNumber = $IssueNumber;
      $this->ProfileID = $ProfileID;
      $this->Key = $Key;
    }

    /**
     * @return anonymous28
     */
    public function getIssueNumber()
    {
      return $this->IssueNumber;
    }

    /**
     * @param anonymous28 $IssueNumber
     * @return \FilippoToso\Travelport\UProfile\DebitCard
     */
    public function setIssueNumber($IssueNumber)
    {
      $this->IssueNumber = $IssueNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileID()
    {
      return $this->ProfileID;
    }

    /**
     * @param string $ProfileID
     * @return \FilippoToso\Travelport\UProfile\DebitCard
     */
    public function setProfileID($ProfileID)
    {
      $this->ProfileID = $ProfileID;
      return $this;
    }

    /**
     * @return typeRef
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param typeRef $Key
     * @return \FilippoToso\Travelport\UProfile\DebitCard
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

}
