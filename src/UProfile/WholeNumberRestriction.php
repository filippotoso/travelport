<?php

namespace FilippoToso\Travelport\UProfile;

class WholeNumberRestriction
{

    /**
     * @var typeAction $Action
     */
    protected $Action = null;

    /**
     * @param typeAction $Action
     */
    public function __construct($Action = null)
    {
      $this->Action = $Action;
    }

    /**
     * @return typeAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param typeAction $Action
     * @return \FilippoToso\Travelport\UProfile\WholeNumberRestriction
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

}
