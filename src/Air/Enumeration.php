<?php

namespace FilippoToso\Travelport\Air;

class Enumeration
{

    /**
     * @var SolutionGroup $SolutionGroup
     */
    protected $SolutionGroup = null;

    /**
     * @param SolutionGroup $SolutionGroup
     */
    public function __construct($SolutionGroup = null)
    {
      $this->SolutionGroup = $SolutionGroup;
    }

    /**
     * @return SolutionGroup
     */
    public function getSolutionGroup()
    {
      return $this->SolutionGroup;
    }

    /**
     * @param SolutionGroup $SolutionGroup
     * @return \FilippoToso\Travelport\Air\Enumeration
     */
    public function setSolutionGroup($SolutionGroup)
    {
      $this->SolutionGroup = $SolutionGroup;
      return $this;
    }

}
