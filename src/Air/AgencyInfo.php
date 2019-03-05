<?php

namespace FilippoToso\Travelport\Air;

class AgencyInfo
{

    /**
     * @var AgentAction $AgentAction
     */
    protected $AgentAction = null;

    /**
     * @param AgentAction $AgentAction
     */
    public function __construct($AgentAction = null)
    {
      $this->AgentAction = $AgentAction;
    }

    /**
     * @return AgentAction
     */
    public function getAgentAction()
    {
      return $this->AgentAction;
    }

    /**
     * @param AgentAction $AgentAction
     * @return \FilippoToso\Travelport\Air\AgencyInfo
     */
    public function setAgentAction($AgentAction)
    {
      $this->AgentAction = $AgentAction;
      return $this;
    }

}
