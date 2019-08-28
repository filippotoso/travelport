<?php

namespace FilippoToso\Travelport\Rail;

class GroupedOptionInfo
{

    /**
     * @var GroupedOption $GroupedOption
     */
    protected $GroupedOption = null;

    /**
     * @param GroupedOption $GroupedOption
     */
    public function __construct($GroupedOption = null)
    {
      $this->GroupedOption = $GroupedOption;
    }

    /**
     * @return GroupedOption
     */
    public function getGroupedOption()
    {
      return $this->GroupedOption;
    }

    /**
     * @param GroupedOption $GroupedOption
     * @return \FilippoToso\Travelport\Rail\GroupedOptionInfo
     */
    public function setGroupedOption($GroupedOption)
    {
      $this->GroupedOption = $GroupedOption;
      return $this;
    }

}
