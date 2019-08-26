<?php

namespace FilippoToso\Travelport\GDSQueue;

class AgencyInfo
{

    /**
     * @var AgentAction $AgentAction
     */
    protected $AgentAction = null;

    /**
     * @param AgentAction $AgentAction
     */
    public function __construct($AgentAction)
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
     * @return \FilippoToso\Travelport\GDSQueue\AgencyInfo
     */
    public function setAgentAction($AgentAction)
    {
      $this->AgentAction = $AgentAction;
      return $this;
    }

}
