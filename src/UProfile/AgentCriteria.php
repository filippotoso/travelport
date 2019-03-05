<?php

namespace FilippoToso\Travelport\UProfile;

class AgentCriteria extends typeProfileSearchCriteria
{

    /**
     * @var typeWildcard $Username
     */
    protected $Username = null;

    /**
     * @var typeWildcard $GivenName
     */
    protected $GivenName = null;

    /**
     * @var typeWildcard $Surname
     */
    protected $Surname = null;

    /**
     * @var typeAlternateAgentID $AlternateAgentID
     */
    protected $AlternateAgentID = null;

    /**
     * @param typeWildcard $AdditionalIdentifier
     * @param typeWildcard $Username
     * @param typeWildcard $GivenName
     * @param typeWildcard $Surname
     * @param typeAlternateAgentID $AlternateAgentID
     */
    public function __construct($AdditionalIdentifier = null, $Username = null, $GivenName = null, $Surname = null, $AlternateAgentID = null)
    {
      parent::__construct($AdditionalIdentifier);
      $this->Username = $Username;
      $this->GivenName = $GivenName;
      $this->Surname = $Surname;
      $this->AlternateAgentID = $AlternateAgentID;
    }

    /**
     * @return typeWildcard
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param typeWildcard $Username
     * @return \FilippoToso\Travelport\UProfile\AgentCriteria
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
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
     * @return \FilippoToso\Travelport\UProfile\AgentCriteria
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
     * @return \FilippoToso\Travelport\UProfile\AgentCriteria
     */
    public function setSurname($Surname)
    {
      $this->Surname = $Surname;
      return $this;
    }

    /**
     * @return typeAlternateAgentID
     */
    public function getAlternateAgentID()
    {
      return $this->AlternateAgentID;
    }

    /**
     * @param typeAlternateAgentID $AlternateAgentID
     * @return \FilippoToso\Travelport\UProfile\AgentCriteria
     */
    public function setAlternateAgentID($AlternateAgentID)
    {
      $this->AlternateAgentID = $AlternateAgentID;
      return $this;
    }

}
