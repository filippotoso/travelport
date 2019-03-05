<?php

namespace FilippoToso\Travelport\UProfile;

class ProfileTypeSearch
{

    /**
     * @var AgencyGroupCriteria $AgencyGroupCriteria
     */
    protected $AgencyGroupCriteria = null;

    /**
     * @var AgencyCriteria $AgencyCriteria
     */
    protected $AgencyCriteria = null;

    /**
     * @var BranchCriteria $BranchCriteria
     */
    protected $BranchCriteria = null;

    /**
     * @var BranchGroupCriteria $BranchGroupCriteria
     */
    protected $BranchGroupCriteria = null;

    /**
     * @var AgentCriteria $AgentCriteria
     */
    protected $AgentCriteria = null;

    /**
     * @var AccountCriteria $AccountCriteria
     */
    protected $AccountCriteria = null;

    /**
     * @var TravelerCriteria $TravelerCriteria
     */
    protected $TravelerCriteria = null;

    /**
     * @var TravelerGroupCriteria $TravelerGroupCriteria
     */
    protected $TravelerGroupCriteria = null;

    /**
     * @param AgencyGroupCriteria $AgencyGroupCriteria
     * @param AgencyCriteria $AgencyCriteria
     * @param BranchCriteria $BranchCriteria
     * @param BranchGroupCriteria $BranchGroupCriteria
     * @param AgentCriteria $AgentCriteria
     * @param AccountCriteria $AccountCriteria
     * @param TravelerCriteria $TravelerCriteria
     * @param TravelerGroupCriteria $TravelerGroupCriteria
     */
    public function __construct($AgencyGroupCriteria = null, $AgencyCriteria = null, $BranchCriteria = null, $BranchGroupCriteria = null, $AgentCriteria = null, $AccountCriteria = null, $TravelerCriteria = null, $TravelerGroupCriteria = null)
    {
      $this->AgencyGroupCriteria = $AgencyGroupCriteria;
      $this->AgencyCriteria = $AgencyCriteria;
      $this->BranchCriteria = $BranchCriteria;
      $this->BranchGroupCriteria = $BranchGroupCriteria;
      $this->AgentCriteria = $AgentCriteria;
      $this->AccountCriteria = $AccountCriteria;
      $this->TravelerCriteria = $TravelerCriteria;
      $this->TravelerGroupCriteria = $TravelerGroupCriteria;
    }

    /**
     * @return AgencyGroupCriteria
     */
    public function getAgencyGroupCriteria()
    {
      return $this->AgencyGroupCriteria;
    }

    /**
     * @param AgencyGroupCriteria $AgencyGroupCriteria
     * @return \FilippoToso\Travelport\UProfile\ProfileTypeSearch
     */
    public function setAgencyGroupCriteria($AgencyGroupCriteria)
    {
      $this->AgencyGroupCriteria = $AgencyGroupCriteria;
      return $this;
    }

    /**
     * @return AgencyCriteria
     */
    public function getAgencyCriteria()
    {
      return $this->AgencyCriteria;
    }

    /**
     * @param AgencyCriteria $AgencyCriteria
     * @return \FilippoToso\Travelport\UProfile\ProfileTypeSearch
     */
    public function setAgencyCriteria($AgencyCriteria)
    {
      $this->AgencyCriteria = $AgencyCriteria;
      return $this;
    }

    /**
     * @return BranchCriteria
     */
    public function getBranchCriteria()
    {
      return $this->BranchCriteria;
    }

    /**
     * @param BranchCriteria $BranchCriteria
     * @return \FilippoToso\Travelport\UProfile\ProfileTypeSearch
     */
    public function setBranchCriteria($BranchCriteria)
    {
      $this->BranchCriteria = $BranchCriteria;
      return $this;
    }

    /**
     * @return BranchGroupCriteria
     */
    public function getBranchGroupCriteria()
    {
      return $this->BranchGroupCriteria;
    }

    /**
     * @param BranchGroupCriteria $BranchGroupCriteria
     * @return \FilippoToso\Travelport\UProfile\ProfileTypeSearch
     */
    public function setBranchGroupCriteria($BranchGroupCriteria)
    {
      $this->BranchGroupCriteria = $BranchGroupCriteria;
      return $this;
    }

    /**
     * @return AgentCriteria
     */
    public function getAgentCriteria()
    {
      return $this->AgentCriteria;
    }

    /**
     * @param AgentCriteria $AgentCriteria
     * @return \FilippoToso\Travelport\UProfile\ProfileTypeSearch
     */
    public function setAgentCriteria($AgentCriteria)
    {
      $this->AgentCriteria = $AgentCriteria;
      return $this;
    }

    /**
     * @return AccountCriteria
     */
    public function getAccountCriteria()
    {
      return $this->AccountCriteria;
    }

    /**
     * @param AccountCriteria $AccountCriteria
     * @return \FilippoToso\Travelport\UProfile\ProfileTypeSearch
     */
    public function setAccountCriteria($AccountCriteria)
    {
      $this->AccountCriteria = $AccountCriteria;
      return $this;
    }

    /**
     * @return TravelerCriteria
     */
    public function getTravelerCriteria()
    {
      return $this->TravelerCriteria;
    }

    /**
     * @param TravelerCriteria $TravelerCriteria
     * @return \FilippoToso\Travelport\UProfile\ProfileTypeSearch
     */
    public function setTravelerCriteria($TravelerCriteria)
    {
      $this->TravelerCriteria = $TravelerCriteria;
      return $this;
    }

    /**
     * @return TravelerGroupCriteria
     */
    public function getTravelerGroupCriteria()
    {
      return $this->TravelerGroupCriteria;
    }

    /**
     * @param TravelerGroupCriteria $TravelerGroupCriteria
     * @return \FilippoToso\Travelport\UProfile\ProfileTypeSearch
     */
    public function setTravelerGroupCriteria($TravelerGroupCriteria)
    {
      $this->TravelerGroupCriteria = $TravelerGroupCriteria;
      return $this;
    }

}
